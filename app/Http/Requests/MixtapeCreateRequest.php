<?php

namespace App\Http\Requests;

class MixtapeCreateRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'bail|required|max:100',
            'description' => 'bail|required',
            'variant' => 'bail|required|max:100',
            'hex' => 'bail|required',
            'url' => 'bail|required'
        ];
    }
}
