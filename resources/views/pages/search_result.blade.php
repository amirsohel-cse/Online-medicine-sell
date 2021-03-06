@extends('layout')
@section('content')
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
                            document.getElementById('pimage').src='/'+ data.product_image;
                            document.getElementById('mprice').innerHTML=data.product_price;
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

    <h2 class="title text-center">Search Result</h2>

        @foreach ($all_product_info as $v_product_by_category)
            <div class="col-sm-3 " >
                <div class="product-image-wrapper"style="background-color: white">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{URL:: to($v_product_by_category->product_image)}}" alt="" style="height: 150px"/>
                            <h7 style="color: #1E7145"><b>{{$v_product_by_category->product_name}}</b></h7>
                            <br>
                            <h7>{{$v_product_by_category->type}}</h7>
                            @if($v_product_by_category->dose)
                                <p>({{$v_product_by_category->dose}})</p>
                            @else
                                <p>({{$v_product_by_category->size}} {{$v_product_by_category->quantity}} )</p>
                            @endif
                            <p style="color: black"><b>{{$v_product_by_category->product_price}} </b></p>


                            <button type="button" name="btn" value="{{$v_product_by_category->product_id}}"
                                    class="btn btn-success btn-fe fault cart center-block">
                                <i class="fa fa-shopping-cart"></i> Add to cart
                            </button>

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
                        <button data-toggle="modal" data-target="#productModal" type="button" name="view" value="{{$v_product_by_category->product_id}}"
                                class="btn btn-block btn-default ">
                            <i class="fa fa-eye"></i> View Details
                        </button>
                    </div>
                </div>
                <br>
                <br>
            </div>
@endforeach
    </div>


    <div class="row align-justify center-block" style="background-color: white; text-align: center" >


        <h4><b>Don't worry! There are other ways to order</b></h4>
        <h4>
            Send us a <a href="http://m.me/medizonebd" class="visible-xs">Facebook Message</a>
            <a href="https://www.facebook.com/medizonebd/" class="hidden-xs">Facebook Message</a>
        </h4>
        <h4>
            Or send us an <b>email</b> at <a href="mailto:order@medizonebd.com?Subject=Order">order@medizonebd.com</a>
        </h4>
        <h4>
            Or feel free to call us at <b> <a href="tel:01300899199"> 01300899199 </a></b>
        </h4>
    </div>
            <br>
            <br>

 <!--features_items-->
@endsection
