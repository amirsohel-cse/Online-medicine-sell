@extends('admin_layout')
@section('admin_content')


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.html">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Order Details</a></li>
    </ul>

    <p class="alert-success" >
        <?php
        $message = Session::get('message');

        if($message)
        {
            echo $message;
            Session::put('message',NULL);
        }
        ?>
    </p>

    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>

            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Customer Name</th>
                        <th>Customer Mobile</th>
                        <th>Order Total</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_order_info as $v_order)

                        <tr>
                            <td>{{$v_order->order_id}}</td>
                            <td class="center">{{$v_order->customer_name}}</td>
                            <td class="center">{{$v_order->customer_mobile_number}}</td>
                            <td class="center">{{$v_order->order_total}}</td>
                            <td class="center">{{$v_order->order_status}}</td>
{{--                            <td class="center">--}}
{{--                                @if($v_order->publication_status==1)--}}
{{--                                    <span class="label label-success">Active</span>--}}
{{--                                @else--}}
{{--                                    <span class="label label-danger">Unactive</span>--}}
{{--                                @endif--}}
{{--                            </td>--}}
                            <td class="center">

                                    <a class="btn btn-danger" href="{{URL::to('/confirm/'.$v_order->order_id)}}">
                                        <i class="halflings-icon white thumbs-up"></i>
                                    </a>

                                    <a class="btn btn-success" href="{{URL::to('/delivered/'.$v_order->order_id)}}">
                                        <i class="halflings-icon white ok-sign"></i>
                                    </a>

                                <a class="btn btn-info" href="{{URL::to('/edit_order/'.$v_order->order_id)}}">
                                    <i class="halflings-icon white edit"></i>
                                </a>
                                 <a class="btn btn-info" href="{{URL::to('/view_order/'.$v_order->order_id)}}">
                                        <i class="halflings-icon white eye-open"></i>
                                 </a>
                                <a class="btn btn-danger" href="{{URL::to('/delete_order/'.$v_order->order_id)}}" id="delete">
                                    <i class="halflings-icon white trash"></i>
                                </a>

                            </td>
                        </tr>


                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->



@endsection
