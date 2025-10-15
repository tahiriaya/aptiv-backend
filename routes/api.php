<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\showFileController; // Mise à jour du namespace avec la bonne casse

Route::post('/register', [RegisterController::class, 'register']);//sign up
Route::post('/login', [AuthController::class, 'login']);//sign in
Route::post('/files', [FileController::class, 'store']);//add a legal file
Route::get('/list-files', [ShowFileController::class, 'index']); //show legal files
Route::get('/search', [ShowFileController::class, 'search']);//search in table
Route::delete('/files/{id}', [ShowFileController::class, 'destroy']);//delete a legal file

Route::get('/files/{id}', [ShowFileController::class, 'show']);//show legal file by id
Route::put('/editFiles/{id}', [ShowFileController::class, 'update']);//update legal file

Route::get('/dossiers', [ShowFileController::class, 'filter']);//filter by year and status
use App\Http\Controllers\FeedbackController;

Route::post('/submit-feedback', [FeedbackController::class, 'submitFeedback']);//add feedback
Route::get('/feedbacks', [FeedbackController::class, 'index']); //show feedbacks
