<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Class_room extends Model
{
    use HasFactory;


    protected $fillable = [
        'class_password',
        'teacher_id',
        'class_name',
        'invi_link',
    ];

    protected $primaryKey = 'class_id';

    protected $table = "class_rooms";

}
