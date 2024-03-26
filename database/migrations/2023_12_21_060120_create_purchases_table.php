<?php

use App\Enums\CustomerTypeEnum;
use App\Enums\PurchaseStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('checkout_id')->constrained();
            $table->foreignId('customer_id')->constrained();
            $table->string('customer_name');
            $table->foreignId('event_id')->constrained();
            $table->string('event_title');
            $table->decimal('total_amount', 10, 2);
            $table->enum('status', array_column(PurchaseStatusEnum::cases(), 'value'));
            $table->enum('customer_type', array_column(CustomerTypeEnum::cases(), 'value'));
            $table->auditColumns();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
