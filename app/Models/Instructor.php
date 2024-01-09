<?php

namespace App\Models;

use App\Traits\HasUser;
use App\Traits\HasFeature;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instructor extends Model
{
    use HasFactory, SoftDeletes, HasFeature, HasUser;

    protected $guarded = [];
}
