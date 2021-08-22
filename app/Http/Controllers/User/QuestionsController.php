<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\QuestionRequest;
use App\Models\Question;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('index');
    }

    public function index()
    {
        $questions = Question::with(['answers', 'tags', 'user'])->paginate(2);
        return view('user.questions.index', [
            'questions' => $questions,
            'title' => 'All Questions'
        ]);
    }


    public function create()
    {
        return view('user.questions.create');
    }


    public function store(Request $request)
    {
        $question = Question::create([
            'title' => $request->post('title'),
            'description' => $request->post('description'),
            'status' => $request->post('status'),
            'user_id' => Auth::id()
        ]);

        $tagIds = $this->saveTagsInPivotTable($request->post('tags'));
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
        $question = Question::with('tags')->findOrFail($id);
        return view('user.questions.edit', [
            'question' => $question,
        ]);
    }

    public function update(QuestionRequest $request, $id)
    {
        $question = Question::findOrFail($id);
        $question->update([
            'title' => $request->post('title'),
            'description' => $request->post('description'),
            'status' => $request->post('status'),
        ]);
        $tagIds = $this->saveTagsInPivotTable($request->post('tags'));
        $question->tags()->attach($tagIds);

        return redirect()->route('questions.show', $id);
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();
        return redirect()->route('questions.index');
    }

    public function getAllQuestionsRelatedToThisTag($name)
    {
        $questions = Question::with(['tags', 'answers', 'user'])
            ->whereHas('tags', function ($query) use ($name) {
                $query->where('name', $name);
            })->paginate(2);
        return view('user.questions.index', [
            'questions' => $questions,
            'title' => "Questions tagged [$name]"
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'word' => 'required'
        ]);
        $word = $request->post('word');
        $questions = Question::with(['answers', 'tags', 'user'])
            ->where('title', 'like', "%$word%")
            ->orWhereHas('tags', function ($query) use ($word) {
                $query->where('name', $word);
            })
            ->paginate(2);

        return view('user.questions.index', [
            'questions' => $questions,
            'title' => "Questions Related [$word]"
        ]);
    }

    public function saveTagsInPivotTable($tagsAsString)
    {
        $tagsFromRequest = explode(',', $tagsAsString);
        foreach ($tagsFromRequest as $tag) {
            $tagIds[] = Tag::where('name', $tag)->pluck('id')->first();
        }
        return $tagIds;
    }
}
