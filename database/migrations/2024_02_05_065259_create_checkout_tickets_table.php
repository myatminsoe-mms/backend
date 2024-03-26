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
        Schema::create('checkout_tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('checkout_id')->constrained();
            $table->foreignId('event_ticket_id')->constrained();
            $table->string('event_ticket_name');
            $table->integer('checking_out_quantity');
            $table->decimal('price', 10, 2)->nullable();
            $table->auditColumns();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkout_tickets');
    }
};
