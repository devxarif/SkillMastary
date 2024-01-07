<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseWishlist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
