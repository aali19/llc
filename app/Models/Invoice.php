<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ["brand","type","email","installment_amount","order_amount","paid_amount","total_milestone","completed_milestone","description","url"];
}
