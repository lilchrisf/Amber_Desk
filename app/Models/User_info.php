<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_info extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'first_nm',
        'last_nm',
        'username',
        'avatar',
        'bio',
    ];

    protected $table = 'user_infos';
    protected $primaryKey = 'user_info_id';

    public function user() {
        return $this->belongsTo(User::class,'user_id','user_id');
    }
    public function teacherInfo(){
        return $this->hasOne(Classroom::class,'user_id', 'user_id');
    }
}
