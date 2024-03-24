<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\ConfirmationMail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $booking = Booking::all();
        return view('Admin/booking/BookingList', compact('booking'));
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
        
        if ($request->has('name')) {
            Booking::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'date' => $request->date,
                'people' => $request->people,
                'time' => $request->time
            ]);
            $data=$request->input('name');
            Mail::to($request->input('email'))->send(new WelcomeMail($data,'Dear'.$data.'  Welcome To Pato-Palace'));
            
            return redirect()->back()->with('success', 'successfully register your booking');
        } elseif ($request->has('id2')) {
            $id2 = $request->id2;
            $b = Booking::find($id2);
            $b->update(['status' => 'Pending']);

            $status='Cancelled. Please call our customarcare (01580331370) for more information.';
            $name=$b->name;
            $data=[$name,$status];
            $title='Pato Palace ';
            Mail::to($b->email)->send(new ConfirmationMail($data,$title));
            return redirect('bookingconfirm');
        } elseif ($request->has('id1')) {
            $id1 = $request->id1;
            $b = Booking::find($id1);
            $b->update(['status' => 'Confirmed']);

            $status='Confirmed';
            $name=$b->name;
            $data=[$name,$status];
            $title='Pato Palace ';
            Mail::to($b->email)->send(new ConfirmationMail($data,$title));
            return redirect('bookingconfirm');
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id = Booking::find($id);
        dd($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Booking::find($id)->delete();
        return redirect('bookingconfirm');
    }
}
