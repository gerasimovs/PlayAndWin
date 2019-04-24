<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    public function prizeable()
    {
        return $this->morphTo();
    }
}
