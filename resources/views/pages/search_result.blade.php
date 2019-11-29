@extends('layout')
@section('content')

    <h2 class="title text-center">Search Result</h2>

    <?php
    foreach ($all_product_info as $v_all_product_info){?>
    <div class="col-sm-3">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{URL:: to($v_all_product_info->product_image)}}" alt="" style="height: 150px"/>
                    <h2>{{$v_all_product_info->product_price}} Tk</h2>
                    <p>{{$v_all_product_info->product_name}}</p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                {{--                <div class="product-overlay">--}}
                {{--                    <div class="overlay-content">--}}
                {{--                        <h2>{{$v_published_product->product_price}} Tk</h2>--}}
                {{--                        <p>{{$v_published_product->product_name}}</p>--}}
                {{--                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>square</a></li>
                    <li><a href="{{URL::to('/view_product/'.$v_all_product_info->product_id)}}"><i class="fa fa-plus-square"></i>View Product</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php }?>
    </div><!--features_items-->
@endsection
