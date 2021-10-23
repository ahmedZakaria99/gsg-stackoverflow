<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\AnswerRequest;
use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnswersController extends Controller
{
    public function index()
    {
        abort(404);
    }

    public function create()
    {
        abort(404);
    }


    public function store(AnswerRequest $request)
    {
        $id = $request->post('question_id');
        $question = Question::findOrFail($id);
        if ($question->status == "open") {
            $request->merge([
                'user_id' => Auth::id(),
            ]);
            $answer = Answer::create($request->all());
            return redirect()->route('questions.show', $answer->question_id);
        } else
            return redirect()->back();

    }

    public function show($id)
    {
        abort(404);
    }

    public function edit($id)
    {
        $answer = Answer::findOrFail($id);
        if ($answer->user->id == Auth::id()) {
            return view('user.answers.edit', [
                'answer' => $answer
            ]);
        } else
            return redirect()->back();
    }

    public function update(AnswerRequest $request, $id)
    {
        $answer = Answer::findOrFail($id);
        if ($answer->user->id == Auth::id()) {
            $answer->update($request->all());
            return redirect()->route('questions.show', $answer->question_id);
        } else
            return redirect()->back();
    }


    public function destroy($id)
    {
        $answer = Answer::findOrFail($id);
        $answer->delete();
        return redirect()->route('questions.show', $answer->question_id);
    }
}
