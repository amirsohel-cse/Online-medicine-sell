<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class OrderController extends Controller
{
    public function manage_order()
    {
//        $this->AdminAuthCheck();
        $all_order_info = DB::table('tb1_order')
            ->join('tb1_customer','tb1_order.customer_id','=','tb1_customer.customer_id')
            -> select('tb1_order.*','tb1_customer.customer_name','tb1_customer.customer_mobile_number')
            ->get();
        $manage_order = view('admin.manage_order')
            -> with('all_order_info',$all_order_info);
        return view('admin_layout')->with('admin.manage_order',$manage_order);
    }
    public function manage_prescription() {
        $prescriptions = DB::table('tb1_prescription')->get();

        return view('admin.manage_prescription')->with('prescriptions',$prescriptions);
    }
    public function view_order($order_id)
    {
        $order_by_id = DB::table('tb1_order')
            ->join('tb1_customer','tb1_order.customer_id','=','tb1_customer.customer_id')
            ->join('tb1_order_details','tb1_order.order_id','=','tb1_order_details.order_id')
            ->join('tb1_shipping','tb1_order.shipping_id','=','tb1_shipping.shipping_id')
            ->where('tb1_order.order_id','=' ,$order_id)
            -> select('tb1_order.*','tb1_order_details.*','tb1_shipping.*','tb1_customer.*')
            ->get();

        $view_order = view('admin.view_order')
            -> with('order_by_id',$order_by_id);
        return view('admin_layout')->with('admin.view_order',$view_order);
    }


    public function confirm($order_id)
    {
        $co="Confirmed";
        $order_confirm = DB::table('tb1_order')
            ->where('order_id','=',$order_id)
           -> update(['order_status' => "Confirmed"]);

          return redirect()->back();


    }
    public function delivered($order_id)
    {
        $co="Confirmed";
        $order_confirm = DB::table('tb1_order')
            ->where('order_id','=',$order_id)
            -> update(['order_status' => "Delivered"]);

        return redirect()->back();


    }




}
