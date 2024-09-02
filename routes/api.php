<?php

use App\Http\Controllers\SubmissionController;
use Illuminate\Http\JsonResponse;

Route::post('/submit', [SubmissionController::class, 'store']);
Route::get('/submit', function () {
    return response()->json(['message' => 'Please use POST request.'], 403);
});


