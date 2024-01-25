<?php

namespace App\Models;

use App\Traits\HasUser;
use App\Models\Category;
use App\Traits\Sluggable;
use App\Traits\HasFeature;
use App\Models\CourseLevel;
use App\Models\Subcategory;
use App\Models\CourseWishlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, SoftDeletes, HasFeature, HasUser, Sluggable;

    protected $guarded = [];

    protected $casts = [
        'wishlisted' => 'boolean',
        'featured_at' => 'datetime',
        'published_at' => 'datetime',
    ];

    protected $appends = [
        'thumbnail_url',
        'avg_rating',
        'details_url',
        'formatted_price',
        'formatted_reviews'
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published')->whereNotNull('published_at');
    }

    public function scopePopular($query)
    {
        return $query->where('is_popular', true);
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? asset($this->thumbnail) : asset('frontend/images/default.webp');
    }

    public function getAvgRatingAttribute()
    {
        if ($this->total_reviews > 0 && $this->total_stars > 0) {
            $rating = $this->total_reviews > 0 ? round($this->total_stars / $this->total_reviews, 2) : 0;

            return number_format($rating, 2);
        }

        return 0;
    }

    public function getDetailsUrlAttribute()
    {
        return route('website.course.details', $this->slug);
    }

    public function getFormattedPriceAttribute()
    {
        return formatNumber($this->price);
    }

    public function getFormattedReviewsAttribute()
    {
        return formatNumber($this->total_reviews);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function courseLevel()
    {
        return $this->belongsTo(CourseLevel::class);
    }

    public function courseLearnings()
    {
        return $this->hasMany(CourseLearning::class);
    }

    public function wishlists()
    {
        return $this->hasMany(CourseWishlist::class);
    }
}
