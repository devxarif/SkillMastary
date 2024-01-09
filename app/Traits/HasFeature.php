<?php

namespace App\Traits;

trait HasFeature {
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true)->whereNotNull('featured_at');
    }
}
