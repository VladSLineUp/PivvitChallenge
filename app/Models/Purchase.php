<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'customer_name',
        'offering_id',
        'quantity'
    ];

    protected $visible = [
        '*'
    ];

    public function offering()
    {
        return $this->belongsTo(Offering::class);
    }
}
