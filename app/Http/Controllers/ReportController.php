<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Models\Sell;
use App\Models\Report;
use Illuminate\Http\Request;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buy=Buy::all();
        $sell=Sell::all();
        return view('Admin/Report/Report', compact('buy','sell'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin/booking/BookingCreate');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        
        // $date=$request->date;
        
        // $buy=Buy::all()->where('date', $date);
        // dd($buy);
        // $sell=Sell::all()->where('date', $date);
        // return view('Admin/Report/details', compact('buy','sell'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $date=$id;
        
        $buy=Buy::all()->where('date', $date);
        $sell=Sell::all()->where('date', $date);
        return view('Admin/Report/details', compact('buy','sell','date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
