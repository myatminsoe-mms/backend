<?php

namespace App\Modules\CoreModule\Http\Requests;

use App\Enums\UserStatusEnum;
use Illuminate\Validation\Rules\Enum;
use Laranex\NextLaravel\Cores\Request;

class UpdateUserRequest extends Request
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
        $userId = $this->route('id');

        return [
            'password' => 'nullable|string|min:8',
            'username' => 'string|unique:users,username,' . $userId . ',id',
            'email' => 'nullable|email|unique:users,email,' . $userId . ',id',
            'full_name' => 'nullable|string',
            'country_code' => 'nullable',
            'mobile_number' => 'nullable',
            'avatar' => 'nullable|file|mimes:jpg,jpeg,png|max:1024',
            'avatar_updated' => 'in:true,false,1,0',
            'status' => [new Enum(UserStatusEnum::class)],
        ];
    }
}
