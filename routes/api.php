<?php

use App\Http\Controllers\SubmissionController;

Route::get('/submit', [SubmissionController::class, 'store']);


