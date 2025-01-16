<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsUpdateRequest extends FormRequest
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
            'title' => 'required|string|min:5',
            'author' => 'required|string|min:5',
            'image_url' => 'required|string|min:5',
            'news_text' => 'required|string|min:5|max:1000',
            'views' => 'required|integer',
            'comments_count' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Жаңалықтың тақырыбы жазылмаған',
            'title.min' => 'Жаңалықтың тақырыбы кемі 5 символдан тұру керек',
            'comments_count' => 'Тек сандарды жазыңыз!'
        ];
    }
}
