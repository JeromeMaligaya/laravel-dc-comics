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

    public function messages()
    {
        return [
            "brand.required" => "The brand is required.",
            "brand.string" => "The brand must be a valid text.",
            "brand.min" => "The brand must have at least 2 characters.",
            "brand.max" => "The brand may not exceed 255 characters.",

            "model.required" => "The model is required.",
            "model.string" => "The model must be a valid text.",
            "model.min" => "The model must have at least 5 characters.",
            "model.max" => "The model may not exceed 255 characters.",

            "colorway.required" => "The colorway is required.",
            "colorway.string" => "The colorway must be a valid text.",
            "colorway.min" => "The colorway must have at least 3 characters.",
            "colorway.max" => "The colorway may not exceed 255 characters.",

            "year.required" => "The year is required.",
            "year.integer" => "The year must be an integer.",
            "year.digits" => "The year must be a 4-digit number.",

            "retail_price.required" => "The retail price is required.",
            "retail_price.numeric" => "The retail price must be a valid number.",
            "retail_price.min" => "The retail price cannot be less than 0.",

            "actual_price.required" => "The actual price is required.",
            "actual_price.numeric" => "The actual price must be a valid number.",
            "actual_price.min" => "The actual price cannot be less than 0.",

            "img_url.required" => "The image URL is required.",
            "img_url.url" => "The image URL must be a valid URL.",
            "img_url.max" => "The image URL may not exceed 255 characters.",
        ];
    }
}
