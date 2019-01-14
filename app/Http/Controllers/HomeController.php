<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Order;
use App\User;
use App\Comment;
use App\OrderDetail;
use Cart;
use Mail;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders   = Order::count();
        $users    = User::count();
        $product  = Product::count();
        $comments = Comment::count();
        $datas    = Order::orderBy('id','DESC')->take(4)->get();
        $products = Product::orderBy('id','DESC')->take(4)->get();
        return view('backend.home',compact('orders','users','product','comments','datas','products'));
    }
}
