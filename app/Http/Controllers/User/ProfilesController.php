<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ProfileRequest;
use App\Http\Requests\User\QuestionRequest;
use App\Models\Profile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('show');
    }

    public function show($id)
    {
        $user = User::with('profile')->findOrFail($id);
        return view('user.profile.show', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return view('user.profile.create', [
            'user' => Auth::user()
        ]);
    }

    public function store(ProfileRequest $request)
    {
        try {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $image_path = $file->store('images/users', [
                    'disk' => 'public'
                ]);
                $request->merge([
                    'image_path' => $image_path
                ]);
            }

            $profile = Profile::create([
                'user_id' => Auth::id(),
                'location' => $request->post('location'),
                'image_path' => $request->post('image_path'),
            ]);

            return redirect(RouteServiceProvider::HOME);
        } catch (QueryException $exception) {
            return redirect(RouteServiceProvider::HOME);
        }

    }

    public function edit($id)
    {
        $user = User::with('profile')->findOrFail($id);
        if ($user->id == Auth::id()) {
            return view('user.profile.edit', [
                'user' => $user
            ]);
        } else
            return redirect()->back();
    }

    public function update(ProfileRequest $request, $id)
    {
        $user = User::with('profile')->findOrFail($id);
        if ($user->id == Auth::id()) {
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $image_path = $file->store('images/users', [
                    'disk' => 'public'
                ]);
                $request->merge([
                    'image_path' => $image_path
                ]);
            }
            $user->update([
                'name' => $request->post('name')
            ]);
            $user->profile->update([
                'location' => $request->post('location'),
                'image_path' => $request->post('image_path'),
            ]);
            return redirect(RouteServiceProvider::HOME);
        } else
            return redirect()->back();


    }

}
