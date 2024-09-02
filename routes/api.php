<?php

use App\Http\Controllers\SubmissionController;

Route::post('/submit', [SubmissionController::class, 'store']);


