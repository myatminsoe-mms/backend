<?php

namespace App\Modules\OrganizerModule\Http\Requests;

use Laranex\NextLaravel\Cores\Request;

class CreateOrganizerRequest extends Request
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
            'name' => 'required|string|unique:organizers',
            'description' => 'nullable|string',
            'email' => 'nullable|email|unique:organizers,email',
            'company_legal_name' => 'nullable|string',
            'position' => 'nullable|string',
            'company_phone' => 'nullable',
            'tax_payer_no' => 'nullable',
            'website' => 'string',
            'avatar' => 'nullable|file|mimes:jpg,jpeg,png|max:1024',
        ];
    }
}
