<?php

use App\Enums\PaymentMethodEnum;
use App\Enums\PaymentStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('payable_id');
            $table->foreign('payable_id')->references('id')->on('purchases');
            $table->string('payable_type');
            $table->decimal('amount', 10, 2);
            $table->dateTime('payment_date');
            $table->enum('payment_status', array_column(PaymentStatusEnum::cases(), 'value'));
            $table->enum('payment_method', array_column(PaymentMethodEnum::cases(), 'value'));
            $table->string('transaction_id')->nullable();
            $table->auditColumns();

            // Indexes
            $table->index(['payable_id', 'payable_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
