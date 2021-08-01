<?php

namespace App\Http\Requests\User;

use App\Models\Answer;
use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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
            'user_id' => 'required|int|exists:users,id',
            'question_id' => 'required|int|exists:questions,id',
            'content' => 'required|min:5|max:255',
            'accepted' => 'required|in:' . Answer::ACCEPTED_FALSE . ',' . Answer::ACCEPTED_TRUE
        ];
    }
}
