<?php

use App\Http\Controllers\User\AnswersController;
use App\Http\Controllers\User\ProfilesController;
use App\Http\Controllers\User\QuestionsController;
use App\Models\Profile;
use App\Models\Question;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/profile/create', [ProfilesController::class, 'create'])->name('profile.create');
Route::post('/profile/store',[ProfilesController::class, 'store'])->name('profile.store');
Route::get('/profile/edit/{id}', [ProfilesController::class, 'edit'])->name('profile.edit');
Route::put('/profile/update/{id}',[ProfilesController::class, 'update'])->name('profile.update');
Route::get('/profile/{id}', [ProfilesController::class, 'show'])->name('profile.show');

Route::get('questions/tagged/{name}', [QuestionsController::class, 'getAllQuestionsRelatedToThisTag'])
    ->name('get-questions-related-to-tag');
Route::get('/search',[QuestionsController::class, 'search'])->name('search');
Route::resource('questions', QuestionsController::class);
Route::resource('answers', AnswersController::class)->middleware(['auth']);
