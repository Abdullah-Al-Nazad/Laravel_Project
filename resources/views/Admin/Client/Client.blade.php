@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Client List</h1>
                <a class="btn btn-success" href=''>Add Client</a>
                </p>
                <div class="">
                    <table style="width: 100%" class="table table-light table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (!empty($client) && $client->count())
                                @foreach ($client as $k => $c)
                                    <tr>
                                        <td>{{ ++$k }}</td>
                                        <td>{{ $c->name }}</td>
                                        <td>{{ $c->email }}</td>
                                        <td><a class="btn btn-primary" href="">Update</a><a class="btn btn-danger" href="">Delete</a></td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">There are no data.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <br>
                    <div style="width:100%;margin-left:70%">{!! $client->links() !!}</div>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
