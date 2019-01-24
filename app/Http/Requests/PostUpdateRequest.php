<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:categories,slug',
            'user_id' => 'required|integer',
            'category_id' => 'required|integer',
            'tags_id' => 'required|array',
            'body' => 'required',
            'status' => 'required|in:DRAFT,PUBLISHED',
        ];
        if($this->get('file'))
        $rules = array_merge($rules, ['file' => 'nimes:jpg,jpeg,png']);

        return $rules;
    }
}
