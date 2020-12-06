@extends('master')
@section('content')
 
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
           
            <!-- End Cart Panel -->
  
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">   
                            @if(Session::has('cart'))            
                            <div class="table-content table-responsive">
                                <table>

                                    <thead>
                                    
                                        <tr>
                                   
                                            <th class="product-image">Sản phẩm</th>
                                            <th class="product-name">Tên sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Tổng cộng</th>
                                            <th class="product-remove">Xóa</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($product_cart as $product)
                                    	
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="source/images/product/{{$product['item']['image']}}" alt="product img" /></a></td>
                                            <td class="product-name"><a href="#" >{{$product['item']['name']}}</a>
                                                <ul  class="pro__prize">
                                                    <li class="old__prize">
                                                    	
                                                    <li></li>
                                                </ul>
                                            </td>
                                            <td class="product-price" id='price'><span class="amount">@if($product['item']['promotion_price']==0)

                                                    	{{number_format($product['item']['unit_price'])}}
                                                    	@else
                                                    	{{number_format($product['item']['promotion_price'])}}
                                                    	@endif</span></td>
                                            <td class="product-quantity">
                                                <input type="number" id='soluong' min =1 max =10 
                                            	value="{{$product['qty']}}" />

                                            </td>
                                            <td class="product-subtotal" id ='total' value =''>
                                            	@if($product['item']['promotion_price']==0)
                                                    {{number_format($product['item']['unit_price']*$product['qty'])}}
                                                @else
                                                    {{number_format($product['item']['promotion_price']* $product['qty'])}}
                                                @endif
                                            </td>
                                            <td class="product-remove"><a href="{{route('xoa_sp_giohang',$product['item']['id'])}}"><i class="icon-trash icons"></i></a></td>
                                            
                                        </tr>
                                         <script type="text/javascript">
                                                    document.getElementById("soluong").onchange = function() {myFunction()};
                                                    function myFunction(){
                                                          var gia = document.getElementById("price");
                                                          var soluong = document.getElementById("soluong");
                                                          var total = document.getElementById("total");
                                                        total.value = soluong.value*gia.value;
                                                    }
                                                   

                                                </script>
                                        
                                    @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="buttons-cart--inner">
                                        
                                        <div class="buttons-cart checkout--btn">
                                            <a href="#">update</a>
                                            <a href="#">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="ht__coupon__code">
                                        <span>enter your discount code</span>
                                        <div class="coupon__box">
                                            <input type="text" placeholder="">
                                            <div class="ht__cp__btn">
                                                <a href="#">enter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                                    <div class="htc__cart__total">
                                        <h6>Tổng thanh toán </h6>
                                        <div class="cart__desk__list">
                                        		
                                            <ul class="cart__desc">
                                                <li>cart total</li>
                                           
                                            </ul>
                                            <ul class="cart__price">
                                                <li>{{number_format($totalPrice)}}</li>
                                            
                                            </ul>
                                        </div>
                                        <div class="cart__total">
                                            <span>Tổng thanh toán</span>
                                            <span>{{number_format($totalPrice)}}</span>
                                        </div>
                                          <div class="buttons-cart checkout--btn">
                                         
                                            <a href="{{route('check_out')}}">checkout</a>
                                        </div>
                                       
                                        
                                        @else
                                        <div><h2> Giỏ hàng trống </h2></div>
                                         <div class="buttons-cart">
                                            <a href="{{route('trangchu')}}">Về trang chủ</a>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
@endsection
