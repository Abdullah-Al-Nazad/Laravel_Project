{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')
<h1 style="text-align: center">Product Buy Table</h1>
<a style="width: 114px;height:40px;padding-top:12px" class="btn btn-primary" href="{{route('buy.create')}}">Buy Product</a>
<table class="table table-bordered">
    <tr style="color: white">
        <th>SL</th>
        <th>Date</th>
        <th>Invoice Id</th>
        <th>Product Name</th>
        <th>Units</th>
        <th>Price</th>
        <th>Total Price</th>
        <th>Action</th>
    </tr>
    @foreach ($buy as $key=>$item)
        
    
    <tr style="color: white">
        <td>{{++$key}}</td>
        <td>{{$item->date}}</td>
        <td>{{$item->invoice}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->units}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->total}}</td>
        <td><a class="btn btn-primary" href="">Update</a> <a class="btn btn-warning" href="">View</a><a class="btn btn-danger" href="">Delete</a></td>
    </tr>
    @endforeach

    
</table>
@endsection
