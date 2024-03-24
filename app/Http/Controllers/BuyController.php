<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buy=Buy::all();
        return view('Admin/Buy/Buy', compact('buy'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin/Buy/Create');
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
    'unit.*' => 'required|numeric',  // Validate each unit as a number
    'price.*' => 'required|numeric', // Validate each price as a number
    // ... other validations if needed
  ]);

  // Create buy entries (assuming you have a 'Buy' model)
  $createdBuys = [];
  foreach ($data['name'] as $key => $name) {
    $unit=$data['unit'][$key];
    $createdBuy = Buy::create([
      'date' => $data['date'],
      'invoice' => $data['invoice'],
      'name' => $name,
      'units' => $data['unit'][$key],
      'price' => $data['price'][$key],
      'total' => $data['tprice'][$key], // Assuming tprice is calculated elsewhere
    ]);
    $createdBuys[] = $createdBuy; // Store created Buy instances for further use (optional)
  }

  return redirect('buy')->with('success', 'Buy entries created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buy $buy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buy $buy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buy $buy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buy $buy)
    {
        //
    }
}
