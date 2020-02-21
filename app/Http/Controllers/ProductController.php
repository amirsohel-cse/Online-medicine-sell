<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Supposrt\Fascades\UploadFile;
use Illuminate\Support\Str;
use Session;
session_start();
class ProductController extends Controller
{
    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin.add_product');
    }
    public function save_product(Request $request)
    {
        $this->AdminAuthCheck();
        $data = array();
        $data['product_name']=$request->product_name;
        $data['category_id']=$request->category_id;
        $data['generic']=$request->generic;
        $data['type']=$request->type;
        $data['product_price']=$request->product_price;
        $data['size']=$request->product_size;
        $data['dose']=$request->dose;
        $data['quantity']=$request->quantity;
        $data['pieces_per_pata']=$request->pieces_per_pata;


        $data['publication_status']=$request->publication_status;

        $image = $request->file('product_image');
        if($image){
            $image_name= Str::random(40);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'product_image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $data['product_image']= $image_url;

                DB::table('tb1_products')->insert($data);
                Session::put('message','Product added successfully !!' );
                return Redirect::to('/add_product');
            }

        }
        $data['product_image']= ' ';

        DB::table('tb1_products')->insert($data);
        Session::put('message','Product added successfully without image!!' );
        return Redirect::to('/add_product');

    }
    public function all_product()
    {
        $this->AdminAuthCheck();
        $all_product_info = DB::table('tb1_products')
            ->join('tb1_category','tb1_products.category_id','=','tb1_category.category_id')
            -> select('tb1_products.*','tb1_category.category_name')
            ->get();
        $manage_product = view('admin.all_product')
            -> with('all_product_info',$all_product_info);
        return view('admin_layout')->with('admin.all_product',$manage_product);
    }
    public function unactive_product($product_id)
    {
        DB::table('tb1_products')->where('product_id',$product_id)->update(['publication_status' => 0]);
        Session::put('message','product Unactive successfully !!' );
        return Redirect::to('all_product');
    }

    public function active_product($product_id)
    {
        DB::table('tb1_products')->where('product_id',$product_id)->update(['publication_status' => 1]);
        Session::put('message','Category Active successfully !!' );
        return Redirect::to('all_product');
    }

    public function edit_product($product_id)
    {
        $this->AdminAuthCheck();
        $product_info= DB::table('tb1_products')->where('product_id',$product_id)->first();
        $product_info = view('admin.edit_product')
            -> with('product_info',$product_info);
        return view('admin_layout')->with('admin.edit_product',$product_info);

        //return view('admin.edit_category');
    }
    public function update_product($product_id,Request $request)
    {
        $this->AdminAuthCheck();
        $data = array();
        $data['product_name']=$request->product_name;
        $data['category_id']=$request->category_id;
        $data['generic']=$request->generic;
        $data['type']=$request->type;
        $data['product_price']=$request->product_price;
        $data['size']=$request->product_size;
        $data['dose']=$request->dose;
        $data['quantity']=$request->quantity;
        $data['pieces_per_pata']=$request->pieces_per_pata;
        $data['publication_status']=$request->publication_status;


        if($request->image_url != null)
        $data['product_image']= $request->image_url;
        else{

        $image = $request->file('product_image');
        if($image){
            $image_name= Str::random(40);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'product_image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $data['product_image']= $image_url;

                DB::table('tb1_products')->where('product_id','=',$product_id)->update($data);
                Session::put('message','Product Updated successfully !!' );
                return Redirect::to('/all_product');
            }

        }
        }


        DB::table('tb1_products')->where('product_id','=',$product_id)->update($data);
        Session::put('message','Product Updated successfully without image!!' );
        return Redirect::to('/all_product');
    }
    public function delete_product($category_id)
    {
        DB::table('tb1_products')-> where('product_id',$category_id)->delete();
        Session::put('message','product Deleted succesfully !! ');
        return Redirect::to('/all_product');
    }

    public function AdminAuthCheck()
    {
        $admin_id=Session::get('admin_id');
        if($admin_id){
            return;
        }
        else{
            return Redirect::to('/admin')->send();
        }

    }

}
