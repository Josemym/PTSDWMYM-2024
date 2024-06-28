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
        Schema::create('dbts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('invoice_id');
            $table->string('description');
            $table->timestamp('due_date');
            $table->decimal('debt_ammount', 10, 2);
            $table->decimal('ammount_paid', 10, 2);
            $table->decimal('balance', 10, 2);
            $table->char('active');
            $table->char('payment_status');
            $table->char('debt_status');
            $table->unsignedInteger('payment_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dbts');
    }
};
