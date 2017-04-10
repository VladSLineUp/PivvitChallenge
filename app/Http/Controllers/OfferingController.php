<?php

namespace App\Http\Controllers;

use App\Models\Offering;

class OfferingController extends Controller
{
    /**
     * Get all offerings with purchases (eager loaded)
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return Offering::with('purchase')->get();
    }
}
