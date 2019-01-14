<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PaymentRequest;
use App\Product;
use App\Order;
use App\OrderDetail;
use Cart;
use Mail;
use DB;

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
     $cart  = Cart::count();
     $data  = Cart::content();
     $total = 0;
     $totalsale = 0;
     return view('frontend.pages.cart',compact('data','total','totalsale','cart'));
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
    public function postpayment(PaymentRequest $request)
    {
      $data = $request->all();
      $order  = Order::create($data);
      $carts  = Cart::content();
    foreach($carts as $cart)
      {
      $order_detail             = new OrderDetail;
      $order_detail->order_id   = $order->id;
      $order_detail->product_id = $cart->id;
      $order_detail->quantity   = $cart->qty;
      $order_detail->price      = $cart->price;
      $order_detail->save();
      }
      $data = [
        'name' => $request->name,
        'email'=> $request->email,
        'phone' => $request->phone,
        'address' => $request->address,
        'total_price' => $request->total_price,
        'quantity' => $cart->qty
      ];
      Mail::send('email.ordercart',$data,function($msg) use($data){
        $msg->from('khanhhokhanhho@gmail.com',"BooksOnline");
        $msg->to($data['email'])->subject('Cảm ơn bạn đã đặt hàng!Chúng tôi sẽ liên hệ với bạn thời gian sớm nhất');
      });
      	Cart::destroy();
        echo "<script>alert('Đơn hàng của bạn đã được gửi')
        window.location ='".url('/')."';
        </script>";
    }

}
