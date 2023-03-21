<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//Helpers
use Illuminate\Validation\Rule;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=> 'required|max:255',
            'thumb'=> 'nullable|max:255|url',
            'description'=> 'nullable|max:30000',
            'price'=> 'required|numeric|min:0.9|max:9999.99',
            'series'=> 'required|max:255',
            'sale_date'=> 'required|date',
            'type'=> [
                'required',
                Rule::in(['comic book', 'graphic novel'])
            ]
        ];
    }
}
