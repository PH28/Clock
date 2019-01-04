<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use App\Order;
use App\Order_detail;
use Cart;

class CartController extends Controller
{

// thêm giỏ hàng
   public function addcart($id)
   {
    $product = Product::find($id);
     Cart::add([
       'id'      => $product->id,
       'name'    => $product->name,
       'qty'     => 1,
       'price'   => $product->price,
       'options' =>[
             'sale'  =>$product->sale,
             'image' =>$product->image,
                   ]
     ]);
     return redirect()->back();
   }

// show vào trong giỏ hàng
   public function showcart()
   {
     $data = Cart::content();
     $total = 0;
     $totalsale = 0;
     return view('frontend.pages.cart',compact('data','total','totalsale'));
   }

// cập nhật số lượng trong giỏ hàng
   public function updatecart(Request $request)
   {
     Cart::update($request->rowId,$request->qty);
     return redirect()->back();
   }

//  xóa sản phẩm trong giỏ hàng
    public function removecart($id)
    {
    	Cart::remove($id);
      return redirect()->back();
    }

//  hủy giỏ hàng
   public function destroycart()
   {
     Cart::destroy();
     return redirect()->route('showcart');
   }

// thanh toán sản phẩm trong giỏ hàng
    public function payment()
    {
      $data = Cart::content();
      $total = 0;
      $totalsale = 0;
      return view('frontend.pages.payment',compact('data','total','totalsale'));
    }

// thanh toán sản phẩm trong giỏ hàng
    public function postpayment(Request $request)
    {
      $data = $request->all();
      $order  = Order::create($data);
      $carts  = Cart::content();
    foreach($carts as $cart)
      {
      $order_detail             = new Order_detail;
      $order_detail->order_id   = $order->id;
      $order_detail->product_id = $cart->id;
      $order_detail->quantity   = $cart->qty;
      $order_detail->price      = $cart->price;
      $order_detail->save();
      }


      

      return redirect()->back();
    }


}
