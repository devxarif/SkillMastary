<?php

namespace App\Traits;

trait Sluggable {
    /**
     * Set the title attribute and slug.
     *
     * @param  string  $msg
     * @return \Illuminate\Http\Response
    */
    function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = \Str::slug($value);
    }

    /**
     * Set the name attribute and slug.
     *
     * @param  string  $msg
     * @return \Illuminate\Http\Response
    */
    function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = \Str::slug($value);
    }


}
