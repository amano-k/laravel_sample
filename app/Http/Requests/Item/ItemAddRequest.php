<?php

namespace App\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;

class ItemAddRequest extends FormRequest
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
            'name'    => 'required|max:20',
            'title'   => 'required|max:30',
            'comment' => 'required|max:100'
        ];
    }

    public function messages()
    {
        return [
        ];
    }

    protected function prepareForValidation()
    {
        // $this->merge([
        // ]);
    }
}
