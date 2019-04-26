<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbstractPrize extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'count'];
}
