<?php

use App\Enums\OrganizerStatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('email')->unique();
            $table->string('company_legal_name')->nullable();
            $table->string('position')->nullable();
            $table->string('company_phone')->nullable();
            $table->string('tax_payer_no')->nullable();
            $table->string('website')->nullable();
            $table->string('avatar')->nullable();
            $table->enum('organizer_status', array_column(OrganizerStatusEnum::cases(), 'value'))->default(OrganizerStatusEnum::ACTIVE);
            $table->auditColumns();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizers');
    }
};
