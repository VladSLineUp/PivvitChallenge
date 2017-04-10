<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseRequest;
use App\Models\Offering;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function all()
    {
        return Purchase::all();
    }

    public function create()
    {
        $offerings = Offering::all();
        return view('purchase.create', compact('offerings'));
    }

    public function store(CreatePurchaseRequest $request)
    {
        $offeringId = $request->input('offeringID');
        $offering = Offering::find($offeringId);
        Purchase::create([

        ]);
    }
}
