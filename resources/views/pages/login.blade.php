@extends('layout')
@section('content')
<br>
<br>

<section><!--form-->
    <div class="container" >
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form action="{{URL::to('/customer_login')}}" method="post">
                        {{csrf_field()}}
                        <input type="text" placeholder="Mobile Number"name="customer_mobile_number" required=""/>
                        <input type="password" placeholder="Passwords" name="customer_password" required="" />
                        <span>
								<input type="checkbox" class="checkbox">
								Keep me signed in
							</span>
                        <button type="submit" class="btn btn-default example4">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">OR</h2>
            </div>
            <div class="col-sm-5">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <form action="{{URL::to('/customer_registration')}}" method="post">
                        {{csrf_field()}}
                        <input type="text" placeholder="Full Name" name="customer_name" required="" />
                        <input type="text" placeholder="Mobile Number"name="customer_mobile_number" required=""/>
                        <input type="email" placeholder="Email Address"name="customer_email" required="" />
                        <input type="password" placeholder="Password"name="customer_password" required="" />

                        <button type="submit" class="btn btn-default example4">Signup</button>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->




@endsection
