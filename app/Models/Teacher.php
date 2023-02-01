<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $table = 'teachers';

    protected $fillable = [
     'name',
     'email',
     'phone',
     'qualification',
     'slug'
    ];

    public function subjects(){
        return $this->hasMany(Subject::class, 'teacher_id', 'id');
    }
}
