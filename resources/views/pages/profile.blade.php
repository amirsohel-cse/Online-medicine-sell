@extends('layout')
@section('content')

    <section ><!--form-->
        <div class="container" >

   <div class="col-sm-3"></div>
    <div class="col-sm-6">
        <div class="signup-form"><!--sign up form-->
            <h2>Account Information !</h2>
            <p class="alert-success" >
                <?php
                $message = Session::get('messege');

                if($message)
                {
                    echo $message;
                    Session::put('messege',NULL);
                }
                ?>
            </p>

            <?php

            $customer_id=Session::get('customer_id');
            $profile = DB::table('tb1_customer')->where('customer_id',$customer_id)->get();

            foreach($profile as $x) {?>
            <form action="{{URL::to('/profile_update/'.$customer_id)}}" method="post">
                {{csrf_field()}}


                <div class="form-group">
                    <label>Full Name:</label>
                    <input class="form-control " type="text" name="fullname" value="{{$x->customer_name}}"/>
                    <span class="Error"></span>
                </div>

                <div class="form-group">
                    <label>Mobile Number:</label>
                    <input class="form-control" type="text" name="mobile" value="{{$x->customer_mobile_number}}"/>
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input class="form-control" type="email" name="email" value="{{$x->customer_email}}"/>
                    <span class="Error"></span>
                </div>
                <div class="form-group">
                    <label>Password:</label>
                    <input class="form-control" type="password" name="password" value="{{$x->customer_password}}"/>
                    <span class="Error"></span>
                </div>
                <button type="submit" class="btn btn-default example4 btn-success">Update</button>
<?php } ?>
            </form>

        </div><!--/sign up form-->
    </div>
            </div>
        <br>
        <br>

    </section>
    @endsection
