@extends('dashboard')
@section('title')
    Pato-Master
@endsection

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <h1 style="text-align: center">Product Sell</h1>
    <div>
        <a style="width: 114px;height:40px;padding-top:12px" class="btn btn-primary" href="{{ url('/sell') }}">Back</a>
    </div>

    <form action="{{ route('sell.store') }}" method="post">
        @csrf
        <div class="row" style="margin-top:10px">
            <div class="col-md-6">
                <label for="">Invoice Id : </label>
                <input type="text" name="invoice" value="<?php echo uniqid(); ?>" readonly>
            </div>
            <div class="col-md-6">
                <label for="">Date : </label>
                <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>">
            </div>
        </div>
        <table class="table">
            <tr style="color: white">

                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>
                <th></th>
            </tr>
            <tbody id="body">
                <tr style="color: white">


                    <td><input type="text"  name="name[]" placeholder="name"></td>
                    <td><input type="number" class="quantity"  name="quantity[]" placeholder="quantity"></td>
                    <td><input type="number" class="price" name="price[]"  placeholder="price"></td>
                    <td><input type="text" class="tprice"  name="tprice[]" readonly></td>

                </tr>
            </tbody>


            <tr>
                <td style="text-align:right" colspan="6">
                    <a id="addmore" class="btn btn-warning">Add More</a>
                </td>
            </tr>
            <tr>
                <td style="text-align:left" colspan="6">
                    <input class="btn btn-primary" type="submit" value="Submit">
                </td>
            </tr>

        </table>
    </form>
    <script>
        let sl = 2;
        let newRow = `
            <tr style="color: white">
            <td><input type="text"  name="name[]" placeholder="name"></td>
            <td><input type="number" class="quantity"  name="quantity[]" placeholder="quantity"></td>
            <td><input type="number" class="price" name="price[]"   placeholder="price"></td>
            <td><input type="text" class="tprice"  name="tprice[]" readonly></td>
            <td>
               
                <a class="btn btn-danger cancel">Remove</a>
            </td>

            </tr>`

        $(document).ready(function() {
            $('#addmore').click(function() {
                $('#body').append(newRow);
                sl++;
            })

            $('#body').on('click', '.cancel', function() {
                $(this).closest('tr').remove();

            });
            $(function() {
                // $('#quantity1, #price1').keyup(function(){
                //    var value1 = parseFloat($('#quantity1').val()) || 0;
                //    var value2 = parseFloat($('#price1').val()) || 0;
                //    $('#tprice1').val(value1 * value2);
                // });

                // Target all quantity and price inputs with classes
                $('#body').on('keyup', '.quantity, .price', function() {
                    var currentRow = $(this).closest('tr'); // Get the current row
                    var quantityValue = parseFloat(currentRow.find('.quantity').val()) || 0;
                    var priceValue = parseFloat(currentRow.find('.price').val()) || 0;
                    currentRow.find('.tprice').val(quantityValue *
                    priceValue); // Update total price for current row
                });
            });
        });
    </script>
@endsection
