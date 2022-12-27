<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSubscription extends Model
{
    use HasFactory;
    protected $fillable = ['course_id', 'student_id', 'discount', 'total_price'];

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }

    public function student(){
        return $this->belongsTo(User::class,'student_id');
    }

}
