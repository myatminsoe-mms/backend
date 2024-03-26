<?php

namespace App\Modules\EventTicketModule\Http\Requests;

use Laranex\NextLaravel\Cores\Request;

class CreateEventTicketRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255|unique:events',
            'organizer_id' => 'required|exists:organizers,id',
            'organizer_name' => 'nullable',
            'event_template' => 'required',
            'type_id' => 'required|exists:types,id',
            'type_name' => 'nullable|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'category_name' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255|unique:events',
            'alternative_domain' => 'nullable|string|max:255',
            'tags' => 'required',
            'about' => 'nullable|string',
            'location_types' => 'required',
            'venue_address' => 'nullable|string',
            'online_address' => 'nullable|string',
            'map_url' => 'nullable|string',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|',
            'start_time' => 'nullable',
            'end_time' => 'nullable',
            'banner_images' => 'nullable',
            'agenda' => 'nullable',
            'faqs' => 'nullable',
            'additional_information' => 'nullable|string',
            'event_images' => 'nullable',
            'sponsors' => 'nullable',
            'contact_information' => 'nullable',
            'social_links' => 'nullable',
            'event_status' => 'nullable',
            'is_attendee_info_mandatory' => 'required',
            'visibility' => 'nullable',
            'publish_at' => 'nullable',
        ];
    }
}
