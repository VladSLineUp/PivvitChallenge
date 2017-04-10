<?php

namespace App\Http\Controllers;

use App\Models\Offering;

class OfferingController extends Controller
{
    public function all()
    {
        return Offering::with('purchase')->get();
    }
}
