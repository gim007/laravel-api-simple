<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessSubmission;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;

class SubmissionController
{
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name'    => 'required|string',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $data = $validator->validated();
        
        // Dispatch job
        ProcessSubmission::dispatch($data);

        return response()->json(['message' => 'Submission received and is being processed.'], 200);
    }
}