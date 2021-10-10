<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'user_id',
        'class_id',
        'is_enrolled',
    ];

    protected $primaryKey = 'student_id';
    protected $table = 'students';

    public function classroom(){
        return $this->belongsTo(Classroom::class,'class_id','class_id')->with('teacherInfo');
    }

    public function user() {
        return $this->belongsTo(User::class,'user_id','user_id');
    }

    public function user_info(){
        return $this->hasOne(User_info::class,'user_id','user_id');
    }

}
