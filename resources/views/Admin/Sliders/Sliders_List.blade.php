@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')


<div class="col-lg-10 grid-margin stretch-card" >
    <div class="card">
      <div class="card-body">
        <h1 class="card-title">Sliders List</h1>
        <a class="btn btn-success" href='{{route('sliders.create')}}' >Add Slider</a>
        </p>
        <div class="table-responsive">
          <table style="width: 100%" class="table table-light table-bordered">
            <thead >
                <tr>
                    <th>SL</th>
                    <th>Title</th>
                    <th>Details</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody >
                @foreach($slider as $k=>$slide)
                <tr>
                    <td>{{++$k}}</td>
                    <td>{{$slide->title}}</td>
                    <td>{{$slide->details}}</td>
                    <td> <img src="{{asset('admin/image/sliders/'.$slide->photo)}}" alt=""> </td>
                    <!-- <td><img src="{{asset('pato-master/images/icons/logo2.png')}}"></td> -->
                    <td>
                      <div class="row">
                        <a class="btn btn-success" href="{{route('sliders.show',$slide->id)}}">Details</a>
                        <a class="btn btn-primary" href="{{route('sliders.edit',$slide->id)}}">Update</a>
                            <form action="{{route('sliders.destroy',$slide->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" onclick="return confirm ('are you sure to delete ?')">Delete</button>
                            </form>
                            </div>
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