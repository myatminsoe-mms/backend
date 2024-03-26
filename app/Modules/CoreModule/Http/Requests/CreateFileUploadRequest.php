<?php

namespace App\Modules\CoreModule\Http\Requests;

use Laranex\NextLaravel\Cores\Request;

class CreateFileUploadRequest extends Request
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
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ];
    }
}
