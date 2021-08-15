<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\QuestionRequest;
use App\Models\Question;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('index');
    }

    public function index()
    {
        $questions = Question::with(['answers', 'tags'])->paginate();
        return view('user.questions.index', [
            'questions' => $questions
        ]);
    }


    public function create()
    {
        return view('user.questions.create');
    }


    public function store(QuestionRequest $request)
    {
        $question = Question::create([
            'title' => $request->post('title'),
            'description' => $request->post('description'),
            'status' => $request->post('status'),
            'user_id' => Auth::id()
        ]);
        // save tags at pivot table
        $tagsFromRequest = explode(',', $request->post('tags'));
        foreach ($tagsFromRequest as $tag) {
            $tagIds[] = Tag::where('name', $tag)->pluck('id')->first();
        }
        $question->tags()->attach($tagIds);

        return redirect()->route('questions.index');
    }


    public function show($id)
    {
        $question = Question::with(['answers', 'tags'])->findOrFail($id);
        $numberOfUsers = User::count();
        return view('user.questions.details', [
            'question' => $question,
            'numberOfUsers' => $numberOfUsers
        ]);
    }


    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('user.questions.edit', [
            'question' => $question,
        ]);
    }

    public function update(QuestionRequest $request, $id)
    {
        $question = Question::findOrFail($id);
        $question->update($request->all());
        return redirect()->route('questions.index');
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()->route('questions.index');
    }
}
