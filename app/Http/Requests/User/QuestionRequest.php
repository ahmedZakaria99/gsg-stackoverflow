<?php

namespace App\Http\Requests\User;

use App\Models\Tag;
use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'description' => 'required|min:5|max:255',
            'status' => 'in:open,close',
            'tags' => [
                'required',
                function ($attribute, $value, $fail) {
                    $tagsFromDB = Tag::pluck('name');
                    $tagsFromRequest = explode(',', $value);
                    foreach (str_replace(' ','',$tagsFromRequest) as $tag) {
                        if (!in_array($tag, $tagsFromDB->toArray())) {
                            $fail ('You cannot use ' . $tag . ' tag in your input');
                        }
                    }
                }
            ],
        ];
    }
}
