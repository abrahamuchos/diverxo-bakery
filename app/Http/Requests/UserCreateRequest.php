<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
          'email' => 'email|required',
          'is_admin' => 'boolean',
          'name' => 'required|min:4|max:32',
          'lastName' => 'required|min:4|max:32',
          'password' => 'required|confirmed|max:255',
          'gender' => 'required',
          'document' => 'max:32',
          'country' => 'min:4|max:65|string|nullable',
          'state' => 'min:4|max:65|string|nullable',
          'city' => 'min:4|max:65|string|nullable',
          'addressLine1' => 'min:4|max:255|string|nullable',
          'addressLine2' => 'max:255|string|nullable',
          'phoneNumber' => 'string|nullable',
          'isSubscriber' => 'boolean',
        ];
    }
}
