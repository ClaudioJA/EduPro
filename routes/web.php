<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('HomePage');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

Route::get('/userlist', [App\Http\Controllers\UserController::class, 'displayUserList']);
Route::get('/userlist/delete/{id}', [App\Http\Controllers\UserController::class, 'deleteUser']);

// VBL
Route::get('/vbl', [App\Http\Controllers\VBLController::class, 'getAllVBLHeader']);    
Route::get('/vbl/detail/{id}/{detailId}', [App\Http\Controllers\VBLController::class, 'getVBLDetail']);

Route::get('/vbl/create', [App\Http\Controllers\VBLController::class, 'createVBLForm']);
Route::post('/vbl/create-course', [App\Http\Controllers\VBLController::class, 'createVBLProcess'])->name('create-course');

Route::get('/vbldetail/create/{id}', [App\Http\Controllers\VBLController::class, 'createVBLDetailForm']);
Route::post('/vbldetail/create-chapter', [App\Http\Controllers\VBLController::class, 'createVBLDetailProcess'])->name('create-chapter');

Route::get('/vbl/delete/{id}', [App\Http\Controllers\VBLController::class, 'deleteVBL']);
Route::get('/vbldetail/delete/{vbl}/{id}', [App\Http\Controllers\VBLController::class, 'deleteVBLDetail']);

// Forum
Route::get('/forum', [App\Http\Controllers\ForumController::class, 'getAllForum']); 
Route::get('/forum/{id}', [App\Http\Controllers\ForumController::class, 'getForumDetail']);

Route::post('/forum/create-forum', [App\Http\Controllers\ForumController::class, 'addForumProcess'])->name('create-forum'); 
Route::post('/forum/create-reply', [App\Http\Controllers\ForumController::class, 'addReplyProcess'])->name('create-reply');

Route::get('/forum/delete/{forum}', [App\Http\Controllers\ForumController::class, 'deleteForum']);
Route::get('/reply/delete/{forum}/{reply}', [App\Http\Controllers\ForumController::class, 'deleteReply']);

// Live Teaching Class
Route::get('/ltc', [App\Http\Controllers\LTCController::class, 'getLiveTeachingClass']);

// Exercise
Route::get('/exercise/question/{id}', [App\Http\Controllers\ExerciseController::class, 'getQuestion']);
Route::post('/exercise/question/checkAnswer', [App\Http\Controllers\ExerciseController::class, 'checkAnswer'])->name('check-answer');

Route::get('/exercise/create', [App\Http\Controllers\ExerciseController::class, 'createExercise']);
Route::post('/exercise/create-process', [App\Http\Controllers\ExerciseController::class, 'createExerciseProcess'])->name('create-exercise');

Route::get('/exercise/question/create/{id}', [App\Http\Controllers\ExerciseController::class, 'addQuestion']);
Route::post('/exercise/question/create-process', [App\Http\Controllers\ExerciseController::class, 'addQuestionProcess'])->name('create-question');

Route::get('/exercise/delete/{id}', [App\Http\Controllers\ExerciseController::class, 'deleteExercise']);
Route::get('/exercise/question/delete/{exerciseId}/{id}', [App\Http\Controllers\ExerciseController::class, 'deleteQuestion']);

Route::get('/exercise/{subject?}', [App\Http\Controllers\ExerciseController::class, 'getAllExercise']);