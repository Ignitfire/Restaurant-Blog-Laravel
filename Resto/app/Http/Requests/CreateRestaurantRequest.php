<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateRestaurantRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required','min:3', Rule::unique('App\Models\Restaurant')->ignore($this->route()->parameter('App\Models\Restaurant'))],
            'owner_id' => 'required',
            'content'=>'required',
            'food_type'=>'required',
            'price'=>'required',
            'url'=>'required',
            'tags'=>'required',
            'status'=>'required'
        ];
    }
}
