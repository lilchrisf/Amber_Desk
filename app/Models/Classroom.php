<?php

namespace App\Models;

use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Classroom extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'password',
        'relevance',
        'teacher_id',
        'class_nm',
        'invi_link',
    ];

    protected $primaryKey = 'class_id';
    protected $table = 'classrooms';


    public function user()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'user_id');
    }

    public function teacherInfo()
    {
        return $this->belongsTo(User_info::class, 'teacher_id', 'user_id');
    }

    public function student(){
        return $this->hasMany(Student::class,'class_id','class_id');
    }


    public function assignments(){
        return $this->hasMany(Assignment::class,'class_id','class_id');
    }

    public function homework(){
        return $this->hasMany(Homework::class,'class_id','class_id');
    }



    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    public function setInviLinkAttribute()
    {
        $this->attributes['invi_link'] = (Str::slug(Hash::make($this->attributes['class_nm'].uniqid('', true))));

    }
}
