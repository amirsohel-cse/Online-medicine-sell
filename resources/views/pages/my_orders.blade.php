@extends('layout')
@section('content')
    <div class="box">
        <h3 class=" text-center"><b><em> My Orders</em> </b></h3>
<p>  __________________________________________________________________________________________________________________________________________________</p>
 <br>
        <br>
    </div>

    <div class="col-sm-2"></div>
    <div class="border example4 col-lg-8"style="border-style: solid;margin-bottom: 50px;background-color: lightgoldenrodyellow ">
        <?php
          foreach ($order_details as $v_order){?>
        <div class="row border-bottom center"  >
            <div class="col-sm-12">
                <div class="col-sm-4"></div>
                <div class="col-sm-12">
                <h4><br>Your Order ID : <span style="color: green"> {{$v_order->order_id}}</span> ({{$v_order->product_sales_quantity}} items) </h4>
                </div>
                <div class="col-sm-12">
                    <span class="btn btn-default btn-primary text-justify example1 " >{{$v_order->order_status}} . .</span>
                    <br>
                    <br>
                </div>

                <div class="box-content">
                <img src="{{$v_order->product_image}}" style="height: 150px ; width: 150px">
                </div>
                <div>
                    <br>
                    <h4><span>{{$v_order->product_name}}</span></h4>

                </div>
                <div>
                    <h4><b>Tk. <span style="color: green"> {{$v_order->product_price}}</span></b></h4>
                </div>
            </div>
        </div>
            <div class=" border "></div>
 <?php } ?>

    </div>


@endsection
