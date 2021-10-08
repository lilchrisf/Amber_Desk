<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    use HasFactory;


    protected $primaryKey = 'hw_id';

    protected $fillable = [
        'class_id',
        'task',
        'description',
        'deadline',
        'visibility',
    ];

    protected $table = 'homework';

}
