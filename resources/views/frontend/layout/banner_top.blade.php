<div class="ban-top">
  <div class="container">
    <div class="top_nav_left">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav menu__list">
          <li class="active menu__item menu__item--current"><a class="menu__link" href="{{route('index')}}">Trang chủ<span class="sr-only">(current)</span></a></li>
          <li class=" menu__item"><a class="menu__link" href="{{route('product')}}">Sản phẩm<span class="sr-only">(current)</span></a></li>
          <li class=" menu__item"><a class="menu__link" href="#">Giới thiệu</a></li>
          <li class=" menu__item"><a class="menu__link" href="#">Tin tức</a></li>
          <li class=" menu__item"><a class="menu__link" href="{{route('contact')}}">Liên hệ</a></li>
          </ul>
        </div>
        </div>
      </nav>
    </div>
    <div class="top_nav_right">
      <div class="cart box_1">
        <a href="{{route('showcart')}}">
  @if(Cart::count() > 0)
        <h3>
          <div class="total">
             <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                <span> Giỏ hàng </span>
          </div>
        </h3>
          <p><a href="javascript:;" class="simpleCart_empty">({{ Cart::count() }})</a></p>
  @else
        <h3>
           <div class="total">
              <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                 <span> Giỏ hàng </span>
          </div>
        </h3>
        <p><a href="javascript:;" class="simpleCart_empty">(trống)</a></p>
  @endif
             </a>
           </div>
         </div>
           <div class="clearfix"></div>
      </div>
    </div>
