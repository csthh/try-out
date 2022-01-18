<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function billing()
    {
        return view('pembayaran');
    }
    public function profile()
    {
        return view('profile');
    }
    public function menu()
    {
        return view('menu');
    }
}
