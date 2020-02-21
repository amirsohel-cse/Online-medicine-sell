
@extends('layout')
@section('content')
@include('slider')
@include('pages.modal')
<script>
    $(function () {
         var btn = $('button[name="btn"]');
         var btn2 = $('button[name="view"]');

            btn.click(function () {
                var id = $(this).val();
                console.log(id);
            if(id){
                    $.ajax({
                        url: '/add_to_cart_home?id=' + id,
                        type: 'get',
                        contentType: 'application/json',
                        success: function (data, textStatus, jQxhr ) {
                            for(item of data){
                         document.getElementById('countlg').innerHTML=item;
                            document.getElementById('count').innerHTML=item;
                        }
                            ('success');
                            },
                        error: function (jqXhr, textStatus, error) {
                            console.log("this is error ---: ", error);
                        }
                    });
                }
        })
        btn2.click(function () {
            var id = $(this).val();
            console.log(id);
            if(id){
                $.ajax({
                    url: '/modal?id=' + id,
                    type: 'get',
                    contentType: 'application/json',
                    success: function (data, textStatus, jQxhr ) {
                           console.log(data);
                            data = JSON.parse(data);
                        document.getElementById('pimage').src=data.product_image;
                            document.getElementById('mprice').innerHTML='MRP ৳ '+ data.product_price;
                        document.getElementById('pname').innerHTML=data.product_name;
                        document.getElementById('ptype').innerHTML=data.type;
                        if(data.pgeneric ==null)
                        {
                            document.getElementById('mgeneric').style.display = "none";
                        }
                        else{
                            document.getElementById("mgeneric").style.display = "block";
                            document.getElementById('pgeneric').innerHTML = data.pgeneric;
                        }

                        if(data.pieces_per_pata==null)
                        document.getElementById('mperpata').style.display = "none";
                        else{
                            document.getElementById("mperpata").style.display = "block";
                            document.getElementById('pperpata').innerHTML = data.pieces_per_pata;
                        }
                        //for quantity
                        if(data.quantity == null)
                            document.getElementById("mquantity").style.display = "none";
                        else {
                            document.getElementById("mquantity").style.display = "block";
                            document.getElementById('quantity').innerHTML = data.quantity;
                        }
                      // for dose
                        if(data.dose==null)
                        document.getElementById("mdose").style.display = "none";
                        else {
                            document.getElementById("mdose").style.display = "block";
                            document.getElementById('pdose').innerHTML = data.dose;
                        }
                        if(data.size == null)
                            document.getElementById("msize").style.display = "none";
                        else {
                            document.getElementById('psize').innerHTML = data.size;
                        }
                        document.getElementById('addid').value=data.product_id;
                    },
                    error: function (jqXhr, textStatus, error) {
                        console.log("this is error ---: ", error);
                    }
                });
            }
        })

    })
