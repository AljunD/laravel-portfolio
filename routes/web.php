<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Static Pages
|--------------------------------------------------------------------------
*/
Route::view('/', 'home')->name('home');
Route::view('/skills', 'skills')->name('skills');
Route::view('/projects', 'projects')->name('projects');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Notes Index
|--------------------------------------------------------------------------
*/
Route::view('/notes', 'notes.index')->name('notes.index');

/*
|--------------------------------------------------------------------------
| Information Assurance & Security Notes
|--------------------------------------------------------------------------
*/
Route::view('/notes/information-assurance/note1', 'notes.information-assurance.note1')->name('notes.note1');
Route::view('/notes/information-assurance/note2', 'notes.information-assurance.note2')->name('notes.note2');
Route::view('/notes/information-assurance/note3', 'notes.information-assurance.note3')->name('notes.note3');
Route::view('/notes/information-assurance/note4', 'notes.information-assurance.note4')->name('notes.note4');
Route::view('/notes/information-assurance/note5', 'notes.information-assurance.note5')->name('notes.note5');
Route::view('/notes/information-assurance/note6', 'notes.information-assurance.note6')->name('notes.note6');
Route::view('/notes/information-assurance/note7', 'notes.information-assurance.note7')->name('notes.note7');
Route::view('/notes/information-assurance/note8', 'notes.information-assurance.note8')->name('notes.note8');
Route::view('/notes/information-assurance/note9', 'notes.information-assurance.note9')->name('notes.note9');
Route::view('/notes/information-assurance/note10', 'notes.information-assurance.note10')->name('notes.note10');
Route::view('/notes/information-assurance/note11', 'notes.information-assurance.note11')->name('notes.note11');
Route::view('/notes/information-assurance/note12', 'notes.information-assurance.note12')->name('notes.note12');
Route::view('/notes/information-assurance/note13', 'notes.information-assurance.note13')->name('notes.note13');
Route::view('/notes/information-assurance/note14', 'notes.information-assurance.note14')->name('notes.note14');

/*
|--------------------------------------------------------------------------
| Laravel Framework Notes
|--------------------------------------------------------------------------
*/
Route::view('/notes/laravel-framework/note1', 'notes.laravel-framework.note1')->name('notes.laravel.note1');
Route::view('/notes/laravel-framework/note2', 'notes.laravel-framework.note2')->name('notes.laravel.note2');

/*
|--------------------------------------------------------------------------
| PKS & Labs
|--------------------------------------------------------------------------
*/
Route::view('/notes/pks', 'notes.pks')->name('notes.pks');
Route::view('/notes/labs', 'notes.labs')->name('notes.labs');

/*
|--------------------------------------------------------------------------
| Contact
|--------------------------------------------------------------------------
*/
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
