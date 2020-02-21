<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class CheckoutController extends Controller
{
    public function login_check()
    {
        return view('pages.login');
    }
    public function customer_registration(Request $request)
    {
        $data=array();
        $data['customer_name']=$request->customer_name;
        $data['customer_email']=$request->customer_email;
        $data['customer_password']=$request->customer_password;
        $data['customer_mobile_number']=$request->customer_mobile_number;

        $customer_id=DB::table('tb1_customer')
            ->insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);
        return Redirect::to('/');

    }
    public function checkout()
    {
//        $all_published_category= DB::table('tb1_category')
//            ->where('publication_status',1)
//            ->get();
//        $manege_published_category= view('pages.payment')
//            ->with('all_published_category',$all_published_category);
//        return view('layout')
//            ->with('pages.payment',$manege_published_category);

        return view('/pages.checkout');
    }
    public function save_shipping_details(Request $request)
    {
        $data=array();
        $data['shipping_name']=$request->shipping_name;
        $data['shipping_mobile_phone_1']=$request->shipping_mobile_phone_1;
        $data['shipping_mobile_phone_2']=$request->shipping_mobile_phone_2;
        $data['shipping_email']=$request-> shipping_email;
        $data['shipping_address']=$request-> shipping_address;
        $data['shipping_area']=$request->shipping_area;

        $shipping_id =DB::table('tb1_shipping')
            ->insertGetId($data);
        Session::put('shipping_id',$shipping_id);

        return Redirect::to('/payment');
    }
    public function customer_login(Request $request)
    {
        $customer_mobile_number = $request->customer_mobile_number;
        $customer_password = $request->customer_password;
        $result = DB::table('tb1_customer')
            ->where('customer_mobile_number',$customer_mobile_number)
            ->where('customer_password',$customer_password)
            ->first();
        if($result){
            Session::put('customer_id',$result-> customer_id);
           return Redirect::to('/');

        }
        else {
            return Redirect::to('/login_check');
        }

    }

    public function payment()
    {

        return view('pages.payment');

    }
    public function place_order(Request $request)
    {
        $payment_method = $request-> payment_method;
        $pdata=array();
        $pdata['payment_method']=$payment_method;
        $pdata['payment_status']="pending";
        $payment_id =  DB::table('tb1_payment')
            ->insertGetId($pdata);

        $odata =array();
        $odata['customer_id']= Session::get('customer_id');
        $odata['shipping_id']= Session::get('shipping_id');
        $odata['payment_id']=  $payment_id;
        $odata['order_total']=\Cart::getTotal();
        $odata['order_status']= 'pending';
        $order_id = DB::table('tb1_order')
            -> insertGetId($odata);

        $contents = \Cart::getContent();
        $oddata =array();
        foreach ($contents as $v_content)
        {
            $oddata['order_id'] =$order_id;
            $oddata['product_id'] =$v_content -> id;
            $oddata['product_name'] =$v_content -> name;
            $oddata['product_price'] =$v_content -> price;
            $oddata['product_sales_quantity'] =$v_content -> quantity;

            DB::table('tb1_order_details') ->insert($oddata);

        }
        if($payment_method == 'handcash')
        {
            \Cart::clear();
            return view('pages.handcash')->with('order_id',$order_id);
        }
        else
        {
            echo "bkash";
        }
    }
    public function customer_logout()
    {
        Session::flush();
        return Redirect::to('/');
    }
}
