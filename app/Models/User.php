<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'email',
        'password',
    ];

    protected $primaryKey = 'user_id';

    protected $table = "users";

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_info() {
        return $this->hasOne(User_info::class,'user_id','user_id');
    }


    public function student() {
        return $this->hasMany(Student::class,'user_id','user_id')->with('classroom');
    }

    public function classroom() {
        return $this->hasMany(Classroom::class,'teacher_id','user_id');
    }

    public function user_activity() {
        return $this->hasMany(User_Activity::class,'user_id','user_id');
    }

    public function assignment_submission(){
        return $this->hasMany(Assignment_Submission::class,'user_id','user_id');
    }
}
