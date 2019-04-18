<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="{{ url('/my-cart') }}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                        @if(Auth::check() && Auth::user()->is_admin === 0 )
                            <li><a href="{{ url('/info',Auth::user()->id) }}"><i class="fa fa-user"></i> Tài khoản</a>
                            </li>
                            <li><a>Xin chào {{ ucfirst(Auth::user()->name) }}</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        @if(Auth::check() && Auth::user()->is_admin === 0 )
                            <li class="dropdown dropdown-small">
                                <a class="dropdown-toggle" href="{{URL::route('logout')}}"><span class="key  "> <i class="fa fa-power-off"></i> Đăng xuất</span></a>
                            </li>
                        @else
                            <li><a href="{{ url('/register') }}"><i class="fa fa-user"></i> Đăng kí </a></li>
                            <li><a href="{{URL::route('get-login-user')}}"><i class="fa fa-user"></i> Đăng nhập</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->
<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="logo">
                    <h2><a href="{{url('/')}}"><img style='width: 31%' src="{{asset("public/img/logo.png")}}"></a></h2>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="top-down__phone">
                   <div class="top-down__phone__hotline">
                      <ul style="margin-top: 20px;font-weight: bold; list-style: none;">
                         <li style='font-size:20px;text-transform: uppercase;color:#fed700'>Hotline</li>
                         <li style="font-style:italic;color:#acacac"><span>0905.697.696</span> - <span>0905.697.695</span> </li>
                         <li style="font-style:italic;color:#acacac"><span>Huy Hoàng Store</span> - <span>93 Lê Đình Lý</span> </li>
                      </ul>
                   </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pull-right">
                    <div class="shopping-item " id="shopping-item">
                        <a href="{{ url('/my-cart') }}">Cart - <span class="cart-amunt">{{ Cart::subtotal(0) }} VND</span> <i
                        class="fa fa-shopping-cart"></i> <span
                        class="product-count">{{ Cart::count() }}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->

@include('pages.layouts.menu')