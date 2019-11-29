use Darryldecode\Cart\Cart;
@extends('layout')
@section('content')
    @include('slider')


    <div class="container light-padding-top light-padding-vertical white-bg xs-shadow">
        <h3 class="center brand-color font-bold light-margin-vertical padding-horizontal">
            ৳60 Delivery Charge, Free Delivery for First Orders!
        </h3>
        <div class="col-md-4 no-padding">
            <div class="light-margin-vertical">
    <span class="font-md fa-stack brand-color">
      <i class="fa fa-check-square fa-stack-2x"></i>
    </span> &nbsp;
                <span class="font-sm">Only <b class="brand-color">certified</b> medicine available</span>
            </div>
        </div>

        <div class="col-md-4 no-padding">
            <div class="light-margin-vertical">
    <span class="font-md fa-stack brand-color">
      <i class="fa fa-square fa-stack-2x"></i>
      <i class="fa fa-money fa-inverse fa-stack-1x"></i>
    </span> &nbsp;
                <span class="font-sm">Payment: <b class="brand-color">Cash</b> on Delivery</span>
            </div>
        </div>

        <div class="col-md-4 no-padding">
            <div class="light-margin-vertical">
    <span class="font-md fa-stack brand-color">
      <i class="fa fa-square fa-stack-2x"></i>
      <i class="fa fa-map-marker fa-inverse fa-stack-1x"></i>
    </span> &nbsp;
                <span class="font-sm">Delivery anywhere in <b class="brand-color">Dhaka City</b></span>
            </div>
            <br>
        </div>

        <div class="col-md-4 no-padding">
            <div class="light-margin-vertical">
    <span class="font-md fa-stack brand-color">
      <i class="fa fa-square fa-stack-2x"></i>
      <i class="fa fa-clock-o fa-inverse fa-stack-1x"></i>
    </span> &nbsp;
                <span class="font-sm">Order <b class="brand-color">by 2pm</b> for <b class="brand-color">Same day</b> delivery </span>
            </div>
        </div>

        <div class="col-md-4 no-padding">
            <div class="light-margin-vertical">
    <span class="font-md fa-stack brand-color">
      <i class="fa fa-square fa-stack-2x"></i>
      <i class="fa fa-user-md fa-inverse fa-stack-1x"></i>
    </span> &nbsp;
                <span class="font-sm"><b class="brand-color">Pharmacist</b> available for consultation</span>
            </div>
        </div>

        <div class="col-md-4 no-padding">
            <div class="light-margin-vertical">
    <span class="font-md fa-stack brand-color">
      <i class="fa fa-square fa-stack-2x"></i>
      <i class="fa fa-lock fa-inverse fa-stack-1x"></i>
    </span> &nbsp;
                <span class="font-sm"><b class="brand-color">Confidential</b> delivery to ensure <b class="brand-color">privacy</b></span>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div class="container light-padding-vertical margin-bottom bg-primary center xs-shadow">
        <h4 class="text-white">*For your safety, we require a prescription for non-OTC medicine.</h4>
        <h5 class="text-white">Upload your prescription,or call us at <b style="color: yellow">01300899200 | 01300899199 </b> for help.</h5>
    </div>

    <br>
    <br>
    <br>
 <section>
    <div class="features_items example3" ><!--features_items-->
       <div class="row">
           <div class="container">
                 <div class="col-sm-8">
                     <h2 class="title text-align-left"> Medicine </h2>
                 </div>
                  <div class="col-sm-4 pull-right">
                      <a href="{{URL::to('/product_by_category/'.'1')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                  </div>
           </div>
       </div>
    <?php

