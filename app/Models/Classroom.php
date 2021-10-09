<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'class_password',
        'teacher_id',
        'class_name',
        'invi_link',
    ];

    protected $primaryKey = 'class_id';

    protected $table = "classrooms";

    public function user(){
        return $this->belongsTo(User::class,'teacher_id','user_id');
    }

}
