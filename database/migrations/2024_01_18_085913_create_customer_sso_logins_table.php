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
        Schema::create('customer_sso_logins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained();
            $table->string('sso_login_provider_name');
            $table->string('sso_login_provider_id');
            $table->text('login_provider_access_token')->nullable();
            $table->text('login_provider_refresh_token')->nullable();
            $table->timestamp('login_provider_expires_in')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_sso_logins');
    }
};
