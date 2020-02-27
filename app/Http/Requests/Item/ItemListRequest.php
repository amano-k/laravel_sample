<?php

namespace App\Http\Requests\Item;

use Illuminate\Foundation\Http\FormRequest;

class ItemListRequest extends FormRequest
{
    /**
     * 1ページで取得する件数
     */
    private $defaultLimit = 5;

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
        ];
    }

    public function messages()
    {
        return [
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'limit' => $this->limit ?? $this->defaultLimit
        ]);
    }
}
