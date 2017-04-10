<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseRequest;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    public function all()
    {
        return Purchase::all();
    }

    public function create()
    {
        return view('purchase.create');
    }

    public function store(CreatePurchaseRequest $request)
    {
        return (bool)Purchase::create([
            'customer_name' => $request->input('customerName'),
            'offering_id' => $request->input('offeringID'),
            'quantity' => $request->input('quantity'),
        ]);
    }
}
