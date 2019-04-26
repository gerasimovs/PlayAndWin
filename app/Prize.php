<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    public $prize;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['model_type', 'model_id'];

    public function prizeable()
    {
        return $this->morphTo();
    }

    public function getDescriptionAttribute()
    {
        if (!$this->prize) {
            $model = $this->model_type;
            $this->prize = $model::find($this->model_id);
        }

        return $this->prize;
    }
}
