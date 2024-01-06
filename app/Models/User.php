<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Enums\UserRoleEnum;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be appended.
     *
     * @var array<int, string>
     */
    protected $appends = ['avatar_url'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * The attributes that should be appended.
     *
     * @param string $value
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['username'] = \Str::slug($value);
    }

    public function scopeStudent($query){
        return $query->where('role', UserRoleEnum::ROLE_STUDENT?->value);
    }

    public function scopeInstructor($query){
        return $query->where('role', UserRoleEnum::ROLE_INSTRUCTOR?->value);
    }

    public function scopeAffiliator($query){
        return $query->where('role', UserRoleEnum::ROLE_AFFILIATOR?->value);
    }

    public function scopeAdmin($query){
        return $query->where('role', UserRoleEnum::ROLE_ADMIN?->value);
    }

    public function getAvatarUrlAttribute()
    {
        return $this->avatar ? asset($this->avatar) : asset('frontend/images/default-user.webp');
    }
}
