<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href='source/css/zoomove-master/dist/zoomove.min.css' rel='stylesheet' type='text/css'>
    <title>LOREN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="source/images/favicon.ico">
    <link rel="apple-touch-icon" href="source/apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="source/css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="source/css/owl.carousel.min.css">
    <link rel="stylesheet" href="source/css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="source/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="source/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="source/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="source/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="source/css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src='source/css/zoomove-master/dist/zoomove.min.css' type='text/javascript'></script>
    <script  src='https://unpkg.com/infinite-scroll@3.0.6/dist/infinite-scroll.pkgd.min.js'></script>
    


    <!-- Modernizr JS -->
    <script src="source/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <a href="trangchu"><img src="source/images/logo/4.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        
                                        
                                        <li class="drop">
                                            <a href="#">Sản phẩm</a>
                                            <ul class="dropdown">
                                                @foreach($loaisp as $loaisp)
                                                <li><a href="{{route('loaisanpham',$loaisp->id)}}">{{$loaisp->name}}</a></li>
                                                
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="{{route('cart')}}">Giỏ hàng</a>
                                            
                                        </li>
                                        
                                        <li><a href="contact.html">Liên hệ</a></li>
                                    </ul>
                                </nav>

                                
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#search"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                   
                                   @if(Session('user_session')) 

                                             <ul class="main__menu">
                                             <li class="drop"><a href="#">User</a>
                                                <ul class="dropdown">  
                                                @if(Session::get('user_type')=='user') 
                                                <li><a href='{{route("customerdashboard")}}'>Theo dõi bill</a></li> 

                                                </li>
                                                @else
                                                <li><a href='{{route("dash_board")}}'>Trang admin</a></li> 

                                                </li>

                                                @endif             
                                               
                                                <li><a href="{{route("edit_user")}}">Profile</a></li>  
                                                 <li><a href="{{route("dangxuat")}}">Đăng xuất</a></li> 
                                                
                                                </ul>             
                                                   
                                        </ul>

                                       @else
                                            <a href="{{route("dang_nhap")}}">Log in</a>

                                         
                                       @endif
                                     
                                     
                                       
                                        
                                        <div class="htc__shopping__cart">
                                        <a class="cart__menu" href=""><i class="icon-handbag icons"></i></a>
                                        @if(Session('cart'))
                                        <a href="#"><span class="htc__qua">{{$soluong}}</span></a>
                                        @else
                                        <a href="#"><span class="htc__qua">0</span></a>

                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
         @yield('content')
        <!-- End Header Area -->

        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#search" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>

                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    @if(Session::has('cart'))
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="source/#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">

                  
                        @foreach($product_cart as $product)
                            <div class="shp__single__product">
                                <div class="shp__pro__thumb">
                                    <a href="source/#">
                                        <img src="source//images/product/{{$product['item']['image']}}" alt="product images">
                                    </a>
                                </div>
                                <div class="shp__pro__details">
                                    <h2><a href="source/product-details.html">{{$product['item']['name']}}</a></h2>
                                    <span class="quantity">Số lượng: {{$product['qty']}}</span>
                                    @if(!$product['item']['promotion_price'])
                                    <span class="shp__price">Đơn giá: {{number_format($product['item']['unit_price'] )}} 

                                    <span class="shp__price">{{number_format($product['item']['unit_price'] * $product['qty'])}} VND</span>
                                    @else
                                    <span class="shp__price">Đơn giá: {{number_format($product['item']['promotion_price'] )}} VND
                                    <span class="shp__price">{{number_format($product['item']['promotion_price'] * $product['qty'])}} VND</span>
                                    @endif
                                </div>
                                <div class="remove__btn">
                                    <a href="{{route('xoa_sp_giohang',$product['item']['id'])}}" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                                </div>
                            </div>
                        @endforeach
                   
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">{{$soluong}} sản phẩm</li>
                        <li class="total__price">Thành tiền: {{number_format($totalPrice)}} VND</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart">View Cart</a></li>
                        <li class=""><a href="">
                        Checkout</a></li>
                    </ul>
                </div>
          
            @endif
            <!-- End Cart Panel -->
        </div>
        
      
       
    </div>
    
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="source/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="source/js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="source/js/plugins.js"></script>
    <script src="source/js/slick.min.js"></script>
    <script src="source/js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="source/js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="source/js/main.js"></script>

</body>





    <footer id="htc__footer">
                <!-- Start Footer Widget -->
              
                <!-- End Footer Widget -->
                <!-- Start Copyright Area -->
             
                <!-- End Copyright Area -->
            </footer>
        <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="source/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="source/js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="source/js/plugins.js"></script>
    <script src="source/js/slick.min.js"></script>
    <script src="source/js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="source/js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="source/js/main.js"></script>
      <script >
            $(document).ready(function(){
                $('img').lazyload();
            }
            );
        </script>>

















     
