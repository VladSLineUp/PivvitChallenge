<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseRequest;
use App\Models\Purchase;

class PurchaseController extends Controller
{
    /**
     * Get all purchases
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return Purchase::all();
    }

    /**
     * Render view for Purchase creation
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('purchase.create');
    }

    /**
     * Save purchase in DB or return false if fails
     *
     * @param CreatePurchaseRequest $request
     * @return bool
     */
    public function store(CreatePurchaseRequest $request)
    {
        return Purchase::create([
            'customer_name' => $request->input('customerName'),
            'offering_id' => $request->input('offeringID'),
            'quantity' => $request->input('quantity'),
        ]);
    }
}
