<?php

namespace App\Models;

use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use HasFactory, SoftDeletes;


    protected $fillable = [
        'password',
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

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
