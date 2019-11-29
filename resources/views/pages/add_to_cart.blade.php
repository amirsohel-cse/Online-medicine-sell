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

                <tr>
                    <?php
                    foreach($contents as $v_contents) { ?>
                    <td class="cart_product">
                        <a href=""><img src="{{URL::to($v_contents->attributes->image)}}" height="100px" width="100px" alt="image"></a>
                    </td>
                    <td class="cart_description" style="">
                        <br>
                        <h4><a href="">{{$v_contents->name}}</a></h4>
                        <p>Web ID: 1089772</p>
                    </td>
                    <td class="cart_price">
                        <br>
                        <br>
                        <p>{{$v_contents->price}}</p>
                    </td>
                    <td class="cart_quantity">
                        <br>
                        <br>
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
                        <br>
                        <br>
                        <p class="cart_total_price">{{$v_contents->price * $v_contents->quantity}}</p>
                    </td>
                    <td class="cart_delete">
                        <br>
                        <br>
                        <a class="cart_quantity_delete" href="{{URL::to('/delete_to_cart/'.$v_contents->id)}}"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
               <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</section> <!--/#cart_items-->

<section id="do_action">
    <div class="container">
        <div class="heading">
            <h3>What would you like to do next?</h3>
        </div>
        <div class="row">
{{--            <div class="col-sm-6">--}}
{{--                <div class="chose_area">--}}
{{--                    <ul class="user_option">--}}
{{--                        <li>--}}
{{--                            <input type="checkbox">--}}
{{--                            <label>Use Coupon Code</label>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox">--}}
{{--                            <label>Use Gift Voucher</label>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <input type="checkbox">--}}
{{--                            <label>Estimate Shipping & Taxes</label>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <ul class="user_info">--}}
{{--                        <li class="single_field">--}}
{{--                            <label>Country:</label>--}}
{{--                            <select>--}}
{{--                                <option>United States</option>--}}
{{--                                <option>Bangladesh</option>--}}
{{--                                <option>UK</option>--}}
{{--                                <option>India</option>--}}
{{--                                <option>Pakistan</option>--}}
{{--                                <option>Ucrane</option>--}}
{{--                                <option>Canada</option>--}}
{{--                                <option>Dubai</option>--}}
{{--                            </select>--}}

{{--                        </li>--}}
{{--                        <li class="single_field">--}}
{{--                            <label>Region / State:</label>--}}
{{--                            <select>--}}
{{--                                <option>Select</option>--}}
{{--                                <option>Dhaka</option>--}}
{{--                                <option>London</option>--}}
{{--                                <option>Dillih</option>--}}
{{--                                <option>Lahore</option>--}}
{{--                                <option>Alaska</option>--}}
{{--                                <option>Canada</option>--}}
{{--                                <option>Dubai</option>--}}
{{--                            </select>--}}

{{--                        </li>--}}
{{--                        <li class="single_field zip-field">--}}
{{--                            <label>Zip Code:</label>--}}
{{--                            <input type="text">--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                    <a class="btn btn-default update" href="">Get Quotes</a>--}}
{{--                    <a class="btn btn-default check_out" href="">Continue</a>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-sm-8">
                <div class="total_area">
                    <ul>
                        <li>Cart Sub Total <span>{{\Cart::getSubTotal()}} Tk</span></li>
                        <li>Shipping Cost <span>60 Tk</span></li>
                        <li>Total <span>{{\Cart::getTotal() +60 }} Tk</span></li>
                    </ul>
                    <a class="btn btn-success update example4" href="/">Buy More</a>
                    <?php $customer_id=Session::get('customer_id');?>

                    <?php $customer_id=Session::get('customer_id');?>
                    <?php if($customer_id != NULL) {?>
                    <a href="{{URL::to('/checkout')}}" class="btn btn-success check_out pull-right" >Checkout</a>
                    <?php } else{ ?>
                     <a class="btn btn-success example4 check_out pull-right" href="{{URL::to('/login_check')}}">Check Out</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->

@endsection
