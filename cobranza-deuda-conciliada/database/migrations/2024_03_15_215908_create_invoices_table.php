<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('trade_name_of_issuer');
            $table->string('legal_name_of_issuer');
            $table->string('ruc_of_issuer');
            $table->string('address_of_issuer');
            $table->string('phone_of_issuer');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('invoice_number');
            $table->timestamp('date_of_issue');
            $table->decimal('ammount', 10, 2);
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
