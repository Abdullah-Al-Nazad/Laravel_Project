{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')
<div style="margin-left: 70%">Click Here to Print <button class="btn-primary" onclick="window.print()">Print</button></div>
<div><h1 style="text-align: center">Buy Product in  "{{$date}}" this date</h1></div>

<table class="table table-bordered">
    <tr>
        <th>SL</th>
        <th>Date</th>
        <th>Product Name</th>
        <th>Unit</th>
        <th>Price</th>
        <th>Total price</th>
    </tr>
    {{-- @if(count($buy)>count($sell)) --}}
@foreach($buy as $k=>$b)
    <tr>
        <td>{{++$loop->index}}</td>
        <td>{{$b->date}}</td>
        <td>{{$b->name}}</td>
        <td>{{$b->units}}</td>
        <td>{{$b->price}}</td>
        <td>{{$b->total}}</td>
    </tr>
    @endforeach   
    {{-- @else

    @foreach($sell as $k=>$s)
    <tr>
        <td>{{$k}}</td>
        <td>{{$s}}</td>
    </tr>
    @endforeach 
    @endif --}}
</table>
<br><br>
<div><h1 style="text-align: center">Sell Product in  "{{$date}}" this date</h1></div>
<table class="table table-bordered">
    <tr>
        <th>SL</th>
        <th>Date</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Total price</th>
    </tr>
    {{-- @if(count($buy)>count($sell)) --}}
@foreach($sell as $k=>$s)
    <tr>
        <td>{{++$loop->index}}</td>
        <td>{{$s->date}}</td>
        <td>{{$s->name}}</td>
        <td>{{$s->quantity}}</td>
        <td>{{$s->price}}</td>
        <td>{{$s->total}}</td>
    </tr>
    @endforeach   
    {{-- @else

    @foreach($sell as $k=>$s)
    <tr>
        <td>{{$k}}</td>
        <td>{{$s}}</td>
    </tr>
    @endforeach 
    @endif --}}
</table>
@endsection
