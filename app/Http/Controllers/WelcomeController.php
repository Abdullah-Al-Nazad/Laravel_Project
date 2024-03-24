<?php

namespace App\Http\Controllers;

use App\Models\welcome;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $welcome=Welcome::all();
            return view('Admin/welcome/welcome_List', compact('welcome'));
        
        // echo Welcome::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin/welcome/welcome_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName =$request->file('photo');  
        $name=$imageName->getClientOriginalName();
        welcome::create([
            'photo'=>$name,
            'name'=>$request->name,
            'title'=>$request->title,
            'details'=>$request->details,
            'button'=>$request->button,
        ]);
        
        $imageName->move('./admin/image/welcome/', $name);
        return redirect('welcome');
    }

    /**
     * Display the specified resource.
     */
    public function show(welcome $welcome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $id=welcome::find($id);
        return view('Admin/welcome/welcome_edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, welcome $welcome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(welcome $welcome)
    {
        $welcome->delete();
        return redirect('welcome');
    }
}