//    foreach ($all_published_product as $v_published_product)
        $medicine = DB::table('tb1_products')
            ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
            -> select('tb1_products.*','tb1_manufacture.manufacture_name')
            ->where('tb1_products.category_id',1)
            ->where('tb1_products.publication_status',1)
            ->get();
        for ($i = 0;$i<4 ;$i++){?>

    <div class="col-sm-3" >

        <div class="product-image-wrapper">
            <div class="single-products ">
                <div class="productinfo text-center">
                    <img src="{{URL:: to($medicine[$i]->product_image)}}" alt="" style="height: 150px"/>
                    <h2>{{$medicine[$i]->product_price}} Tk</h2>
                    <p>{{$medicine[$i]->product_name}}</p>
                    <script> var id = '<?php echo $medicine[$i]->product_id; ?>'
                        var name = '<?php echo $medicine[$i]->product_name; ?>'
                        var price = '<?php echo $medicine[$i]->product_price; ?>'
                        var attributes = '<?php echo $medicine[$i]->product_image; ?>'
                    </script>
                    {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                    {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    <form action="{{url('/add_to_cart_home/'.$medicine[$i]->product_id)}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" value="1" name="qty"/>
                        <input type="hidden" name="product_id" value="{{$medicine[$i]->product_id}}"/>
                        <button type="submit" onclick="this.innerHTML='Added Successful!'"
                                class="btn btn-fe fault cart center-block">
                            <i class="fa fa-shopping-cart"></i> Add to cart
                        </button>
                    </form>

                </div>
{{--                                <div class="product-overlay" >--}}
{{--                                    <div class="overlay-content">--}}
{{--                                        <h2>{{$all_published_product[$i]->product_price}} Tk</h2>--}}
{{--                                        <p>{{$all_published_product[$i]->product_name}}</p>--}}
{{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>{{$medicine[$i]->manufacture_name}}</a></li>
                    <li><a href="{{URL::to('/view_product/'.$medicine[$i]->product_id)}}"><i
                                class="fa fa-plus-square"></i>View Product</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php }?>
    </div><!--features_items-->

 </section>
<br>
    <br>
    {{--    <div class="category-tab"><!--category-tab-->--}}
    {{--        <div class="col-sm-12">--}}
    {{--            <ul class="nav nav-tabs">--}}
    {{--                <li class="active"><a href="#tshirt" data-toggle="tab">T-Shirt</a></li>--}}
    {{--                <li><a href="#blazers" data-toggle="tab">Blazers</a></li>--}}
    {{--                <li><a href="#sunglass" data-toggle="tab">Sunglass</a></li>--}}
    {{--                <li><a href="#kids" data-toggle="tab">Kids</a></li>--}}
    {{--                <li><a href="#poloshirt" data-toggle="tab">Polo shirt</a></li>--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--        <div class="tab-content">--}}
    {{--            <div class="tab-pane fade active in" id="tshirt" >--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery1.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery2.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery3.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery4.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="tab-pane fade" id="blazers" >--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery4.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery3.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery2.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery1.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="tab-pane fade" id="sunglass" >--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery3.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery4.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery1.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery2.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="tab-pane fade" id="kids" >--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery1.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery2.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery3.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery4.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="tab-pane fade" id="poloshirt" >--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery2.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery4.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery3.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--                <div class="col-sm-3">--}}
    {{--                    <div class="product-image-wrapper">--}}
    {{--                        <div class="single-products">--}}
    {{--                            <div class="productinfo text-center">--}}
    {{--                                <img src="{{URL:: to('frontend/images/home/gallery1.jpg')}}" alt="" />--}}
    {{--                                <h2>$56</h2>--}}
    {{--                                <p>Easy Polo Black Edition</p>--}}
    {{--                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
    {{--                            </div>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div><!--/category-tab-->--}}

    <section>
        <div class="features_items example4" ><!--features_items-->
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <h2 class="title text-align-left"> Baby Care </h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'3')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $baby_product = DB::table('tb1_products')
                 ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',3)
                ->where('tb1_products.publication_status',1)
                ->get();
            //    foreach ($all_published_product as $v_published_product)
            for ($i = 0;$i<4 ;$i++){?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($baby_product[$i]->product_image)}}" alt="" style="height: 150px"/>
                            <h2>{{$baby_product[$i]->product_price}} Tk</h2>
                            <p>{{$baby_product[$i]->product_name}}</p>
                            <script> var id = '<?php echo $baby_product[$i]->product_id; ?>'
                                var name = '<?php echo $baby_product[$i]->product_name; ?>'
                                var price = '<?php echo $baby_product[$i]->product_price; ?>'
                                var attributes = '<?php echo $baby_product[$i]->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$baby_product[$i]->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" value="1" name="qty"/>
                                <input type="hidden" name="product_id" value="{{$baby_product[$i]->product_id}}"/>
                                <button type="submit" onclick="this.innerHTML='Added Successful!'"
                                        class="btn btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>
                            </form>

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
                            <li><a href="#"><i class="fa fa-plus-square"></i>{{$baby_product[$i]->manufacture_name}}</a></li>
                            <li><a href="{{URL::to('/view_product/'.$baby_product[$i]->product_id)}}"><i
                                        class="fa fa-plus-square"></i>View Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->

    </section>
    <br>
    <br>

    <section>
        <div class="features_items example3" ><!--features_items-->
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <h2 class="title text-align-left"> Feminine Hygiene </h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'5')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $feminine_hygiene = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',5)
                ->where('tb1_products.publication_status',1)
                ->get();
            //    foreach ($all_published_product as $v_published_product)
            for ($i = 0;$i<4 ;$i++){?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products ">
                        <div class="productinfo text-center ">
                            <img src="{{URL:: to($feminine_hygiene[$i]->product_image)}}" alt="" style="height: 150px"/>
                            <h2>{{$feminine_hygiene[$i]->product_price}} Tk</h2>
                            <p>{{$feminine_hygiene[$i]->product_name}}</p>
                            <script> var id = '<?php echo $feminine_hygiene[$i]->product_id; ?>'
                                var name = '<?php echo $feminine_hygiene[$i]->product_name; ?>'
                                var price = '<?php echo $feminine_hygiene[$i]->product_price; ?>'
                                var attributes = '<?php echo $feminine_hygiene[$i]->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$feminine_hygiene[$i]->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" value="1" name="qty"/>
                                <input type="hidden" name="product_id" value="{{$feminine_hygiene[$i]->product_id}}"/>
                                <button type="submit" onclick="this.innerHTML='Added Successful!'"
                                        class="btn btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>
                            </form>

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
                            <li><a href="#"><i class="fa fa-plus-square"></i>{{$feminine_hygiene[$i]->manufacture_name}}</a></li>
                            <li><a href="{{URL::to('/view_product/'.$feminine_hygiene[$i]->product_id)}}"><i
                                        class="fa fa-plus-square"></i>View Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->

    </section>
    <br>
    <br>

    <section>
        <div class="features_items example4" ><!--features_items-->
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <h2 class="title text-align-left"> Health and Beauty  </h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'6')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $health_beauty = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',6)
                ->where('tb1_products.publication_status',1)
                ->get();
            //    foreach ($all_published_product as $v_published_product)
            for ($i = 0;$i<4 ;$i++){?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($health_beauty[$i]->product_image)}}" alt="" style="height: 150px"/>
                            <h2>{{$health_beauty[$i]->product_price}} Tk</h2>
                            <p>{{$health_beauty[$i]->product_name}}</p>
                            <script> var id = '<?php echo $health_beauty[$i]->product_id; ?>'
                                var name = '<?php echo $health_beauty[$i]->product_name; ?>'
                                var price = '<?php echo $health_beauty[$i]->product_price; ?>'
                                var attributes = '<?php echo $health_beauty[$i]->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$health_beauty[$i]->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" value="1" name="qty"/>
                                <input type="hidden" name="product_id" value="{{$health_beauty[$i]->product_id}}"/>
                                <button type="submit" onclick="this.innerHTML='Added Successful!'"
                                        class="btn btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>
                            </form>

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
                            <li><a href="#"><i class="fa fa-plus-square"></i>{{$health_beauty[$i]->manufacture_name}}</a></li>
                            <li><a href="{{URL::to('/view_product/'.$health_beauty[$i]->product_id)}}"><i
                                        class="fa fa-plus-square"></i>View Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->

    </section>
    <br>
    <br>

    <section>
        <div class="features_items example3" ><!--features_items-->
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <h2 class="title text-align-left"> Sexual Welbeing	 </h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'2')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $sexual = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',2)
                ->where('tb1_products.publication_status',1)
                ->get();
            //    foreach ($all_published_product as $v_published_product)
            for ($i = 0;$i<4 ;$i++){?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($sexual[$i]->product_image)}}" alt="" style="height: 150px"/>
                            <h2>{{$sexual[$i]->product_price}} Tk</h2>
                            <p>{{$sexual[$i]->product_name}}</p>
                            <script> var id = '<?php echo $sexual[$i]->product_id; ?>'
                                var name = '<?php echo $sexual[$i]->product_name; ?>'
                                var price = '<?php echo $sexual[$i]->product_price; ?>'
                                var attributes = '<?php echo $sexual[$i]->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$sexual[$i]->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" value="1" name="qty"/>
                                <input type="hidden" name="product_id" value="{{$sexual[$i]->product_id}}"/>
                                <button type="submit" onclick="this.innerHTML='Added Successful!'"
                                        class="btn btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>
                            </form>

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
                            <li><a href="#"><i class="fa fa-plus-square"></i>{{$sexual[$i]->manufacture_name}}</a></li>
                            <li><a href="{{URL::to('/view_product/'.$sexual[$i]->product_id)}}"><i
                                        class="fa fa-plus-square"></i>View Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->

    </section>
    <br>
    <br>

    <section>
        <div class="features_items example3" ><!--features_items-->
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <h2 class="title text-align-left"> Others </h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'7')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $others = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',7)
                ->where('tb1_products.publication_status',1)
                ->get();
            //    foreach ($all_published_product as $v_published_product)
            for ($i = 0;$i<4 ;$i++){?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($others[$i]->product_image)}}" alt="" style="height: 150px"/>
                            <h2>{{$others[$i]->product_price}} Tk</h2>
                            <p>{{$others[$i]->product_name}}</p>
                            <script> var id = '<?php echo $others[$i]->product_id; ?>'
                                var name = '<?php echo $others[$i]->product_name; ?>'
                                var price = '<?php echo $others[$i]->product_price; ?>'
                                var attributes = '<?php echo $others[$i]->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$others[$i]->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" value="1" name="qty"/>
                                <input type="hidden" name="product_id" value="{{$others[$i]->product_id}}"/>
                                <button type="submit" onclick="this.innerHTML='Added Successful!'"
                                        class="btn btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>
                            </form>

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
                            <li><a href="#"><i class="fa fa-plus-square"></i>{{$others[$i]->manufacture_name}}</a></li>
                            <li><a href="{{URL::to('/view_product/'.$others[$i]->product_id)}}"><i
                                        class="fa fa-plus-square"></i>View Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->

    </section>
    <br>
    <br>
@endsection

