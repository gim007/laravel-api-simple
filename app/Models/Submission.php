<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'submissions';

    // Define the fillable attributes for mass assignment
    protected $fillable = ['name', 'email', 'message'];
}
