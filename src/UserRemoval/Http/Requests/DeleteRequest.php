<?php

namespace OwowAgency\UserRemoval\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use OwowAgency\UserRemoval\Http\Rules\ComparePassword;

class DeleteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'password' => [
                'required',
                new ComparePassword(currentUser()),
            ],
        ];
    }
}
