<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    protected $visible = [
        'id',
        'title',
        'price'
    ];

    /**
     * Purchase relationship
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function purchase()
    {
        return $this->hasOne(Purchase::class);
    }
}
