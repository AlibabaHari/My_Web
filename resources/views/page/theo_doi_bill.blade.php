@extends('master')
@section('content')
<style type="text/css">
.xem { 
  background-color: #4CAF50;
  border: 2px;
  color: white;
  padding: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
 
  border-radius: 2px;
} 
.sua { 
  background-color: #4CAF50;
  border: 2px;
  color: white;
  padding: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
 
  border-radius: 2px;
} 
</style>

<div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
       
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="#">               
                            <div class="table-content table-responsive">
                                <table>
                                    <thead> 	
                                        <tr>
                                        	<th style="width: 5%">STT</th>
                                            <th style="width: 5%">Mã bill</th>
                                            <th style="width: 10%">Trạng thái</th>
                                            <th style="width: 10%">Thanh toán</th>
                                        
                                            <th style="width: 20%">Ngày đặt</th>
                                            <th style="width: 30%">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    		@foreach($bill_waiting as $key=> $bill)
					                <tr>
					                  <th scope="row">{{$key+1}}</th>
					                  <td>{{$bill->id}}</td>
					                  <td>{{$bill->trang_thai}}</td>
					                  <td>{{number_format($bill->total)}}</td>
					                  
					                  <td>{{$bill->date_order}}</td>
               
                  <td><a  class='xem' style="width: 10" href="{{route('detailbill',$bill->id)}}">Xem</a> 
                   
                   	
                   </td>
                </tr>
                
                @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>
                           
                         
                        </form> 
                    </div>
                </div>
            </div>
        </div>


@endsection