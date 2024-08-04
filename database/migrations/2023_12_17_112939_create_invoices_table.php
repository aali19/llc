<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string("brand");
            $table->string("email");
            $table->string("type");
            $table->integer("order_amount");
            $table->integer("paid_amount")->default();
            $table->tinyInteger("total_milestone")->default(0);
            $table->tinyInteger("completed_milestone")->default(0);
            $table->integer("installment_amount")->nullable();
            $table->text("description")->nullable();
            $table->text("url")->nullable();
            $table->string("status")->default("unpaid");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
