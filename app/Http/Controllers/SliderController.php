<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Session;
session_start();
class SliderController extends Controller
{
    public function index()
    {
        return view('admin.add_slider');
    }
    public function save_slider(Request $request)
    {
        $data['publication_status']=$request->publication_status;
        $image = $request->file('slider_image');
        if($image){
            $image_name= Str::random(40);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.'.'.$ext;
            $upload_path = 'slider_image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                $data['slider_image']= $image_url;

                DB::table('tb1_slider')->insert($data);
                Session::put('message','slider added successfully !!' );
                return Redirect::to('/add_slider');
            }

        }
        $data['slider_image']= ' ';

        DB::table('tb1_slider')->insert($data);
        Session::put('message','slider added successfully without image!!' );
        return Redirect::to('/add_slider');
    }

    public function all_slider()
    {

        $all_slider = DB::table('tb1_slider')->get();
        $manage_slider = view('admin.all_slider')
            -> with('all_slider',$all_slider);
        return view('admin_layout')->with('admin.all_slider',$manage_slider);
    }
    public function unactive_slider($slider_id)
    {
        DB::table('tb1_slider')->where('slider_id',$slider_id)->update(['publication_status' => 0]);
        Session::put('message','slider Unactive successfully !!' );
        return Redirect::to('/all_slider');
    }

    public function active_slider($slider_id)
    {
        DB::table('tb1_slider')->where('slider_id',$slider_id)->update(['publication_status' => 1]);
        Session::put('message','slider Active successfully !!' );
        return Redirect::to('/all_slider');
    }
    public function delete_slider($slider_id)
    {
        DB::table('tb1_slider')-> where('slider_id',$slider_id)->delete();
        Session::put('message','slider Deleted succesfully !! ');
        return Redirect::to('/all_slider');
    }
}
