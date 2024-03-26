<?php

use App\Enums\CustomerTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable()->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('title')->nullable();
            $table->string('full_name');
            $table->string('country_code')->default('95');
            $table->string('mobile_number')->nullable();
            $table->string('avatar')->nullable();
            $table->enum('status', ['Pending', 'Active', 'Inactive']);
            $table->enum('type', array_column(CustomerTypeEnum::cases(), 'value'));
            $table->auditColumns();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
