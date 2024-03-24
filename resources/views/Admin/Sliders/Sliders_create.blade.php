@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                    <h1 class="card-title">Add Slider</h1>
                    @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
                <form class="forms-sample" action="{{route('sliders.store')}}" method="POST" 
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <label for="exampleInputName1">Title</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Title" name="title" >
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail3">Details</label>
                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Details" name="details" >
                    </div>
                    <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="photo" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="file" name="photo" class="form-control file-upload-info" placeholder="Upload Image">
                        <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" type="submit">Upload</button>
                        </span>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection