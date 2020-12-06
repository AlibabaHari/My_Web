@extends('master')

@section('content')
<style type="text/css">
    </style>
 <div class="body__overlay"></div>
        <div class="container">         
        <h3>Sản phẩm -> {{$ten_loai->name}}</h3>     
        </div>

        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                            <div class="htc__grid__top">
                                <div class="htc__select__option">
                                    <select class="ht__select">
                                        <option>Sắp xếp theo</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by average rating</option>
                                        <option>Sort by newness</option>
                                    </select>
                                    <select class="ht__select">
                                        <option>Show by</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by average rating</option>
                                        <option>Sort by newness</option>
                                    </select>
                                </div>
                                <div class="ht__pro__qun">
                                    <span>Showing 1-{{count($sp_theoLoai)}}  products</span>
                                </div>
                                <!-- Start List And Grid View -->
                                <ul  class="pro__details__tab" role="tablist"">
                                    <li role="presentation" class="grid-view active">
                                        <a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                    <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                </ul>
                                <!-- End List And Grid View -->
                            </div>
                            <!-- Start Product View -->
                            <div class="row">
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel"  id="grid-view" class="pro__single__content tab-pane fade in active">

                                       @foreach($sp_theoLoai as $loai)
                                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                                        
                                            <div class="category">
                                               
                                          
                                                <div class="ht__cat__thumb">
                                                    <a href="{{route('chitiet',$loai->id)}}">
                                                        <div class='zoom'>
                                                        <img  src="source/images/product/{{$loai->image}}" height="200" width="100" alt="product images">
                                                    </div>
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                                    <ul class="product__action">
                                                        <li><a href="wishlist.html"><i class="icon-heart icons"></i></a></li>

                                                        <li><a href="{{route('themgiohang',$loai->id)}}"><i class="icon-handbag icons"></i></a></li>

                                                        <li><a href="#"><i class="icon-shuffle icons"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="{{route('chitiet',$loai->id)}}">{{$loai->name}}</a></h4>
                                                    <ul class="fr__pro__prize">
                                                        @if(!$loai->promotion_price)
                                                        <li ><strong>{{number_format($loai->unit_price)}}<strong></li>
                                                        @else
                                                        <li class="old__prize"><del>{{number_format($loai->unit_price)}}</del></li>
                                                        <li><strong>{{number_format($loai->promotion_price)}}</red><strong></li>
                                                        @endif
                                                    </ul>
                                                </div>
                                                
                                            </div>

                                       
                                            
                                        </div>
                                        @endforeach
                                      
                                      
                                       
                                       
                                        <!-- Start Single Product -->
                                       
                                        <!-- End Single Product -->
                                    </div>
                                    <div role="tabpanel" id="list-view" class="pro__single__content tab-pane fade">
                                         
                                        <div class="col-xs-12">
                                             @foreach($sp_theoLoai as $loai)
                                            <div class="ht__list__wrap">
                                                <!-- Start List Product -->
                                            
                                                
                                                <div class="ht__list__product">
                                                  
                                                    <div class="ht__list__thumb">
                                                        <a href="{{route('chitiet',$loai->id)}}"><img src="source/images/product/{{$loai->image}}" height="250" width="180" alt="product images"></a>
                                                    </div>
                                                    <div class="htc__list__details">
                                                        <h2><a href="{{route('chitiet',$loai->id)}}">{{$loai->name}} </a></h2>
                                                        <ul  class="pro__prize">
                                                            <li class="old__prize">{{number_format($loai->unit_price)}}</li>
                                                            <li>{{number_format($loai->promotion_price)}}</li>
                                                        </ul>
                                                        <ul class="rating">
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                            <li class="old"><i class="icon-star icons"></i></li>
                                                        </ul>
                                                        <p>{{$loai->description}}</p>
                                                        <div class="fr__list__btn">
                                                            <a class="fr__btn" href="cart.html">Thêm vào giỏ</a>
                                                        </div>
                                                    </div>
                                                   
                                                </div>
                                                
                                              
                                            </div>
                                             @endforeach
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                               <div class='row'>{{$sp_theoLoai->links()}}</div>
                            <!-- End Product View -->
                        </div>
                        <!-- Start Pagenation -->
                       
                        <!-- End Pagenation -->
                    </div>
                    <div class="col-lg-3 col-lg-pull-9 col-md-3 col-md-pull-9 col-sm-12 col-xs-12 smt-40 xmt-40">
                        <div class="htc__product__leftsidebar">
                            <!-- Start Prize Range -->
                            <div class="htc-grid-range" >
                                <h4 class="title__line--4" r>Price</h4>
                                <div class="content-shopby">
                                    <div class="price_filter s-filter clear">
                                        <form action="#" method="GET">
                                            <div id="slider-range"></div>
                                            <div class="slider__range--output">
                                                <div class="price__output--wrap">
                                                    <div class="price--output">
                                                        <span>Price :</span><input type="text" id="amount" readonly>
                                                    </div>
                                                    <div class="price--filter">
                                                        <a href="#">Filter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Prize Range -->
                            <!-- Start Category Area -->
                            <div class="htc__category">
                                <h4 class="title__line--4">categories</h4>
                                
                                <ul class="ht__cat__list">
                                @foreach($product_type as $type)
                                <li><a href="{{route('loaisanpham',$type->id)}}"> {{$type->name}} </a></li>
                                
                                @endforeach
                                   
                                </ul>
                            </div>
                         
                            <div class="htc__tag">
                                <h4 class="title__line--4">tags</h4>
                                <ul class="ht__tag__list">
                                    @foreach($thuoctinh as $tt)
                                    <li><a href="#">{{$tt->tenthuoctinh}}</a></li>
                                   
                                    @endforeach
                                </ul>
                            </div>
                           
                            <div class="htc__recent__product">
                                <h2 class="title__line--4">best seller</h2>
                                <div class="htc__recent__product__inner">
                                    <!-- Start Single Product -->
                                    @foreach($sale_product  as $sale)
                                    <div class="htc__best__product">
                                        <div class="htc__best__pro__thumb">
                                            <a href="product-details.html">
                                                <img src="source/images/product/{{$sale->image}}" alt="small product">
                                            </a>
                                        </div>
                                        <div class="htc__best__product__details">
                                            <h2><a href="product-details.html">{{$sale->name}}</a></h2>
                                            <ul class="rating">
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                                <li class="old"><i class="icon-star icons"></i></li>
                                            </ul>
                                           

                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- End Single Product -->
                                    <!-- Start Single Product -->

                                   
                                    <!-- End Single Product -->
                                    <!-- Start Single Product -->
                                    
                                    <!-- End Single Product -->
                                </div>
                            </div>
                            <!-- End Best Sell Area -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Grid -->
        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="#"><img src="source/images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="source/images/brand/2.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="source/images/brand/3.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="source/images/brand/4.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="source/images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="source/images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="source/images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="source/images/brand/2.png" alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Brand Area -->
        <!-- Start Banner Area -->
        <div class="htc__banner__area">
            <ul class="banner__list owl-carousel owl-theme clearfix">
                <li><a href="product-details.html"><img src="source/images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="source/images/banner/bn-3/2.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="source/images/banner/bn-3/3.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="source/images/banner/bn-3/4.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="source/images/banner/bn-3/5.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="source/images/banner/bn-3/6.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="source/images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="source/images/banner/bn-3/2.jpg" alt="banner images"></a></li>
            </ul>
        </div>
        <!-- End Banner Area -->
        <!-- End Banner Area -->
        <!-- Start Footer Area -->
        <footer id="htc__footer">
            <!-- Start Footer Widget -->
            <div class="footer__container bg__cat--1">
                <div class="container">
                    <div class="row">
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer">
                                <h2 class="title__line--2">ABOUT US</h2>
                                <div class="ft__details">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                                    <div class="ft__social__link">
                                        <ul class="social__link">
                                            <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                            <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                            <div class="footer">
                                <h2 class="title__line--2">information</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy & Policy</a></li>
                                        <li><a href="#">Terms  & Condition</a></li>
                                        <li><a href="#">Manufactures</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

@endsection