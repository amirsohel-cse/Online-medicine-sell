@extends('layout')
@section('content')

        <h3 class=" " style=""><b>My Orders </b></h3>
<hr>


        <table class="table  table-bordered bootstrap-datatable datatable" style="background-color: white">
            <thead>
            <tr>
                <th>Order ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th>Status</th>
{{--                <th>Actions</th>--}}
            </tr>
            </thead>
            <tbody>
            @foreach($order_details as $v_order)
                <tr>
                    <td>{{$v_order->order_id}}</td>
                    <td class="center">{{$v_order->product_name}}</td>
                    <td class="center">{{$v_order->product_price}}</td>
                    <td class="center">{{$v_order->product_sales_quantity}}</td>
                    <td class="center">{{$v_order->order_status}}</td>

                </tr>


            @endforeach
            </tbody>
        </table>




@endsection
