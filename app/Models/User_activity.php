<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_activity extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'activity_desc',
    ];

    protected $primaryKey = 'user_activity_id';

    protected $table = 'user_activities';
}
