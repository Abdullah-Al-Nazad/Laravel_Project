<?php

namespace App\Http\Controllers;

use App\Models\Sell;
use Illuminate\Http\Request;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sell=Sell::all();
        return view('Admin/Sell/Sell', compact('sell'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin/Sell/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all(); // Get all form data

  // Validate the data (optional, highly recommended)
  $this->validate($request, [
    'date' => 'required|date',  // Ensure valid date format
    'invoice' => 'required|string|unique:buys,invoice', // Ensure unique invoice
    'name.*' => 'required|string',  // Validate each name in the array
    'quantity.*' => 'required|numeric',  // Validate each quantity as a number
    'price.*' => 'required|numeric', // Validate each price as a number
    // ... other validations if needed
  ]);

  // Create buy entries (assuming you have a 'Buy' model)
  $createdBuys = [];
  foreach ($data['name'] as $key => $name) {
    $quantity=$data['quantity'][$key];
    $createdBuy = Sell::create([
      'date' => $data['date'],
      'invoice' => $data['invoice'],
      'name' => $name,
      'quantity' => $data['quantity'][$key],
      'price' => $data['price'][$key],
      'total' => $data['tprice'][$key], // Assuming tprice is calculated elsewhere
    ]);
    $createdBuys[] = $createdBuy; // Store created Buy instances for further use (optional)
  }

  return redirect('sell')->with('success', 'Sell entries created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sell $sell)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sell $sell)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sell $sell)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sell $sell)
    {
        //
    }
}
