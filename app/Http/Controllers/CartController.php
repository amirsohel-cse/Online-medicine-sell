<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Supposrt\Fascades\UploadFile;
use Illuminate\Support\Str;
use Darryldecode\Cart\Cart;
use Session;
session_start();

class CartController extends Controller
{
//    public function add_to_cart(Request $request)
//    {
//        $qty = $request->qty;
//        $product_id= $request->product_id;
//        $product_info= DB::table('tb1_products')
//            ->where('product_id',$product_id)
//            ->first();
//        $data['quantity'] = $qty;
//        $data['id']= $product_info->product_id;
//        $data['name']= $product_info->product_name;
//        $data['price']= $product_info->product_price;
//        $data['attributes']['image']= $product_info->product_image;
//        \Cart::add( $data);
//        return Redirect::to('/show_cart');
//
//    }

    public function add_to_cart_home(Request $request)
    {
        if($request->has('id'))
        $qty = 1;
        echo "$qty";
        $product_id= $request->id;
        $product_info= DB::table('tb1_products')
            ->where('product_id',$product_id)
            ->first();
        $data['quantity'] = $qty;
        $data['id']= $product_info->product_id;
        $data['name']= $product_info->product_name;
        $data['price']= $product_info->product_price;
        $data['attributes']['image']= $product_info->product_image;
        \Cart::add( $data);
//        return Redirect::to('/show_cart');
        $cartCollection = \Cart::getContent();
        $count = $cartCollection->count();
//        Session::put('count',$count );
        return  json_encode($count);

    }
//    public function add_to_cart_home($id)
//    {
//
//        $product_id= $id;
//        $product_info= DB::table('tb1_products')
//            ->where('product_id',$product_id)
//            ->first();
//        $data['quantity'] = 1;
//        $data['id']= $product_info->product_id;
//        $data['name']= $product_info->product_name;
//        $data['price']= $product_info->product_price;
//        $data['attributes']['image']= $product_info->product_image;
//        \Cart::add( $data);
//
//            $message='Item added succesfully';
//
//        return Redirect::to('/');
//
//    }
    public function show_cart()
    {
        $all_published_category= DB::table('tb1_category')
                               ->where('publication_status',1)
                                ->get();
        $manege_published_category= view('pages.add_to_cart')
                              ->with('all_published_category',$all_published_category);
        return view('layout')
                ->with('pages.add_to_cart',$manege_published_category);
    }
    public function delete_to_cart($id)
    {
        \Cart::remove($id);
        return Redirect::to('/show_cart');

    }
    public function update_cart($id, Request $request)
    {
        $quantity = $request->quantity;
        \Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $quantity,
        )));
        return Redirect::to('/show_cart');
    }















}
