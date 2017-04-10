<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    public function purchase()
    {
        return $this->hasOne(Purchase::class);
    }
}
