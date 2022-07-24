<?php

namespace App\Http\Requests;

use App\Http\Requests\ApiBaseFormRequest;

class PatchContentRequest extends ApiBaseFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'contentId' => ['required'],
            'content' => ['required']
        ];
    }
}
