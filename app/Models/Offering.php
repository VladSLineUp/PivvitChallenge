<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    protected $visible = [
        '*'
    ];

    public function purchase()
    {
        return $this->hasOne(Purchase::class);
    }
}
