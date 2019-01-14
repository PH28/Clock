<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Order;
use App\OrderDetail;
use Cart;
use Mail;
use DB;

class OrderController extends Controller
{

// hiển thị đơn hàng
    public function index()
    {
         $orders = Order::orderBy('id', 'desc')->paginate(4);
         // $orders = Order::all();
         return view('backend.cart.list',compact('orders'));
    }

 // chi tiết đơn hàng
    public function show($id)
    {
         $order_detail = OrderDetail::with('order')->where('order_id',$id)->get();
         return view('backend.cart.show',compact('order_detail'));
    }

// cập nhật trạng thái đơn hàng
    public function update(Request $request,$id)
    {
         $orders = Order::find($id);
         $data   = $request->all();
         $orders->update($data);
         return redirect()->route('backend.cart.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã xác nhận đơn hàng thành công !']);
    }

// xóa đơn hàng
    public function destroy($id)
    {
         $order        = Order::find($id);
         $order_detail = OrderDetail::where('order_id',$order->id);
      if ($order->status !=3){
           return redirect()->back()->with(['flash_level1'=>'result_msg','error_massage'=>'Bạn không thể xóa đơn hàng này !']);
      }else{
         $order->delete();
         $order_detail->delete();
         return redirect()->route('backend.cart.index')->with(['flash_level'=>'result_msg','flash_massage'=>' Đã xóa !']);
      }
    }
    public function search(Request $request)
    {
      $search = $request->get('search');
           if($search != ''){
               $orders = Order::where('id', 'like', '%'.$search.'%')
                       ->orWhere('name', 'like', '%'.$search.'%')
                       ->orWhere('email', 'like', '%'.$search.'%')
                       ->orWhere('phone', 'like', '%'.$search.'%')
                       ->orWhere('address', 'like', '%'.$search.'%')
                       ->orWhere('total_price', 'like', '%'.$search.'%')
                       ->orderBy('id', 'desc')->paginate(4);
           }
           else{
               $orders = Order::orderBy('id', 'desc')->paginate(4);
           }
       return view('backend.cart.list',compact('orders'));
    }


}