</script>


    <div class="container light-padding-top light-padding-vertical white-bg xs-shadow"style="margin-left: -15px" >
        <h3 class="center brand-color font-bold light-margin-vertical padding-horizontal">
            ৳30 Delivery Charge, Free Delivery for First Orders!
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
                <span class="font-sm">Order <b class="brand-color">by 3pm</b> for <b class="brand-color">Same day</b> delivery </span>
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


    </div>
    <div class="container light-padding-vertical margin-bottom bg-primary center xs-shadow"style="background-color: #1E7145;margin-left: -15px">
        <h4 class="text-white">*For your safety, we require a prescription for non-OTC medicine.</h4>
        <h5 class="text-white">Upload your prescription,or call us at <b style="color: yellow">01788882131 | 01300899199 </b> for help.</h5>
    </div>



    <br>
    <br>
    <br>
 <section>
    <div class="features_items example3 larger "style="background-color: white; border: white" ><!--features_items-->

           <div class="larger container-fluid">
                 <div class="col-sm-5">
                     <h2 class="title text-align-left"style="color: #1E7145"> Medicine </h2>
                 </div>
                  <div class="col-sm-4 pull-right">
                      <a href="{{URL::to('/product_by_category/'.'1')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;background-color: #1E7145"> View All </a>
                  </div>
           </div>

    <?php
        //    foreach ($all_published_product as $v_published_product)
        $medicines = DB::table('tb1_products')
            ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
            -> select('tb1_products.*','tb1_manufacture.manufacture_name')
            ->where('tb1_products.category_id',1)
            ->where('tb1_products.publication_status',1)
            ->simplePaginate(4);
        foreach ($medicines as $medicine){?>

    <div class="col-sm-3 larger">

        <div class="product-image-wrapper">
            <div class="single-products ">
                <div class="productinfo text-center">
                    <img src="{{URL:: to($medicine->product_image)}}" alt="" style="height: 150px"/>
                    <h7 style="color: #1E7145"><b>{{$medicine->product_name}}</b></h7>
                    <br>
                    <h7>{{$medicine->type}}</h7>
                    @if($medicine->dose)
                        <p>{{$medicine->dose}}</p>
                    @else
                        <p>{{$medicine->quantity}}</p>
                    @endif
                    <p style="color: black"><b>MRP ৳ {{$medicine->product_price}} @if($medicine->pieces_per_pata != null) (per pata)

                            @endif </b></p>

                    <script> var id = '<?php echo $medicine->product_id; ?>'
                        var name = '<?php echo $medicine->product_name; ?>'
                        var price = '<?php echo $medicine->product_price; ?>'
                        var attributes = '<?php echo $medicine->product_image; ?>'
                    </script>

                        <button type="button" name="btn" value="{{$medicine->product_id}}"
                                class="btn btn-success btn-fe fault cart center-block">
                            <i class="fa fa-shopping-cart"></i> Add to cart
                        </button>


                </div>
{{--                                <div class="product-overlay" >--}}
{{--                                    <div class="overlay-content">--}}
{{--                                        <h2>{{$all_published_product->product_price}} Tk</h2>--}}
{{--                                        <p>{{$all_published_product->product_name}}</p>--}}
{{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
            </div>
            <div class="choose">
                <p></p>
                <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$medicine->product_id}}"
                        class="btn btn-block btn-default ">
                    <i class="fa fa-eye"></i> View Details
                </button>
            </div>
        </div>
    </div>

        <?php }?>

    </div>
        <div class="features_items example3 smalled "style="background-color: white;" ><!--features_items-->

            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <h2 class="title text-align-left"style="color: #1E7145"> Medicine </h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'1')}}" class="btn btn-primary example4 pull-right" style="margin-top: -50px;background-color: #1E7145;text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                    </div>
                </div>
            </div>
        <?php
        //    foreach ($all_published_product as $v_published_product)
            $medicines = DB::table('tb1_products')
            ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
            -> select('tb1_products.*','tb1_manufacture.manufacture_name')
            ->where('tb1_products.category_id',1)
            ->where('tb1_products.publication_status',1)
                ->simplePaginate(2);
            foreach ($medicines as $medicine){?>
        <div class="smalled col-xs-6">

            <div class="product-image-wrapper">
                <div class="single-products ">
                    <div class="productinfo text-center">
                        <img src="{{URL:: to($medicine->product_image)}}" alt="" style="height: 150px"/>
                        <h7 style="color: #1E7145"><b>{{$medicine->product_name}}</b></h7>
                        <br>
                        <h7>{{$medicine->type}}</h7>
                        @if($medicine->dose)
                            <p>{{$medicine->dose}}</p>
                        @else
                            <p>{{$medicine->quantity}}</p>
                        @endif
                        <p style="color: black"><b> MRP ৳ {{$medicine->product_price}} </b></p>

                        <script> var id = '<?php echo $medicine->product_id; ?>'
                            var name = '<?php echo $medicine->product_name; ?>'
                            var price = '<?php echo $medicine->product_price; ?>'
                            var attributes = '<?php echo $medicine->product_image; ?>'
                        </script>
                        {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                        {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}

                            <button type="button" name="btn" value="{{$medicine->product_id}}"
                                    class="btn btn-success btn-fe fault cart center-block">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </button>
                    </div>
                    {{--                                <div class="product-overlay" >--}}
                    {{--                                    <div class="overlay-content">--}}
                    {{--                                        <h2>{{$all_published_product->product_price}} Tk</h2>--}}
                    {{--                                        <p>{{$all_published_product->product_name}}</p>--}}
                    {{--                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                </div>
                <div class="choose">
                    <p></p>
                    <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$medicine->product_id}}"
                            class="btn btn-block btn-default ">
                        <i class="fa fa-eye"></i> View Details
                    </button>
                </div>
            </div>
        </div>

    <?php }?>

    </div><!--features_items-->

 </section>
<br>
    <br>


    <section>
        <div class="features_items example4 larger" style="background-color: white; border: white" ><!--features_items-->
            <div class="row">
                <div class=" container-fluid">
                    <div class="col-sm-5">
                        <h2 class="title text-align-left"style="color: #1E7145"> Baby Care </h2>
                    </div>
                    <div class="col-sm-4 pull-right">
                        <a href="{{URL::to('/product_by_category/'.'2')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;background-color: #1E7145"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $baby_products = DB::table('tb1_products')
                 ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',2)
                ->where('tb1_products.publication_status',1)
                ->simplePaginate(4);
            //    foreach ($all_published_product as $v_published_product)
            foreach ($baby_products as $baby_product ){?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($baby_product->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$baby_product->product_name}}</b></h7>
                            <br>
                            <h7>{{$baby_product->type}}</h7>

                                <p>{{$baby_product->size}} ,{{$baby_product->quantity}} </p>



                            <p style="color: black"><b> MRP ৳ {{$baby_product->product_price}} </b></p>

                            <script> var id = '<?php echo $baby_product->product_id; ?>'
                                var name = '<?php echo $baby_product->product_name; ?>'
                                var price = '<?php echo $baby_product->product_price; ?>'
                                var attributes = '<?php echo $baby_product->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$baby_product->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <button type="button" name="btn" value="{{$baby_product->product_id}}"
                                        class="btn btn-success btn-fe fault cart center-block">
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
                        <p></p>
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$baby_product->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->
        <div class="features_items example4 smalled" style="background-color: white" ><!--features_items-->
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <p class=" text-align-left"style="color: #1E7145"><b> Baby Care</b> </p>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'2')}}" class="btn btn-primary example4 pull-right" style="margin-top: -30px;background-color: #1E7145;text-transform: uppercase;"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $baby_products = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',2)
                ->where('tb1_products.publication_status',1)
                ->simplePaginate(2);
            //    foreach ($all_published_product as $v_published_product)
            foreach ($baby_products as $baby_product ){?>
            <div class="col-xs-6">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($baby_product->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$baby_product->product_name}}</b></h7>
                            <br>
                            <h7>{{$baby_product->type}}</h7>

                            <p>{{$baby_product->size}} ,{{$baby_product->quantity}} </p>
                            <p style="color: black"><b> MRP ৳ {{$baby_product->product_price}} </b></p>

                            <script> var id = '<?php echo $baby_product->product_id; ?>'
                                var name = '<?php echo $baby_product->product_name; ?>'
                                var price = '<?php echo $baby_product->product_price; ?>'
                                var attributes = '<?php echo $baby_product->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$baby_product->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <button type="button" name="btn" value="{{$baby_product->product_id}}"
                                        class="btn btn-success btn-fe fault cart center-block">
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
                        <p></p>
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$baby_product->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->
    </section>
    <br>
    <br>

    <section>
        <div class="features_items example3 larger"style="background-color: white; border: white" ><!--features_items-->
            <div class="row">
                <div class="larger container-fluid">
                    <div class="col-sm-5">
                        <h2 class="title text-align-left"style="color: #1E7145"> Feminine Hygiene </h2>
                    </div>
                    <div class="col-sm-4 pull-right">
                        <a href="{{URL::to('/product_by_category/'.'3')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;background-color: #1E7145"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $feminine_hygienes = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',3)
                ->where('tb1_products.publication_status',1)
                ->simplePaginate(4);
            //    foreach ($all_published_product as $v_published_product)
            foreach ($feminine_hygienes as $feminine_hygiene ){?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products ">
                        <div class="productinfo text-center ">
                            <img src="{{URL:: to($feminine_hygiene->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$feminine_hygiene->product_name}}</b></h7>
                            <br>
                            <h7>{{$feminine_hygiene->type}}</h7>
                            @if($feminine_hygiene->dose)
                                <p>{{$feminine_hygiene->dose}}</p>
                            @else
                                <p>{{$feminine_hygiene->quantity}}</p>
                            @endif
                            <p style="color: black"><b>MRP ৳ {{$feminine_hygiene->product_price}} </b></p>
                            <script> var id = '<?php echo $feminine_hygiene->product_id; ?>'
                                var name = '<?php echo $feminine_hygiene->product_name; ?>'
                                var price = '<?php echo $feminine_hygiene->product_price; ?>'
                                var attributes = '<?php echo $feminine_hygiene->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$feminine_hygiene->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <button type="button" name="btn" value="{{$feminine_hygiene->product_id}}"
                                                  class="btn btn-success btn-fe fault cart center-block">
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
                        <p></p>
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$feminine_hygiene->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->

        <div class="features_items example3 smalled"style="background-color: white;" ><!--features_items-->
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <h2 class="title text-align-left"style="color: #1E7145"> Feminine Hygiene </h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'3')}}" class="btn btn-primary example4 pull-right" style="margin-top: -50px;background-color: #1E7145; text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $feminine_hygienes = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',3)
                ->where('tb1_products.publication_status',1)
                ->simplePaginate(2);
            //    foreach ($all_published_product as $v_published_product)
            foreach ($feminine_hygienes as $feminine_hygiene ){?>
            <div class="col-xs-6">
                <div class="product-image-wrapper">
                    <div class="single-products ">
                        <div class="productinfo text-center ">
                            <img src="MRP ৳ {{URL:: to($feminine_hygiene->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$feminine_hygiene->product_name}}</b></h7>
                            <br>
                            <h7>{{$feminine_hygiene->type}}</h7>
                            @if($feminine_hygiene->dose)
                                <p>{{$feminine_hygiene->dose}}</p>
                            @else
                                <p>{{$feminine_hygiene->quantity}}</p>
                            @endif
                            <p style="color: black"><b>{{$feminine_hygiene->product_price}} </b></p>
                            <script> var id = '<?php echo $feminine_hygiene->product_id; ?>'
                                var name = '<?php echo $feminine_hygiene->product_name; ?>'
                                var price = '<?php echo $feminine_hygiene->product_price; ?>'
                                var attributes = '<?php echo $feminine_hygiene->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$feminine_hygiene->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <button type="button" name="btn" value="{{$feminine_hygiene->product_id}}"
                                        class="btn btn-success btn-fe fault cart center-block">
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
                        <p></p>
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$feminine_hygiene->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->

    </section>
    <br>
    <br>

    <section>
        <div class="features_items example4 larger" style="background-color: white;border: white"><!--features_items-->
            <div class="row">
                <div class="larger container-fluid">
                    <div class="col-sm-5">
                        <h2 class="title text-align-left"style="color: #1E7145"> Health and Beauty </h2>
                    </div>
                    <div class="col-sm-4 pull-right">
                        <a href="{{URL::to('/product_by_category/'.'5')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;background-color: #1E7145"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $health_beautys = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',5)
                ->where('tb1_products.publication_status',1)
                ->simplePaginate(4);
            //    foreach ($all_published_product as $v_published_product)
            foreach ($health_beautys as $health_beauty){?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($health_beauty->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$health_beauty->product_name}}</b></h7>
                            <br>
                            <h7>{{$health_beauty->type}}</h7>

                            <p>{{$health_beauty->size}} ,{{$health_beauty->quantity}} </p>
                            <p style="color: black"><b>MRP ৳ {{$health_beauty->product_price}} </b></p>
                            <script> var id = '<?php echo $health_beauty->product_id; ?>'
                                var name = '<?php echo $health_beauty->product_name; ?>'
                                var price = '<?php echo $health_beauty->product_price; ?>'
                                var attributes = '<?php echo $health_beauty->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$health_beauty->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <button type="button" name="btn" value="{{$health_beauty->product_id}}"
                                        class="btn btn-success btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>
                            </form>

                        </div>

                    </div>
                    <div class="choose">
                        <p></p>
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$health_beauty->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->
        <div class="features_items example4 smalled" style="background-color: white"><!--features_items-->
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <h2 class="title text-align-left" style="color: #1E7145"> Health and Beauty  </h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'5')}}" class="btn btn-primary example4 pull-right" style="margin-top: -50px;background-color: #1E7145; text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $health_beautys = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',5)
                ->where('tb1_products.publication_status',1)
                ->simplePaginate(2);
            //    foreach ($all_published_product as $v_published_product)
            foreach ($health_beautys as $health_beauty){?>
            <div class="col-xs-6">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($health_beauty->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$health_beauty->product_name}}</b></h7>
                            <br>
                            <h7>{{$health_beauty->type}}</h7>

                            <p>{{$health_beauty->size}} ,{{$health_beauty->quantity}} </p>
                            <p style="color: black"><b> MRP ৳ {{$health_beauty->product_price}} </b></p>
                            <script> var id = '<?php echo $health_beauty->product_id; ?>'
                                var name = '<?php echo $health_beauty->product_name; ?>'
                                var price = '<?php echo $health_beauty->product_price; ?>'
                                var attributes = '<?php echo $health_beauty->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$health_beauty->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <button type="button" name="btn" value="{{$health_beauty->product_id}}"
                                        class="btn btn-success btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>
                            </form>

                        </div>

                    </div>
                    <div class="choose">
                        <p></p>
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$health_beauty->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->

    </section>
    <br>
    <br>

    <section>
        <div class="features_items example3 larger"style="background-color: white ;border: white" ><!--features_items-->
            <div class="row">
                <div class="larger container-fluid">
                    <div class="col-sm-5">
                        <h2 class="title text-align-left"style="color: #1E7145"> Sexual Welbeing </h2>
                    </div>
                    <div class="col-sm-4 pull-right">
                        <a href="{{URL::to('/product_by_category/'.'4')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;background-color: #1E7145"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $sexuals = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',4)
                ->where('tb1_products.publication_status',1)
                ->simplePaginate(4);
            //    foreach ($all_published_product as $v_published_product)
            foreach ($sexuals as $sexual ){?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($sexual->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$sexual->product_name}}</b></h7>
                            <br>
                            <h7>{{$sexual->type}}</h7>

                            <p>{{$sexual->size}} {{$sexual->quantity}} </p>
                            <p style="color: black"><b>{{$sexual->product_price}} </b></p>
                            <script> var id = '<?php echo $sexual->product_id; ?>'
                                var name = '<?php echo $sexual->product_name; ?>'
                                var price = '<?php echo $sexual->product_price; ?>'
                                var attributes = '<?php echo $sexual->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$sexual->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <button type="button" name="btn" value="{{$sexual->product_id}}"
                                        class="btn btn-success btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>
                            </form>

                        </div>

                    </div>
                    <div class="choose">
                        <p></p>
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$sexual->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->
        <div class="features_items example3 smalled"style="background-color: white" ><!--features_items-->
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <h2 class="title text-align-left" style="color: #1E7145"> Sexual Welbeing	 </h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'4')}}" class="btn btn-primary example4 pull-right" style="margin-top: -50px;background-color: #1E7145; text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $sexuals = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',4)
                ->where('tb1_products.publication_status',1)
                ->simplePaginate(2);
            //    foreach ($all_published_product as $v_published_product)
            foreach ($sexuals as $sexual ){?>
            <div class="col-xs-6">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($sexual->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$sexual->product_name}}</b></h7>
                            <br>
                            <h7>{{$sexual->type}}</h7>

                            <p>{{$sexual->size}} {{$sexual->quantity}} </p>
                            <p style="color: black"><b>{{$sexual->product_price}} </b></p>
                            <script> var id = '<?php echo $sexual->product_id; ?>'
                                var name = '<?php echo $sexual->product_name; ?>'
                                var price = '<?php echo $sexual->product_price; ?>'
                                var attributes = '<?php echo $sexual->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                            <form action="{{url('/add_to_cart_home/'.$sexual->product_id)}}" method="post">
                                {{ csrf_field() }}
                                <button type="button" name="btn" value="{{$sexual->product_id}}"
                                        class="btn btn-success btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>
                            </form>

                        </div>

                    </div>
                    <div class="choose">
                        <p></p>
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$sexual->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->

    </section>
    <br>
    <br>

    <section>
        <div class="features_items example3 larger" style="background-color: white; border: white"><!--features_items-->
            <div class="row">
                <div class="larger container-fluid">
                    <div class="col-sm-5">
                        <h2 class="title text-align-left"style="color: #1E7145"> Others </h2>
                    </div>
                    <div class="col-sm-4 pull-right">
                        <a href="{{URL::to('/product_by_category/'.'6')}}" class="btn btn-primary example4 pull-right" style=" margin: 0 15px;text-transform: uppercase;background-color: #1E7145"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $otherss = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',6)
                ->where('tb1_products.publication_status',1)
                ->simplePaginate(4);
            //    foreach ($all_published_product as $v_published_product)
            foreach ($otherss as $others){?>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($others->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$others->product_name}}</b></h7>
                            <br>
                            <h7>{{$others->type}}</h7>

                            <p>{{$others->size}} {{$others->quantity}} </p>
                            <p style="color: black"><b>{{$others->product_price}}</b></p>
                            <script> var id = '<?php echo $others->product_id; ?>'
                                var name = '<?php echo $others->product_name; ?>'
                                var price = '<?php echo $others->product_price; ?>'
                                var attributes = '<?php echo $others->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}

                                <button type="button" name="btn" value="{{$others->product_id}}"
                                        class="btn btn-success btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>


                        </div>

                    </div>
                    <div class="choose">
                        <p></p>
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$others->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->
        <div class="features_items example3 smalled" style="background-color: white"><!--features_items-->
            <div class="row">
                <div class="container">
                    <div class="col-sm-8">
                        <h2 class="title text-align-left "><span style="color: #1E7145">Others</span>  </h2>
                    </div>
                    <div class="col-sm-4">
                        <a href="{{URL::to('/product_by_category/'.'6')}}" class="btn btn-primary example4 pull-right" style="margin-top: -50px;background-color: #1E7145; text-transform: uppercase;margin-bottom: 30px;"> View All </a>
                    </div>
                </div>
            </div>
            <?php
            $otherss = DB::table('tb1_products')
                ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
                -> select('tb1_products.*','tb1_manufacture.manufacture_name')
                ->where('tb1_products.category_id',6)
                ->where('tb1_products.publication_status',1)
                ->simplePaginate(2);
            //    foreach ($all_published_product as $v_published_product)
            foreach ($otherss as $others){?>
            <div class="col-xs-6">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($others->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$others->product_name}}</b></h7>
                            <br>
                            <h7>{{$others->type}}</h7>

                            <p>{{$others->size}} {{$others->quantity}} </p>
                            <p style="color: black"><b>{{$others->product_price}} </b></p>
                            <script> var id = '<?php echo $others->product_id; ?>'
                                var name = '<?php echo $others->product_name; ?>'
                                var price = '<?php echo $others->product_price; ?>'
                                var attributes = '<?php echo $others->product_image; ?>'
                            </script>
                            {{--                    <a  onclick="addCart(id,name,price,attributes)"--}}
                            {{--                       class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}

                                <button type="button" name="btn" value="{{$others->product_id}}"
                                        class="btn btn-success btn-fe fault cart center-block">
                                    <i class="fa fa-shopping-cart"></i> Add to cart
                                </button>


                        </div>

                    </div>
                    <div class="choose">
                        <p></p>
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$others->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
            </div>
            <?php }?>
        </div><!--features_items-->

    </section>
    <br>
    <br>
@endsection

