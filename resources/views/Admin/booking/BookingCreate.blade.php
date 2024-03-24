@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Add Slider</h1>
                @if ($errors->any())
                    {{ implode('', $errors->all('<div>:message</div>')) }}
                @endif
                <form class="forms-sample" action="{{ route('book.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input style="color: white" type="text" class="form-control" id="exampleInputName1"
                            placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Phone</label>
                        <input style="color: white" type="text" class="form-control" id="exampleInputEmail3"
                            placeholder="Phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Email</label>
                        <input style="color: white" type="email" class="form-control" id="exampleInputEmail3"
                            placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Date</label>
                        <input style="color: white" type="date" class="form-control" id="exampleInputEmail3"
                            placeholder="Email" name="date">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail3">Time</label>
                        <div >
                            <!-- Select2 -->
                            <select style="width: 100%; height:30px;color:white; background:rgb(38, 47, 59)" class="selection-1" name="time">
                                <option>09:00:00</option>
                                <option>09:30:00</option>
                                <option>10:00:00</option>
                                <option>10:30:00</option>
                                <option>11:00:00</option>
                                <option>11:30:00</option>
                                <option>12:00:00</option>
                                <option>12:30:00</option>
                                <option>13:00:00</option>
                                <option>13:30:00</option>
                                <option>14:00:00</option>
                                <option>14:30:00</option>
                                <option>15:00:00</option>
                                <option>15:30:00</option>
                                <option>16:00:00</option>
                                <option>16:30:00</option>
                                <option>17:00:00</option>
                                <option>17:30:00</option>
                                <option>18:00:00</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Person</label>
                        <select style="width: 100%; height:30px;color:white; background:rgb(38, 47, 59)" class="selection-1" name="people">
                            <option value="01">1 person</option>
                            <option value="02">2 person</option>
                            <option value="03">3 person</option>
                            <option value="04">4 person</option>
                            <option value="05">5 person</option>
                            <option value="06">6 person</option>
                            <option value="07">7 person</option>
                            <option value="08">8 person</option>
                            <option value="09">9 person</option>
                            <option value="10">10 person</option>
                            <option value="11">11 person</option>
                            <option value="12">12 person</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a class="btn btn-dark" href="/bookingconfirm">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
