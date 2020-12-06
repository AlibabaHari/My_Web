@extends('master')
@section('content')
 
        <div class="checkout-wrap ptb--100">
            <div class="container">
               
                <div class="row">
                    
                   
                    <div class="col-md-8">
                      

                        <div class="checkout__inner">
                          
                            <div class="accordion-list">
                                <div class="accordion">
                                   
                                    <div class="accordion__title">
                                        Thông tin đặt hàng
                                    </div>
                                    <form action="{{route('dat_hang_2')}}" method="post">
                                          @csrf

                                    <div class="accordion__body">

                                        <div class="shipinfo">
                                            <h3 class="shipinfo__title">Địa chỉ khác (nếu có)</h3>
                                            <input type ="text" name='another_address' class="ship-to-another-trigger"></input>
                                            <h3 class="shipinfo__title">Sdt liên hệ khác (nếu có)</h3>
                                            <input type ="text" name='another_phone' class="ship-to-another-trigger"></input>
                                            
                                        </div>
                                          
                                    </div>
                                    
                                    <div class="accordion__title">
                                        Phương thức thanh toán
                                    </div>

                                    <div class="accordion__body">
                                        <div class="shipmethod">
                                                    <p>
                                                        <input type="radio"  name="ship_method_card" value = 'Thẻ tín dụng' id="ship-fast">
                                                             Thẻ tín dụng
                                                        </input>
                                                        
                                                    </p>
    
                                                    <p>
                                                       <input type="radio"   name="ship_method_deliver" value ='Thanh toán khi nhận hàng' id="ship-fast">
                                                             Thanh toán khi nhận hàng
                                                        </input>
                                                       
                                                    </p>  
                                        </div>
                                    </div>
                                   
                                   

                                    <div class="accordion__title">
                                        Nhắn nhủ
                                    </div>
                                    <div class="accordion__body">
                                        <div class="paymentinfo">
                                       
                                            <div class="single-input">
                                                <input type="text" name='note' href="#" ><i class="zmdi zmdi-long-arrow-right"></i>Nhắn gì với nhà sản xuất</input>
                                            </div>
                                            
                                  
                                           
                                        </div>

                                    </div>
                                        
                                    <div class="dark-btn">

                                     <button class="btn btn-primary" type="submit">Đặt hàng</button>
                                    </div>
                                    </form>

                                </div>
                            </div>
                              
                        </div>
                         

                    </div>
                  
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Đơn của bạn</h5>
                            <div class="order-details__item">

                                @if(Session::has('cart'))
                          
                           
                                @foreach($product_cart as $product)
                                <div class="single-item">
                                    <div class="single-item__thumb">
                                        <img src="source/images/product/{{$product['item']['image']}}" alt="ordered item">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="#">{{$product['item']['name']}}</a>
                                        @if(!$product['item']['promotion_price'])
                                        <span class="price">{{number_format($product['item']['unit_price'])}} VND</span>
                                        @else
                                         <span class="price">{{number_format($product['item']['promotion_price'])}} VND</span>
                                        @endif
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="#"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                            <div class="order-details__count">
                                <div class="order-details__count__single">
                                    <h5>Tổng thanh toán</h5>
                                    <span class="price">{{number_format($totalPrice)}} VND</span>
                                </div>
                                
                                <div class="order-details__count__single">
                                    <h5>Ship</h5>
                                    <span class="price">0</span>
                                </div>
                            </div>
                            <div class="ordre-details__total">
                                <h5>Order total</h5>
                                <span class="price">{{number_format($totalPrice+40000)}} VND</span>
                            </div>
                            
                               
                              
                            
                           
                            @endif
                        </div>
                    </div>
              

                </div>
                 
            </div>
        </div>
        <!-- cart-main-area end -->
        <!-- Start Brand Area -->
        <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
