<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function setCodeAttribute($code)
    {
        $this->attributes['code'] = \Str::upper(str_replace(' ', '', $code));
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
