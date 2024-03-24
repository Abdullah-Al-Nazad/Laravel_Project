@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')


<div class="col-md-10 grid-margin stretch-card" >
    <div class="card">
      <div class="card-body">
        <h1 class="card-title">Welcome List</h1>
        <a class="btn btn-success" href='{{route('welcome.create')}}' >Add Welcome</a>
        </p>
        <div class="table-responsive">
          <table style="width: 100%" class=" table-bordered">
            <thead >
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Button</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody >
                @foreach($welcome as $k => $welcome)
                <tr>
                    <td>{{++$k}}</td>
                    <td>{{$welcome->name}}</td>
                    <td>{{$welcome->title}}</td>
                    <td>{{$welcome->details}}</td>
                    <td>{{$welcome->button}}</td>
                    <td> <img height='80px' width='100px' src="{{asset('admin/image/welcome/' . $welcome->photo)}}" alt="aa"> </td>
                    <td>
                      
                        <a class="btn btn-success" href="{{route('welcome.show', $welcome->id)}}">Details</a>
                        <a class="btn btn-primary" href="{{route('welcome.edit', $welcome->id)}}">Update</a>
                            <form action="{{route('welcome.destroy', $welcome->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm ('are you sure to delete ?')">Delete</button>
                            </form>
                           
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection