@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')


<div class="col-lg-10 grid-margin stretch-card" >
    <div class="card">
    
      <div class="card-body" style="text-align:center">
        <div style="background:white; height:300px;width:50%;color:black">
        <h1 style="color:black" class="card-title">Sliders Details</h1>
        <h3>Title : {{$slider->title}}</h3>
        <h3> Details : {{$slider->details}}</h3>
        <h3>Photo : <img height="150px"  src="{{asset('admin/image/sliders/' . $slider->photo)}}" alt=""> </h3>
        <a style="margin-top:50px" class="btn btn-success" href='{{route('sliders.index')}}' >Back</a>
        </div>
        
      </div>
    </div>
  </div>
@endsection