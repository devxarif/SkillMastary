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

    protected $appends = ['avg_rating'];

    public function getAvgRatingAttribute()
    {
        if ($this->total_reviews > 0 && $this->total_stars > 0) {
            $rating = $this->total_reviews > 0 ? round($this->total_stars / $this->total_reviews, 2) : 0;

            return number_format($rating, 2);
        }

        return 0;
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->whereNotNull('featured_at');
    }

    public function scopePopular($query)
    {
        return $query->where('is_popular', true)->whereNotNull('popular_at');
    }
}
