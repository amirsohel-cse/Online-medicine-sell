<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;
session_start();
class HomeController extends Controller
{
    public function index()
    {
           $all_published_product = DB::table('tb1_products')
            ->join('tb1_category','tb1_products.category_id','=','tb1_category.category_id')
            ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
            -> select('tb1_products.*','tb1_category.category_name','tb1_manufacture.manufacture_name')
            ->where('tb1_products.publication_status',1)
            ->get();

        $manage_published_product = view('pages.home_content')
            -> with('all_published_product',$all_published_product);
        return view('layout')->with('pages.home_content',$manage_published_product);
        //return view('pages.home_content');
    }
    public function show_product_by_category($category_id)
    {
        $product_by_category = DB::table('tb1_products')
            ->join('tb1_category','tb1_products.category_id','=','tb1_category.category_id')
            -> select('tb1_products.*','tb1_category.category_name')
            ->where('tb1_category.category_id',$category_id)
            ->where('tb1_products.publication_status',1)
            ->get();

        $manage_product_by_category = view('pages.product_by_category')
            -> with('product_by_category',$product_by_category);
        return view('layout')->with('pages.product_by_category',$manage_product_by_category);

    }

    public function show_product_by_manufacture($manufacture_id)
    {
        $product_by_manufacture = DB::table('tb1_products')
            ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
            -> select('tb1_products.*','tb1_manufacture.manufacture_name')
            ->where('tb1_manufacture.manufacture_id',$manufacture_id)
            ->where('tb1_products.publication_status',1)
            ->limit(18)
            ->get();

        $manage_product_by_manufacture = view('pages.product_by_manufacture')
            -> with('product_by_manufacture',$product_by_manufacture);
        return view('layout')->with('pages.product_by_manufacture',$manage_product_by_manufacture);

    }
    public function product_details_by_id($product_id)
    {
        $product_by_details = DB::table('tb1_products')
            ->join('tb1_category','tb1_products.category_id','=','tb1_category.category_id')
            ->join('tb1_manufacture','tb1_products.manufacture_id','=','tb1_manufacture.manufacture_id')
            -> select('tb1_products.*','tb1_category.category_name','tb1_manufacture.manufacture_name')
            ->where('tb1_products.product_id',$product_id)
            ->where('tb1_products.publication_status',1)
            ->first();

        $manage_product_by_details = view('pages.product_details')
            -> with('product_by_details',$product_by_details);
        return view('layout')->with('pages.product_details',$manage_product_by_details);
    }

    public function search(Request $request)
    {
        $data = $request->product;

        $all_product_info = DB::table('tb1_products')
            ->where('product_name','LIKE','%'.$data.'%')
            ->get();
        $manage_product = view('pages.search_result')
            -> with('all_product_info',$all_product_info);
        return view('layout')->with('pages.search_result',$manage_product);
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function upload_prescription()
    {
        return view('pages.upload_prescription');
    }
    public function save_prescription(Request $request)
    {

        $data = array();
        $data['prescription_name']=$request->name;
        $data['prescription_mobile']=$request->mobile;
        $data['prescription_email']=$request->email;
        $data['prescription_query']=$request->p_query;
        $image = $request->file('image');
        if($image){
            $image_name= Str::random(40);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'prescription_image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $data['prescription_image']= $image_url;

                DB::table('tb1_prescription')->insert($data);
                Session::put('message','Prescription added successfully !!' );
                return Redirect::to('/upload_prescription');
            }

        }
        $data['prescription_image']= ' ';

        DB::table('tb1_prescription')->insert($data);
        Session::put('message','Prescription added successfully without image!!' );
        return Redirect::to('/upload_prescription');

    }
   public function profile()
   {
       return view('pages.profile');
   }
   public function profile_update(Request $request, $id)
   {
       $update_customer = DB::table('tb1_customer')->where('customer_id',$id)->update(['customer_name'=> $request->fullname ,
           'customer_mobile_number'=> $request->mobile , 'customer_email'=>$request->email , 'customer_password' =>$request->password ]);

       Session::put('messege','Updated successfully !!' );
       return Redirect::to('profile');


   }
   public function my_orders(){
        $customer_id =Session::get('customer_id');
        $order_details = DB::table('tb1_order_details')
            ->join('tb1_order','tb1_order_details.order_id','=','tb1_order.order_id')
            ->join('tb1_products', 'tb1_products.product_id','=','tb1_order_details.product_id')
            ->select('tb1_order.*','tb1_order_details.*','tb1_products.*')
            ->where('tb1_order.customer_id',$customer_id)
            ->get();
       $manage_order_details = view('pages.my_orders')
           -> with('order_details',$order_details);
       return view('layout')->with('pages.my_orders',$manage_order_details);

   }
   public function about_us(){
        return view('pages.about_us');
   }

    public function terms(){
        return view('pages.terms');
    }
    public function partners(){
        return view('pages.partners');
    }
    public function career(){
        return view('pages.career');
    }
    public function message_order(){
        return view('pages.messege_order');
    }




}
