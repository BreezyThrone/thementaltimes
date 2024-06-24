<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\FeedbackController;

use App\Models\Story;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/love', 'love')->name('love');
Route::view('/emotions', 'emotions')->name('emotions');
Route::view('/stress', 'stress')->name('stress');
Route::view('/work', 'work')->name('work');
Route::view('/stories', 'stories')->name('stories');
Route::post('/stories', [StoryController::class, 'store'])->name('stories.store');

Route::get('/stories', function () {
    $stories = Story::all();
    return view('stories', compact('stories'));
})->name('stories');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

