<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use App\Traits\HasUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseWishlist extends Model
{
    use HasFactory, HasUser;

    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
