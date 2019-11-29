@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container col-sm-12" >
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                <!--            --><?php
                $contents = \Cart::getContent();
                //               echo "<pre>";
                //               print_r($contents);
                //            echo "</pre>";


                ?>
                <table class="table table-condensed">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Image</td>
                        <td class="description">Name</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td>Action</td>
                        <td></td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach($contents as $v_contents) { ?>
                    <tr>
                        <td class="cart_product">
                            <a href=""><img src="{{URL::to($v_contents->attributes->image)}}" height="80px" width="80px" alt=""></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="">{{$v_contents->name}}</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td class="cart_price">
                            <p>{{$v_contents->price}}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <form action="{{url('/update_cart/'.$v_contents->id)}}" method="post">
                                    {{ csrf_field() }}
                                    <input class="cart_quantity_input" type="text" name="quantity" value="{{$v_contents->quantity}}" autocomplete="off" size="2">
                                    {{--                            <input  type="hidden" name="id" value="{{$v_contents->id}}">--}}
                                    <input type="submit" name="submit" value="update" class="btn btn-sm btn-default">
                                </form>
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{$v_contents->total}}</p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{URL::to('/delete_to_cart/'.$v_contents->id)}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->
<div class="container col-sm-8">
    <div class="row">
        <div class="paymentCont">
            <div class="headingWrap">
                <h3 class="headingTop text-center">Select Your Payment Method</h3>
                <p class="text-center">It's safe and easy </p>
            </div>
            <form action="{{url('/place_order')}}" method="post">
                {{csrf_field()}}
            <div class="paymentWrap">
                <div class="btn-group form-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                    <label class="btn paymentMethod active">
                        <div class="method visa"></div>
                        <input type="radio" name="payment_method" value="handcash" checked>
                    </label>
                    <label class="btn paymentMethod">
                        <div class="method master-card"></div>
                        <input type="radio" name="payment_method" value="bkash">
                    </label>
                </div>
            </div>
                <button type="submit" class="btn btn-default btn-success btn-block ">Done</button>
                <p>
                    <br><br><br>
                    <br>
                </p>
            </form>

            <div class="footerNavWrap clearfix">
                <div class="btn btn-success pull-left btn-fyi"><span class="glyphicon glyphicon-chevron-left"></span> CONTINUE SHOPPING</div>
                <div class="btn btn-success pull-right btn-fyi">CHECKOUT<span class="glyphicon glyphicon-chevron-right"></span></div>
            </div>

        </div>

    </div>
</div>
@endsection
