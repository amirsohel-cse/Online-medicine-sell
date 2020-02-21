@extends('layout')
@section('content');

<section id="form"><!--form-->
    <div class="container">
        <div class="center container white-bg light-margin-vertical padding xs-shadow single-page-height" >
            <div class="col-md-offset-3 col-md-6 co-xs-12">
                <h3>Your order has been submitted!</h3>
                <hr>
                <h4>Order Number: # <b>{{$order_id}}</b> </h4>

                <h4>
                    We will call you to confirm your delivery address and the total price. *The total price of your order may vary depending on market prices of individual products, relevant discounts, and your promo code.
                </h4>
                <h3>
                    Thank you for shopping with <span class="brand-color font-bold">MedizoneBD.com!</span>
                </h3>
                <div class="margin">
                    <a href='/' class="btn btn-success padding font-bold">Back to Home Page</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/form-->

@endsection()
