<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment_submission extends Model
{
    use HasFactory;

    protected $primaryKey = 'assign_id';

    protected $table = "assignment_submissions";

    protected $fillable = [
        'student_id',
        'home_work',
        'assignment',
        'completion_status',
        'grade',
    ];
}
