<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use App\Models\CourseLevel;
use App\Models\Subcategory;
use App\Models\CourseWishlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'wishlisted' => 'boolean',
        'featured_at' => 'datetime',
        'published_at' => 'datetime',
    ];

    protected $appends = ['thumbnail_url', 'avg_rating'];

    public function scopePublished($query)
    {
        return $query->where('status', 'published')->whereNotNull('published_at');
    }

    public function scopePopular($query)
    {
        return $query->where('is_popular', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->whereNotNull('featured_at');
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = \Str::slug($value);
    }

    public function getThumbnailUrlAttribute()
    {
        return $this->thumbnail ? asset($this->thumbnail) : asset('frontend/images/default.webp');
    }

    public function getAvgRatingAttribute()
    {
        if ($this->total_reviews > 0 && $this->total_stars > 0) {
            return $this->total_reviews > 0 ? round($this->total_stars / $this->total_reviews, 1) : 0;
        }

        return 0;
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function wishlists()
    {
        return $this->hasMany(CourseWishlist::class);
    }


}
