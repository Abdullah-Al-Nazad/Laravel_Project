@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')
    <div class="col-lg-10 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Booking List</h1>
                <a class="btn btn-success" href='{{ route('bookingconfirm.create') }}'>Add Booking</a>
                </p>
                <div class="">
                    <table style="width: 100%" class="table table-light table-bordered">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>People</th>
                                <th>Time</th>
                                <th>Date</th>
                                <th>Confirmation</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking as $k => $book)
                                <tr>
                                    <td>{{ ++$k }}</td>
                                    <td>{{ $book->name }}</td>
                                    <td>{{ $book->email }}</td>
                                    <td>{{ $book->phone }}</td>
                                    <td>{{ round($book->people) }}</td>
                                    <td>{{ $book->time }}</td>
                                    <td>{{ $book->date }}</td>
                                    <td>
                                        @if ($book->status == 'Confirmed')
                                            <form action="{{ route('bookingconfirm.store') }}" method="POST">
                                                @csrf
                                                <input hidden type="text" value="{{ $book->id }}" name="id2">
                                                <button class="btn btn-success"
                                                    onclick="return confirm ('are you sure to cancel booking ?')">Confirmed</button>
                                            </form>
                                        @else
                                            <form action="{{ route('bookingconfirm.store') }}" method="POST">
                                                @csrf
                                                <input hidden type="text" value="{{ $book->id }}" name="id1">
                                                <button class="btn btn-warning"
                                                    onclick="return confirm ('are you sure to confirm ?')">Pending</button>
                                            </form>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="row">
                                            <form action="{{ route('bookingconfirm.destroy', $book->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger"
                                                    onclick="return confirm ('are you sure to delete ?')">Delete</button>
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
