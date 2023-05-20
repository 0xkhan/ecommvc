<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Classes\Session;

class DashboardController extends BaseController
{

    public function show()
    {
        Session::add('admin', 'Welcome, Admin whatsup');
        Session::remove('admin');

        if (Session::has('admin')) {
            $msg = Session::get('admin');
        } else {
            $msg = 'Not defined!';
        }

        return view('admin/dashboard', ['admin' => $msg]);
    }

    public function get()
    {
        \App\Classes\Request::refresh();
        $request = \App\Classes\Request::old('post', 'product');
        var_dump($request);
        // if (\App\Classes\Request::has('post')) {
        //     $request = \App\Classes\Request::get('post');
        //     var_dump($request->product);
        // } else {
        //     var_dump('posing does not exist');
        // }
    }

}
