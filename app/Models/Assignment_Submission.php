<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assignment_Submission extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primaryKey = 'assign_id';

    protected $table = "assignment_submissions";

    protected $fillable = [
        'student_id',
        'home_work',
        'assignment',
        'completion_status',
        'grade',
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    public  function homework() {
        return $this->belongsTo(Homework::class,'homework_id','homework_id');
    }
}
