<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get prizes for user
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prizes()
    {
        return $this->hasMany(Prize::class)->with('prizeable');
    }

    // public function bonuses()
    // {
    //     return $this->morphedByMany(PrizeBonus::class, 'model', 'prizes', 'id', 'model_id', 'model');
    // }

    // public function money()
    // {
    //     return $this->morphedByMany(PrizeMoney::class, 'model', 'prizes', 'id', 'model_id', 'model');
    // }

    // public function thing()
    // {
    //     return $this->morphedByMany(PrizeThing::class, 'model', 'prizes', 'id', 'model_id', 'model');
    // }
}
