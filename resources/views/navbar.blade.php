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
                    <a href='/' ><img src="" alt="Logo" height="150px"></a>
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
