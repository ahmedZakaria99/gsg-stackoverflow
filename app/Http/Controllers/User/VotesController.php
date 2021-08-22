<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotesController extends Controller
{
    public function store(Request $request, $type)
    {
        if ($type == 'question') {
            $model = Question::findOrFail($request->post('id'));
        } elseif ($type == 'answer') {
            $model = Answer::findOrFail($request->post('id'));
        } else {
            abort(404);
        }

        $model->votes()->create([
            'user_id' => Auth::id(),
            'score' => $request->post('score')
        ]);
        if ($request->post('score') == 1) {
            $model->increment('score');
        } elseif ($request->post('score') == -1) {
            $model->decrement('score');
        }

    }
}
