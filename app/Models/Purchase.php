<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function offering()
    {
        return $this->belongsTo(Offering::class);
    }
}
