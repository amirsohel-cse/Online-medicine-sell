@extends('admin_layout')
@section('admin_content')

    <div class="row-fluid sortable">
        <div class="box span6">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Customer Details</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Customer Mobile</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($order_by_id as $v_order)
                            @endforeach
                        <td>{{$v_order->customer_name}}</td>
                        <td class="center">{{$v_order -> customer_mobile_number}}</td>


                    </tr>
                    </tbody>
                </table>
                <div class="pagination pagination-centered">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/span-->

        <div class="box span6">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shipping Details</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Email</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($order_by_id as $v_order)
                            @endforeach
                        <td>{{$v_order -> shipping_name}}</td>
                        <td class="center">{{$v_order -> shipping_mobile_phone_1}} <br> {{$v_order -> shipping_mobile_phone_2}} </td>
                        <td class="center">{{$v_order -> shipping_address}}</td>
                        <td>{{$v_order -> shipping_email}}</td>
                    </tr>

                    </tbody>
                </table>
                <div class="pagination pagination-centered">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/span-->
    </div><!--/row-->

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon align-justify"></i><span class="break"></span>Order Details</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Product price</th>
                        <th>Product Sales Quantity</th>
                        <th>Product Sub total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($order_by_id as $v_order)

                    <tr>
                        <td>{{$v_order -> product_id}}</td>
                        <td>{{$v_order -> product_name}}</td>
                        <td class="center">{{$v_order -> product_price}}</td>
                        <td class="center">{{$v_order -> product_sales_quantity}}</td>
                        <td class="center">{{$v_order -> product_price * $v_order -> product_sales_quantity }}</td>
                        <p> </p>

                    </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                    <tr>
                        <td colspan="4"><strong>Total Price with Shipping: </strong></td>
                        <td><mark><strong>{{$v_order -> order_total +60 }}  -Tk </strong> </mark></td>
                    </tr>

                    </tfoot>
                </table>
                <div class="pagination pagination-centered">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div><!--/span-->
    </div><!--/row-->





    @endsection
