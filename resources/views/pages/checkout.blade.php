@extends('layout')
@section('content')
    <section id="cart_items">
        <div class="container">


            <div class="register-req">
                <p class="align-center">Please fill up this form </p>
            </div><!--/register-req-->

            <div class="shopper-informations">
                <div class="row">

                    <div class="col-sm-10 clearfix pull-right">
                        <div class="bill-to">
                            <p>Bill To</p>
                            <div class="form-one">
                                <form action="{{url('/save_shipping_details')}}" method="post">
                                    {{csrf_field()}}

                                    <div class="form-group">
                                        <label>Full Name:</label>
                                        <input class="form-control " type="text" placeholder="John Smith" name="shipping_name" required=""/>
                                        <span class="Error"></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Mobile Number:</label>
                                        <input class="form-control" type="text" placeholder="01711111111" name="shipping_mobile_phone_1" required="" />
                                        <span class="Error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile Number:</label>
                                        <input class="form-control" type="text" placeholder="01711111111" name="shipping_mobile_phone_2" required=""/>
                                        <span class="Error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input class="form-control" type="email" placeholder="medizone@gmail.com" name="shipping_email" required=""/>
                                        <span class="Error"></span>
                                    </div>
                                    <div class="form-group">
                                        <label>Shipping Address:</label>
                                        <input class="form-control" type="text" name="shipping_address" placeholder="House 71, Road 9/A, Dhanmondi," required=""/>
                                        <span class="Error"></span>
                                    </div>

                                    <div class="form-group">
                                        <label>Area:</label>
                                        <select class="form-control" name="shipping_area" required="">
                                            <option>-- Area --</option>
                                            <option>Mirpur</option>
                                            <option>Dhanmondi</option>
                                            <option>Uttara</option>
                                        </select>
                                        <span class="Error"></span>
                                    </div>
                                    <button type="submit" class="btn btn-default example4 btn-success pull-right btn-lg">Done</button>

{{--                                    <input type="text" name="shipping_name" placeholder="Full Name *" required="">--}}
{{--                                    <input type="text" name="shipping_mobile_phone_1" placeholder="Mobile Phone 1*" required="">--}}
{{--                                    <input type="text" name="shipping_mobile_phone_2" placeholder="Mobile Phone 2"required="">--}}
{{--                                    <input type="text" name="shipping_email" placeholder="Email* " required="">--}}
{{--                                    <textarea rows="5" cols="20" name="shipping_address"  required=""> </textarea>--}}
{{--                                    <p></p>--}}
{{--                                    <select name="shipping_area" required="">--}}
{{--                                        <option>-- Area --</option>--}}
{{--                                        <option>Mirpur</option>--}}
{{--                                        <option>Dhanmondi</option>--}}
{{--                                        <option>Uttara</option>--}}
{{--                                    </select>--}}
{{--                                    <p></p>--}}
{{--                                    <input type="submit" class="btn btn-block btn-default" value="Done">--}}
                                </form>
                                <br>
                                <br>
                                <br>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--/#cart_items-->

@endsection
