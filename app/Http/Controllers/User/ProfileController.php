<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ProfileRequest;
use App\Http\Requests\User\QuestionRequest;
use App\Models\Profile;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
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
        $profile = Profile::create([
            'user_id' => Auth::id(),
            'location' => $request->post('location'),
        ]);

        return redirect(RouteServiceProvider::HOME);
    }

    public function edit($id)
    {
        $user = User::with('profile')->findOrFail($id);
        return view('user.profile.edit', [
            'user' => $user
        ]);
    }

    public function update(ProfileRequest $request, $id)
    {
        $user = User::with('profile')->findOrFail($id);
        $user->update([
            'name' => $request->post('name')
        ]);
        $user->profile->update([
            'location' => $request->post('location'),
        ]);

        return redirect(RouteServiceProvider::HOME);
    }

}
