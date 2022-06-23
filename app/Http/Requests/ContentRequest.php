<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class ContentRequest extends FormRequest
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
            'array' => ['sometimes', 'required', 'array', 'min:1'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $response['errors']  = $validator->errors()->toArray();

        throw new HttpResponseException(response()->json($response));        
    }
}
