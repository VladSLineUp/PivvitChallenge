<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function offering()
    {
        return $this->hasOne(Offering::class);
    }
}
