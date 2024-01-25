<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Traits\Sluggable;

class CourseLearning extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];
}
