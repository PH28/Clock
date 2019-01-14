<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Requests\MailRequest;
use App\Category;
use App\Product;
use App\Comment;
use App\User;
use App\Order;
use App\OrderDetail;
use DB;
use Mail;

class PageController extends Controller
{

// vào trang list các sản phẩm
    public function index()
    {
       $product_show = Product::all()->take(8);
       $product_newshow = Product::all()->where('sale','>',0)->take(8);
       return view('frontend.index',compact('product_show','product_newshow'));
    }

// vào trang chi tiết sản phẩm
    public function productdetail($id)
    {
      $productdetail = Product::find($id);
      $comments = Comment::all()->where('product_id',$productdetail->id)->take(5);  // lấy ra 5 đánh giá mới nhất
      return view('frontend.pages.productdetail',compact('productdetail','comments'));
    }

// vào trang xem tất cả sản phẩm và danh mục
    public function product()
    {
      $category_show = DB::table('category')->select('id','name','parent_id')->where('parent_id',0)->orderBy('id','DESC')->get();
      $products  = Product::paginate(8);
      return view('frontend.pages.category',compact('products','category_show'));
    }

    public function listProductByCateId($id)
    {
      $category_show = DB::table('category')->select('id','name','parent_id')->where('parent_id',0)->orderBy('id','DESC')->get();
      $products = Product::all()->where('cate_id',$id);
      return view('frontend.pages.listProductCateId',compact('products','category_show'));
    }

// xử lí comment
     public function comment(Request $request)
     {
       $comment = $request->all();
       $data    = Comment::create($comment);
       return redirect()->route('index');
     }

// liên hệ
     public function contact()
     {
       return view('frontend.pages.contact');
     }

// xử lí liên hệ
     public function postcontact(MailRequest $request)
     {
       ini_set('max_execution_time', 300);
       $data = [
         'name'   => $request->name,
         'email'  => $request->email,
         'content'=> $request->content,
       ];
       //mail to email user
       Mail::send('email.sendUser',$data,function($msg) use ($data){
         $msg->from('khanhhokhanhho@gmail.com',"Watches");
         $msg->to($data['email'])->subject('Cảm ơn bạn đã liên hệ! chúng tôi sẽ hồi âm trong vòng 24h');
       });
       //mail to admin email
       Mail::send('email.sendAdmin',$data,function($msg){
         $msg->from('khanhhokhanhho@gmail.com',"Watches");
         $msg->to('khanhhokhanhho@gmail.com')->subject('Liên hệ mới');
       });
       return redirect()->route('contact')->with(['flash_level'=>'result_msg','flash_massage'=>'Cảm ơn bạn đã liên hệ với chúng tôi, vui lòng kiểm tra lại email của bạn!']);
     }
     public function search(Request $request)
     {
       $search = $request->get('search');
            if($search != ''){
                $products = Product::where('id', 'like', '%'.$search.'%')
                        ->orWhere('name', 'like', '%'.$search.'%')
                        ->orWhere('price', 'like', '%'.$search.'%')
                        ->orderBy('id', 'desc')->paginate(5);
            return view('frontend.pages.search',compact('products'));
            }else{
              return redirect()->route('index');
            }
     }
}
