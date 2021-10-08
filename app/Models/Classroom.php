<?php

namespace App\Models;

use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * @property mixed $user_id
     * @property mixed $class_nm
     * @property mixed $class_desc
     * @property mixed $subject
     * @property mixed $password
     * @property mixed $invi_link
     */

    protected $primaryKey = 'class_id';
    protected $table = 'classrooms';

    protected $fillable = [
        'user_id',
        'class_nm',
        'class_desc',
        'subject',
        'password',
        'invi_link'
    ];


    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

}
