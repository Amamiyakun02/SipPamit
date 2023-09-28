<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'address',
        'contact_phone',
        'descript',
        'password',
        'profile_photo',
        'role'
    ];

    protected $guards = [
        'id',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    // protected $appends = [
    //     'profile_photo_path',    
    // ];

    public function isAdmin()
    {
        return $this->role = 'admin';
    }

    public function isPeternak()
    {
        return $this->role = 'peternak';
    }

    public function product(): HasMany
    {
        return $this->hasMany(products::class, 'user_id', 'id');
    }

    public function farm(): HasMany
    {
        return $this->hasMany(farm::class, 'user_id', 'id');
    }
}
