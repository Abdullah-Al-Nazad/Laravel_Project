{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')
<table class="table table-bordered">
    <tr>
        <th>SL</th>
        <th>Date</th>
        <th>Buy</th>
        <th>Sell</th>
        <th>Action</th>
    </tr>

    <?php
                    //base-------time-----------date---------like --------------calender----
                        // $date_raw=date("Y-m-d");
                        // $first_date = strtotime($date_raw);
                        // $second_date = strtotime('-1 day', $first_date);
                        
                        // print 'First Date ' . date('Y-m-d', $first_date);
                        // print 'Next Date ' . date('Y-m-d', $second_date);


                    $ostock = 0;
                    $sreturn = 0;
                    $mwastage = 0;

                    $today=date("Y-m-d");
                        $convert = strtotime($today);

                        $tomorrow=strtotime('-30 day', $convert);
                        for($i=0;$i<30;$i++) {
                            $tomorrow= strtotime('+1 day', $tomorrow);
                            $date_count=date('Y-m-d', $tomorrow);
                        ?>
    <tr>
        <td>{{$i}}</td>
        <td>
            <?php echo $date_count; ?>
        </td>
        <td><?php $totalBuy=$buy->where('date', $date_count)->sum('price'); ?> {{$totalBuy}}</td>
        <td><?php $totalSell=$sell->where('date', $date_count)->sum('price'); ?> {{$totalSell}}</td>
        <td>
            {{-- <form action="{{route('report.store')}}" method="post">
                @csrf
                <input type="text" name="date" value="{{$date_count}}" hidden>
              <button type="submit" class="btn btn-success" >View</button>
              
            </form> --}}
            <a class="btn btn-success" href="{{route('report.edit',$date_count)}}">View</a>
                  
          </td>
    </tr>
    <?php } ?>
</table>
@endsection
