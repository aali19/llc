<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ThankYouController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Thank You";
        return view("thank-you", compact("title"));
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
            $title = "Thank You";

            $data = [
                "sender_name" => $_POST["name"] ?? null,
                "reply_to_email" => $_POST["email"] ?? null,
                "company" => $_POST["phone"] ?? null,
                "brief" => $_POST["brief"] ?? null,
                "package" => $_POST["package"] ?? null
            ];

            Mail::send('email.query', $data, function ($m) {
                $to = "support@americanwritingsolution.com";
                $m->from(env("MAIL_FROM_ADDRESS"), config('app.name', 'APP Name'));
                $m->to($to, "American Writing Solution")->subject("American Writing Solution");
            });
            return view("thank-you", compact("title"));
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
}
