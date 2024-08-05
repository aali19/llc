<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Transaction;
use App\Services\NmiService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Stripe\Charge;
use Stripe\Stripe;

class PackageController extends Controller
{
    protected $nmiService;

    public function __construct(NmiService $nmiService)
    {
        $this->nmiService = $nmiService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Contact American Writing Solution - Your Book Publishing Partner";
        return view("package", compact("title"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = Validator::make($request->all(), [
                'name' => 'string|required',
                'email' => 'email|required',
                'type' => 'string|required',
                'amount' => 'integer|required',
                'milestone' => 'integer|required',
                'description' => 'required',
            ]);
            if ($validated->fails())
                throw new \Exception($validated->errors()->first());


            $data = [
                'brand' => $request->name,
                'email' => $request->email,
                'type' => $request->type,
                'order_amount' => $request->amount,
                'total_milestone' => $request->milestone ?? 0,
                'description' => $request->description
            ];
            $encrypted = Crypt::encrypt($data);
            $data["url"] = $encrypted;
            if ($data["total_milestone"] > 0)
                $data["installment_amount"] = round($request->amount / $request->milestone);

            $invoice = Invoice::create($data);
            Mail::send('email.invoice', $data, function ($m) use ($request) {
                $to = $request->email;
                $m->from(env("MAIL_FROM_ADDRESS"), config('app.name', 'APP Name'));
                $m->to($to, "American Writing Solution")->subject("American Writing Solution");
            });

            return redirect()->back()->with("success", "Invoice send to your email address !!!");
        } catch (\Exception $e) {

            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function invoice(Request $request)
    {
        try {
            $url = url()->current();
            $hash = substr(strrchr(rtrim($url, '/'), '/'), 1);
            $invoice = Invoice::where(["url" => urldecode($hash)])->first();

            if (empty($invoice))
                throw new \Exception("Invalid attempt!");

            return view("payment", compact(["invoice"]));
        } catch (\Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    public function transaction(Request $request)
    {
        try {

            $validated = Validator::make($request->all(), [
                'invoiceId' => 'integer|required',
//                'customUnitAmount' => 'string|required',
                'amount' => 'integer|required',
            ]);
            if ($validated->fails())
                throw new \Exception($validated->errors()->first());


            DB::beginTransaction();
            $invoice = Invoice::find($request->invoiceId);

            if (empty($invoice))
                throw new \Exception("Invalid invoice");

            if ($invoice->status === "paid")
                throw new \Exception("This invoice is already paid!");

            $amount = $request->input('amount');
            $creditCardNumber = $request->input('cardNumber');
            $expirationDate = $request->input('cardExpiry');

            $response = $this->nmiService->processPayment($amount, $creditCardNumber, $expirationDate);

            if (isset($response['error'])) {
                throw new \Exception($response['error']);
            }


            $invoice->paid_amount = $invoice->paid_amount + str_replace("$", "", $request->customUnitAmount);
            $invoice->completed_milestone++;
            if ($invoice->paid_amount >= $invoice->order_amount)
                $invoice->status = "paid";

            if (!$invoice->save())
                throw new \Exception("Error in transaction");

            Transaction::create(["invoice_id" => $invoice->id, "amount" => $request->amount]);

            DB::commit();

            return view("thank-you-payment", ["title", "Transaction successful!"]);
        } catch (\Exception $e) {
            DB::rollBack();
            session(['error' => $e->getMessage()]);
            return redirect()->back()->with("error", $e->getMessage());
        }

    }
}
