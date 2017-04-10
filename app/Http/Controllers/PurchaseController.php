<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseRequest;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Get all purchases
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function all()
    {
        return Purchase::query()->with('offering')->get();
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
     */
    public function store(Request $request)
    {
        return Purchase::create([
            'customer_name' => $request->input('customer_name'),
            'offering_id' => $request->input('offering_id'),
            'quantity' => $request->input('quantity'),
        ]);
    }
}
