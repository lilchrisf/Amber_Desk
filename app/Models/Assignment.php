<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assignment extends Model
{
    use HasFactory,SoftDeletes;


protected $fillable = [
  'class_id',
  'visibility',
  'title',
  'topic',
  'desc',
  'points',
  'due_date',
  'status',
];
    protected $primaryKey = 'assign_id';
    protected $table = 'assignments';

    public function classroom() {
        return $this->belongsTo(Classroom::class,'class_id','class_id');
    }
}

