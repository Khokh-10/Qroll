<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','doctor_id'
    ];

    public function teachers() {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id')->wherePivot('role','teacher');

    }
    public function doctor() {
        return $this->belongsTo(User::class, 'doctor_id')->where('role','doctor');
    }
    public function students() {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id')->wherePivot('role','student');
    }
    
        
}
