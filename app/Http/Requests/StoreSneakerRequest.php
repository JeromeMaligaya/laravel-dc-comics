<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSneakerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "brand" => ["required", "string", "min:2", "max:255"],
            "model" => ["required", "string", "min:5", "max:255"],
            "colorway" => ["required", "string", "min:3", "max:255"],
            "year" => ["required", "integer", "digits:4"],
            "retail_price" => ["required", "numeric", "min:0"],
            "actual_price" => ["required", "numeric", "min:0"],
            "img_url" => ["required", "url", "max:255"],
        ];
    }
}
