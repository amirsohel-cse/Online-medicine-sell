<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin_login');
    }

    public function show_dashboard()
    {
        return view('admin.dashboard');
    }

    public function dashboard(Request $request)
    {
        $admin_email = $request -> admin_email;
        $admin_password = md5( $request -> admin_password);
        $result = DB::table('tb1_admin')
                         -> where('admin_email',$admin_email)
                         -> where('admin_password',$admin_password)
                         -> first();

                    if($result)
                    {
                        session::put('admin_name',$result->admin_name);
                        session::put('admin_id',$result->admin_id);
                        return Redirect::to('/dashboard');
                    }
                    else{
                        session::put('messege','Email or Password Invalid');
                        return Redirect::to('/admin');
                    }

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
