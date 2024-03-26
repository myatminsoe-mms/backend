<?php

use App\Enums\TicketTypeEnum;
use App\Enums\TicketVisibilityEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('event_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('entry_date');
            $table->decimal('price')->nullable();
            $table->foreignId('event_id')->constrained();
            $table->enum('ticket_types', array_column(TicketTypeEnum::cases(), 'value'));
            $table->integer('initial_quantity');
            $table->integer('remaining_quantity')->default(0);
            $table->timestamp('sale_start_at');
            $table->timestamp('sale_end_at');
            $table->text('description')->nullable();
            $table->decimal('early_price')->nullable();
            $table->timestamp('early_start_at')->nullable();
            $table->timestamp('early_end_at')->nullable();
            $table->enum('ticket_visibility', array_column(TicketVisibilityEnum::cases(), 'value'));
            $table->timestamp('deleted_at')->nullable();
            $table->bigInteger('deleted_by')->nullable();
            $table->auditColumns();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_tickets');
    }
};
