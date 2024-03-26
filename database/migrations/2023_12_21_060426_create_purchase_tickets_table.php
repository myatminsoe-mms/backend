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
        Schema::create('purchase_tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('purchase_id')->constrained();
            $table->foreignId('customer_id')->constrained();
            $table->string('customer_name', 255);
            $table->foreignId('event_id')->constrained();
            $table->string('event_title');
            $table->foreignId('event_ticket_id')->constrained();
            $table->string('event_ticket_name', 255);
            $table->decimal('price', 10, 2);
            $table->string('ticket_number', 255)->nullable();
            $table->string('attendee_name', 255)->nullable();
            $table->string('attendee_email', 255)->nullable();
            $table->string('attendee_phone', 255)->nullable();
            $table->auditColumns();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase_tickets');
    }
};
