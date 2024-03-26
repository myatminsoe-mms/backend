<?php

namespace App\Modules\OrganizerModule\Http\Requests;

use Laranex\NextLaravel\Cores\Request;

class UpdateOrganizerRequest extends Request
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
        $organizerId = $this->route('id');

        return [
            'name' => 'required|string|unique:organizers,name,' . $organizerId . ',id',
            'description' => 'required',
            'email' => 'nullable|email|unique:organizers,email,' . $organizerId . ',id',
            'company_legal_name' => 'required|string',
            'position' => 'required|string',
            'company_phone' => 'required',
            'tax_payer_no' => 'required',
            'website' => 'required|string',
            'avatar' => 'nullable|file|mimes:jpg,jpeg,png|max:1024',
            'avatar_updated' => 'in:true,false,1,0',
        ];
    }
}
