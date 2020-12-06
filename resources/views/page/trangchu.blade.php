
@extends('master')
@section('content')   

</style>


        <section class="htc__category__area ptb--100">
            <div class="container">
                
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                           
                            <h2 class="title__line">New</h2>
                            <p>Tìm thấy {{count($newproduct)}} sản phẩm</p>
                        </div>
                    </div>
                </div>
                <div class="htc__product__container">
                    <div class="row">
                        <div class="product__list clearfix mt--30">
                            @foreach($newproduct as $new)
                            <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                                <div class="category">
                                    <div class="zoom">
                                    <div class="ht__cat__thumb">
                                        
                                        <a href="{{route('chitiet',$new->id)}}">
                                            <img class="figure" src="source/images/product/{{$new->image}}" alt="product images"
                                            >
                                        </a>
                                    
                                    </div>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><a href="source/wishlist.html"><i class="icon-heart icons"></i></a></li>

                                            <li><a href="{{route('themgiohang',$new->id)}}"><i class="icon-handbag icons"></i></a></li>

                                            <li><a href="source/#"><i class="icon-shuffle icons"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="{{route('chitiet',$new->id)}}">{{$new->name}}</a></h4>
                                        <ul class="fr__pro__prize">
                                        	@if($new->promotion_price==0)
                                        	<li ><strong>{{number_format($new->unit_price)}}</strong></li>

                                        @else
                                            <li class="old__prize"><del>{{number_format($new->unit_price)}}</del></li>
                                            <li ><strong>{{number_format($new->promotion_price)}}</strong></li>
                                         @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>
                   
                    
                </div>
            </div>
        </section>
        
        <section class="ftr__product__area ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Sale</h2>
                            <p>Tìm thấy {{count($sale_product)}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="product__wrap clearfix">
                        <!-- Start Single Category -->
                        @foreach($sale_product as $sale)
                        <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                            <div class="category">
                                <div class="ht__cat__thumb">
                                    <div class='zoom'>
                                    <a href="source/product-details.html">
                                        <img src="source/images/product/{{$sale->image}}" height="180" width="150" alt="product images">
                                    </a>
                                </div>
                                </div>
                                <div class="fr__hover__info">
                                    <ul class="product__action">
                                        <li><a href="source/wishlist.html"><i class="icon-heart icons"></i></a></li>

                                        <li><a href="{{route('themgiohang',$sale->id)}}"><i class="icon-handbag icons"></i></a></li>

                                        <li><a href="source/#"><i class="icon-shuffle icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="fr__product__inner">
                                    <h4><a href="source/product-details.html">{{$sale->name}}</a></h4>
                                    <ul class="fr__pro__prize"> 
                                            <li class="old__prize"><del>{{number_format($new->unit_price)}}</del></li>
                                            <li ><strong>{{number_format($sale->promotion_price)}}</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                       
                        
                    </div>


                </div>
                

            </div>

        </section>

        <!-- End Product Area -->
        <!-- Start Testimonial Area -->
       
        <!-- End Testimonial Area -->
        <!-- Start Top Rated Area -->
        <section class="top__rated__area bg__white pt--100 pb--110">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title--2 text-center">
                            <h2 class="title__line">Top Rated</h2>
                           
                        </div>
                    </div>
                </div>
                <div class="row mt--20">
                    @foreach($top_rate as $top)
                    <!-- Start Single Product -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="htc__best__product">
                            <div class="htc__best__pro__thumb">
                                <div class='zoom'>
                                <a href="source/product-details.html">
                                    <img src="source/images/product/{{$top->image}}" alt="small product">
                                </a>
                            </div>
                            </div>
                            <div class="htc__best__product__details">
                                <h2><a href="source/product-details.html">dummy Product title</a></h2>
                                <ul class="rating">
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                    <li class="old"><i class="icon-star icons"></i></li>
                                </ul>
                                <ul  class="top__pro__prize">
                                    <li class="old__prize">{{number_format($top->unit_price)}}</li>
                                    <li>{{number_format($top->unit_price)}}</li>
                                </ul>
                                <div class="best__product__action">
                                    <ul class="product__action--dft">
                                        <li><a href="source/wishlist.html"><i class="icon-heart icons"></i></a></li>
                                        <li><a href="source/cart.html"><i class="icon-handbag icons"></i></a></li>
                                        <li><a href="source/#"><i class="icon-shuffle icons"></i></a></li>
                                    </ul>
                                </div>
                            </div>
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
        </section>
        <!-- End Top Rated Area -->
        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="source/#"><img src="source/images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="source/#"><img src="source/images/brand/2.png" alt="brand images"></a></li>
                                <li><a href="source/#"><img src="source/images/brand/3.png" alt="brand images"></a></li>
                                <li><a href="source/#"><img src="source/images/brand/4.png" alt="brand images"></a></li>
                                <li><a href="source/#"><img src="source/images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="source/#"><img src="source/images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="source/#"><img src="source/images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="source/#"><img src="source/images/brand/2.png" alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      

        <!-- End Brand Area -->
        <!-- Start Blog Area -->
       @endsection