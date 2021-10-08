<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Homework extends Model
{
    use HasFactory;
    use SoftDeletes;


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
