<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homework extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'class_id',
        'task',
        'description',
        'deadline',
        'visibility',
    ];
    protected $primaryKey = 'homework_id';
    protected $table = 'homework';

    public function classroom() {
        return $this->belongsTo(Classroom::class,'class_id','class_id');
    }

    public function assingment_submissions() {
        return $this->hasMany(Assignment_Submission::class,'homework_id','homework_id');
    }

}
