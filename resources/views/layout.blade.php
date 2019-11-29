<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MediZoneBD</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" type="image" href="favicon.ico" />
{{--    <link rel="shortcut icon" href="images/ico/favicon.ico">--}}
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{URL::to('frontend/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{URL:: to('frontend/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{URL:: to('frontend/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{URL:: to('frontend/images/ico/apple-touch-icon-57-precomposed.png')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head><!--/head-->
<style type="text/css">
    .paymentWrap {
        padding: 50px;
    }

    .paymentWrap .paymentBtnGroup {
        max-width: 800px;
        margin: auto;
    }

    .paymentWrap .paymentBtnGroup .paymentMethod {
        padding: 40px;
        box-shadow: none;
        position: relative;
    }

    .paymentWrap .paymentBtnGroup .paymentMethod.active {
        outline: none !important;
    }

    .paymentWrap .paymentBtnGroup .paymentMethod.active .method {
        border-color: #4cd264;
        outline: none !important;
        box-shadow: 0px 3px 22px 0px #7b7b7b;
    }

    .paymentWrap .paymentBtnGroup .paymentMethod .method {
        position: absolute;
        right: 3px;
        top: 3px;
        bottom: 3px;
        left: 3px;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        border: 2px solid transparent;
        transition: all 0.5s;
    }

    .paymentWrap .paymentBtnGroup .paymentMethod .method.visa {
        background-image: url("data:image/png;base64,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");
    }

    .paymentWrap .paymentBtnGroup .paymentMethod .method.master-card {
        background-image: url("data:image/png;base64,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");
    }

    .paymentWrap .paymentBtnGroup .paymentMethod .method.amex {
        background-image: url("http://www.paymentscardsandmobile.com/wp-content/uploads/2015/08/Amex-icon.jpg");
    }

    .paymentWrap .paymentBtnGroup .paymentMethod .method.vishwa {
        background-image: url("http://i.imgur.com/VkiM7PL.jpg");
    }

    .paymentWrap .paymentBtnGroup .paymentMethod .method.ez-cash {
        background-image: url("http://www.busbooking.lk/img/carousel/BusBooking.lk_ezCash_offer.png");
    }


    .paymentWrap .paymentBtnGroup .paymentMethod .method:hover {
        border-color: #4cd264;
        outline: none !important;
    }
</style>

<body>
{{--<header id="header"><!--header-->--}}
{{--    <div class="header_top"><!--header_top-->--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-sm-6">--}}
{{--                    <div class="contactinfo">--}}
{{--                        <ul class="nav nav-pills">--}}
{{--                            <li><a href="#"><i class="fa fa-phone"></i> +8801839351960</a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-envelope"></i> support@medizonebd.com</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-6">--}}
{{--                    <div class="social-icons pull-right">--}}
{{--                        <ul class="nav navbar-nav">--}}
{{--                            <li><a href="www.facebook.com" target="_blank" ><i class="fa fa-facebook" ></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
{{--                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div><!--/header_top-->--}}

    <nav class="navbar-fixed-top" style="background-color: white;height: 100px;border: solid 1px;"><!--header-middle-->
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

        <div class=" " style="margin-left: 10%; margin-right:  10%;padding-top: 20px" >
                <div class="col-sm-2 col-lg-2 col-md-2 ">
                    <div class="logo" style="margin-top: -55px">
                        <a href='/' ><img src="{{URL:: to('frontend/images/home/logo.png')}}" alt="Logo" height="150px"></a>
                    </div>
                </div>
                <div class="col-sm-5 col-lg-5 col-md-5">
                    <div class="center">
                        <form action="{{URL:: to('/search')}}" method="post">
                            {{csrf_field()}}
                            <div class="search_box" >
                                <input type="text" name="product" placeholder="       Search Product . ."/>
                                <button type="submit" style="margin-left: -45px; background-color: white;border: white">
                                    <span class="fa fa-search "></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                        <div class="col-sm-2 col-lg-2 col-md-2" style="margin-top: -10px">
                            <div class="">
                            <a href="{{URL::to('/upload_prescription')}}" >
                                <button class="btn btn-primary example4 btn-success" style="height: 40px;">
                                    <b>Upload Prescription</b>
                                </button>
                            </a>
                        </div>
                        </div>

                        <div class="col-sm-1 col-lg-1 col-md-1 ">
                            <div >
                            <a href="{{URL::to('/show_cart')}}" class=""><img src="{{URL:: to('frontend/images/cart/cart.png')}}" style="height: 40px;">
                                <span style="margin-left: -12px;">
                                <?php $cartCollection = Cart::getContent();
                                $count = $cartCollection->count();
                                echo "<b style='font-size:large'>".$count."</b>" ?>
                                </span> </a>
                        </div>
                        </div>
                        <div class="col-sm-2 col-lg-2 col-md-2" style="margin-top: -10px">
                            <div class="center">
                            <?php $customer_id=Session::get('customer_id');
                            $shipping_id= Session::get('shipping_id');
                            $customer_name = DB::table('tb1_customer')->select('customer_name')->where('customer_id',$customer_id)->first();

                            ?>
                            <?php if($customer_id != NULL)
                            {?>
                                <div class="dropdown">
                                    <button class="btn btn-primary example4 btn-success dropdown-toggle" type="button" data-toggle="dropdown" style="height: 40px">{{$customer_name->customer_name}}
                                        <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{URL::to('/profile')}}"><b>My Account</b></a></li>
                                        <li><a href="{{URL::to('/my_orders')}}"><b>My Orders</b></a></li>
                                        <li><a href="#"><b>My Wishlist</b></a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{URL:: to('/customer_logout')}}"> Sign Out</a></li>
                                    </ul>
                                </div>
                            <?php } else{ ?>

                            <a href="{{URL:: to('/login_check')}}" class="center">
                                <button class="btn btn-primary example4 btn-success" style="height: 40px"> <b>Sign in</b></button>
                            </a>

                            <?php } ?>
                        </div>
                    </div>
        </div>
        </div>
    </nav><!--/header-middle-->

    <div class="header-bottom" style="margin-top: 100px; background-color: wheat"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="{{URL::to('/')}}" class=""><b>Home</b></a></li>
                            <li class="dropdown"><a href="#"><b>Category</b><i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <?php
                                    $all_published_category=DB::table('tb1_category')->where('publication_status',1)->get();
                                    foreach ($all_published_category as $v_category){ ?>
                                         <li><a href="{{URL::to('/product_by_category/'.$v_category->category_id)}}">{{$v_category->category_name}}</a></li>
                                     <?php } ?>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><b>Brand</b><i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <?php
                                    $all_published_manufacture=DB::table('tb1_manufacture')->where('publication_status',1)->get();
                                    foreach ($all_published_manufacture as $v_manufacture){ ?>
                                    <li><a href="{{URL::to('/product_by_manufacture/'.$v_manufacture->manufacture_id)}}"> {{$v_manufacture->manufacture_name}}</a></li>
                                        <?php } ?>
                                </ul>
                            </li>
{{--                            <li><a href="404.html">404</a></li>--}}
                            <li><a href="/message_order"><b>Message Order</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
{{--</header><!--/header-->--}}

@yield('slider');


 <section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 padding-right">
                    @yield('content')
                </div>
        </div>
     </div>
    </div>
</section>

<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
{{--            <div class="row">--}}
{{--                <div class="col-sm-2">--}}
{{--                    <div class="companyinfo">--}}
{{--                        <h2><span>Medicine</span>-Zone</h2>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-7">--}}
{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="{{URL:: to('frontend/images/home/iframe1.png')}}" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>product demo</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="{{URL:: to('frontend/images/home/iframe2.png')}}" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="{{URL:: to('frontend/images/home/iframe3.png')}}" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-sm-3">--}}
{{--                        <div class="video-gallery text-center">--}}
{{--                            <a href="#">--}}
{{--                                <div class="iframe-img">--}}
{{--                                    <img src="{{URL:: to('frontend/images/home/iframe4.png')}}" alt="" />--}}
{{--                                </div>--}}
{{--                                <div class="overlay-icon">--}}
{{--                                    <i class="fa fa-play-circle-o"></i>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <p>Circle of Hands</p>--}}
{{--                            <h2>24 DEC 2014</h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm-3">--}}
{{--                    <div class="address">--}}
{{--                        <img src="{{URL:: to('frontend/images/home/map.png')}}" alt="" />--}}
{{--                        <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="contact-details single-widget">
                        <h2>Contact Information</h2>
                        <ul class="">
                            <!--<li><p><i class="fa fa-map-marker"></i> <strong>Address:</strong><span style="display: block; padding-left: 25px;"></span></p></li>-->
                            <li><p style="font-size: medium"><i class="fa fa-phone"></i><strong>Phone:</strong><br>01300899200 <br> 01300899199</p></li>
                            <li><p style="font-size: medium"><i class="fa fa-envelope-o"></i><strong> Email:</strong><br> <a href="mailto:info@epharma.com.bd" style="font-size: medium">info@medizonebd.com</a></p></li>
                            <li><p style="font-size: medium"><i class="fa fa-clock-o"></i> <strong> Delivery Days/Hours:</strong><br> Everyday / 09:00 AM - 09:00 PM</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="{{URL::to('/product_by_category/1')}}" style="font-size: medium">Medicine</a></li>
                            <li><a href="{{URL::to('/product_by_category/3')}}" style="font-size: medium">Baby Care</a></li>
                            <li><a href="{{URL::to('/product_by_category/5')}}" style="font-size: medium">Feminine Hygiene</a></li>
                            <li><a href="{{URL::to('/product_by_category/6')}}" style="font-size: medium">Health And Beauty</a></li>
                            <li><a href="{{URL::to('/product_by_category/2')}}" style="font-size: medium">Sexual Welbeing</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="single-widget">
                        <h2>About Us</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="/about_us"  style="font-size: medium">Company Information</a></li>
{{--                            <li><a href="/">How to order</a></li>--}}
                            <li><a href="/partners" style="font-size: medium">Partners</a></li>
                            <li><a href="/terms" style="font-size: medium">Terms and Conditions</a></li>
                            <li><a href="/career" style="font-size: medium">Careers</a></li>
                            <li><a href="/contact" style="font-size: medium">FAQ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="single-widget">
                        <h2>Social Networks</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="https://www.facebook.com/Medi-Zone-BD-103311614439996/" target="_blank" style="font-size: medium"><i class="fa fa-facebook "></i> Facebook </a></li>
                            <li><a href="#" target="_blank" style="font-size: medium"><i class=" fa fa-twitter" ></i>Twitter</a></li>
                            <li><a href="#" target="_blank" style="font-size: medium"><i class="fa fa-google-plus" ></i>Google Plus</a></li>
                            <li><a href="#" target="_blank" style="font-size: medium"><i class="fa fa-youtube"></i>Youtube</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2019 MediZoneBD Inc. All rights reserved.</p>
                <p class="pull-right">Developed by: <span><a target="_blank" href="http://www.amirsohel.me"><b>Amir Sohel</b></a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->

<script src="{{asset('frontend/js/jquery.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('frontend/js/price-range.js')}}"></script>
<script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
