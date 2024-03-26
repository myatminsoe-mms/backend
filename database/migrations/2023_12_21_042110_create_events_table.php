<?php

use App\Enums\EventStatusEnum;
use App\Enums\EventTemplateEnum;
use App\Enums\EventVisibilitiesEnum;
use App\Enums\LocationTypeEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('organizer_id')->constrained();
            $table->string('organizer_name');
            $table->enum('event_template', array_column(EventTemplateEnum::cases(), 'value'));
            $table->foreignId('type_id')->constrained();
            $table->string('type_name', 255)->nullable();
            $table->foreignId('category_id')->constrained();
            $table->string('category_name', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->string('alternative_domain')->nullable();
            $table->json('tags')->nullable();
            $table->longText('about')->nullable();
            $table->enum('location_types', array_column(LocationTypeEnum::cases(), 'value'));
            $table->text('venue_address')->nullable();
            $table->text('online_address')->nullable();
            $table->text('map_url')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->json('banner_images')->nullable();
            $table->json('agenda')->nullable();
            $table->json('faqs')->nullable();
            $table->longText('additional_information')->nullable();
            $table->json('event_images')->nullable();
            $table->json('sponsors')->nullable();
            $table->json('contact_information')->nullable();
            $table->json('social_links')->nullable();
            $table->enum('event_status', array_column(EventStatusEnum::cases(), 'value'))->default(EventStatusEnum::DRAFT);
            $table->boolean('is_attendee_info_mandatory')->default(0);
            $table->enum('visibility', array_column(EventVisibilitiesEnum::cases(), 'value'));
            $table->timestamp('publish_at')->nullable();
            $table->timestamp('end_at')->nullable();
            $table->auditColumns();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
