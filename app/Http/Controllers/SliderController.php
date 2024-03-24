<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { $slider=Slider::all();
        return view('Admin/Sliders/Sliders_List', compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin/Sliders/Sliders_create');
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
        Slider::create([
            'photo'=>$name,
            'title'=>$request->title,
            'details'=>$request->details,
        ]);
        
        $imageName->move('./admin/image/sliders/', $name);
        return redirect('sliders');
    
        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$imageName);
        
        // dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        
        return view('Admin/Sliders/Sliders_show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {   
        $id=Slider::find($id);
        return view('Admin/Sliders/Sliders_edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        // dd($slider);
        if($request->file('photo') !==null){
        $imageName =$request->file('photo');  
        $name=$imageName->getClientOriginalName();
        $slider->update([
            'photo'=>$name,
            'title'=>$request->title,
            'details'=>$request->details,
        ]);
        
        $imageName->move('./admin/image/sliders/', $name);
    }else{
        $slider->update([
            'title'=>$request->title,
            'details'=>$request->details,
        ]);
    }
        return redirect('sliders');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect('sliders');
    }
}
