@extends('dashboard_template')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Chi tiết bill</h4>
        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
        <div class="heading-elements">
          <ul class="list-inline mb-0">
            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
            <li><a data-action="close"><i class="ft-x"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="card-content collapse show">
        <div class="card-body">
        	@if($customer->gender=='0')
        	<p class="card-text">Gửi cho chị {{$customer->fisrt_name}} {{$customer->last_name}}</p>
        	@else
        		<p class="card-text">Gửi cho anh {{$customer->fisrt_name}} {{$customer->last_name}}</p>
        	@endif

        	
           <p class="card-text">Địa chỉ mặc định: {{$customer ->address}}  </p>
           <p class="card-text">Địa chỉ mới (nếu có): {{$customer ->address_another}}  </p>
           <p class="card-text">SDT: {{$customer ->phone}}  </p>
           <p class="card-text">Nhắn nhủ: {{$customer ->note}}  </p>
           <p class="card-text">SDT khác (nếu có): {{$customer ->sdt_khac}}  </p>

           

        
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr >
                	<th>STT</th>

            
                  <th style="width:20%">Hình ảnh</th>
                  <th style="width:30%">Tên</th>
                  <th style="width:20%">Giá</th>
                  <th style="width:5%">Số lượng</th>
                 

                </tr>
              </thead>
              <tbody>
              	@foreach($BillDetail  as $key => $bill_detail)
                <tr>
                	<th scope="row">{{$key+1}}</th>
                	<td><img href="{{route('chitiet',$bill_detail->product)}}" src="source/images/product/{{$bill_detail->image}}" height="50" width="50" alt="product images"></td>
                	
                
                  <td>{{$bill_detail->name}}</td>
                  <td>{{$bill_detail->unit_price}}</td>
                  <td>{{$bill_detail->quantity}}</td>
                
                  <td><a href="{{route('chitiet',$bill_detail->product)}}">Xem</a> 
                </tr>
                
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
       
</div>



 @endsection