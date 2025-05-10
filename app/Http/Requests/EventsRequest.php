<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventsRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'host_name' => 'nullable|string|max:255',
            'host_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:9216',
            'description' => 'nullable|string',
            'guests' => 'nullable|string', // Can be JSON or comma-separated string depending on frontend
            'sponsors' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'start_date' => 'required|date|after_or_equal:today',
            'start_time' => 'required',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'end_time' => 'nullable',
            'banner_1' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'banner_2' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'capacity' => 'nullable|integer|min:1',
            'is_paid' => 'required',
            'price' => 'nullable|numeric|min:0|required_if:is_paid,1',
            'category' => 'nullable|string|max:255',
            'links' => 'nullable',
        ];
    }
}
