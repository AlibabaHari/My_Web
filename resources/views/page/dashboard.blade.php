@extends('dashboard_template')
@section('content')

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Quản lý bill</h4>
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
          <p class="card-text">Bill chưa xác nhận </p>
         
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr href='xem chi tiet'>
                  <th style="width: 5%">STT</th>
                  <th style="width: 5%">Mã bill</th>
                  <th style="width: 10%">Mã khách</th>
                  <th style="width: 20%">Ngày đặt</th>
                  <th style="width: 5%">Trạng thái</th>
                  <th style="width: 10%">Tổng thanh toán</th>
                  <th style="width: 50%">Thao tác</th>

                </tr>
              </thead>
              <tbody>
              	@foreach($bill_waiting as $key=> $bill)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$bill->id}}</td>
                  <td>{{$bill->id_customer}}</td>
                  <td>{{$bill->date_order}}</td>
                  <form method="post" action="{{route('edit_bill',$bill->id)}}">
                  <td><select name="trangthai">
                  	<option value="Đã xác nhận" selected="">Chờ xác nhận</option>
                  	<option value="Đã xác nhận">Đã xác nhận</option>
                  	<option value="Đang vận chuyển">Đang vận chuyển</option>
                  	<option value="Đã thanh toán">Đã thanh toán</option>
                
                  	

                  </select></td>
                  <td>{{number_format($bill->total)}}</td>
                  <td><a  class='xem' style="width: 10" href="{{route('bill_detail',$bill->id)}}">Xem</a> 
                   
                   	<button type='submit' class="sua">Sửa</button>
                   </form></td>
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
       
          <div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Bill đã xác nhận</h4>
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
					<p class="card-text">Danh sách bill</p>
					<p><span class="text-bold-600">Example 1:</span> Table with outer spacing</p>
					<div class="table-responsive">
					 <table class="table">
              <thead>
                <tr href='xem chi tiet'>
                  <th style="width: 5%">STT</th>
                  <th style="width: 5%">Mã bill</th>
                  <th style="width: 10%">Mã khách</th>
                  <th style="width: 20%">Ngày đặt</th>
                  <th style="width: 5%">Trạng thái</th>
                  <th style="width: 10%">Tổng thanh toán</th>
                  <th style="width: 50%">Thao tác</th>

                </tr>
              </thead>
              <tbody>
              	@foreach($bill_check as $key=> $bill)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$bill->id}}</td>
                  <td>{{$bill->id_customer}}</td>
                  <td>{{$bill->date_order}}</td>
                  <form method="post" action="{{route('edit_bill',$bill->id)}}">
                  <td><select name="trangthai">
                
                  	<option value="Chờ xác nhận">Chờ xác nhận</option>
                  	<option value="Đã xác nhận" selected>Đã xác nhận</option>
                  	<option value="Đang vận chuyển">Đang vận chuyển</option>
                  	<option value="Đã thanh toán">Đã thanh toán</option>

                  </select></td>
                  <td>{{number_format($bill->total)}}</td>
                  <td><a class='xem' href="{{route('bill_detail',$bill->id)}}">Xem</a> 
                   
                   	<button type='submit' class='sua' >Sửa</button>
                   </form></td>
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
<!-- Basic Tables end -->
<!-- Striped rows start -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Đang vận chuyển</h4>
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
					
				</div>
				<div class="table-responsive">
					<table class="table">
              <thead>
                <tr href='xem chi tiet'>
                  <th style="width: 5%">STT</th>
                  <th style="width: 5%">Mã bill</th>
                  <th style="width: 10%">Mã khách</th>
                  <th style="width: 20%">Ngày đặt</th>
                  <th style="width: 5%">Trạng thái</th>
                  <th style="width: 10%">Tổng thanh toán</th>
                  <th style="width: 50%">Thao tác</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($bill_moving as $key=> $bill)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$bill->id}}</td>
                  <td>{{$bill->id_customer}}</td>
                  <td>{{$bill->date_order}}</td>
                  <form method="post" action="{{route('edit_bill',$bill->id)}}">
                  <td><select name="trangthai">
                  		<option value="Chờ xác nhận">Chờ xác nhận</option>
                  	<option value="Đã xác nhận" >Đã xác nhận</option>
                  	<option value="Đang vận chuyển" selected>Đang vận chuyển</option>
                  	<option value="Đã thanh toán">Đã thanh toán</option>

                  </select></td>
                  <td>{{number_format($bill->total)}}</td>
                  <td><a class='xem' href="{{route('bill_detail',$bill->id)}}">Xem</a> 
                   
                   	<button class='sua' type='submit' >Sửa</button>
                   </form></td>
                </tr>
                
                @endforeach
              </tbody>
            </table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Striped rows end -->

<!-- Table head options start -->
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-header">
				<h4 class="card-title">Đã thanh toán</h4>
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
					
				</div>
				<div class="table-responsive">
					<table class="table">
              <thead>
                <tr href='xem chi tiet'>
                  <th style="width: 5%">STT</th>
                  <th style="width: 5%">Mã bill</th>
                  <th style="width: 10%">Mã khách</th>
                  <th style="width: 20%">Ngày đặt</th>
                  <th style="width: 5%">Trạng thái</th>
                  <th style="width: 10%">Tổng thanh toán</th>
                  <th style="width: 50%">Thao tác</th>

                </tr>
              </thead>
              <tbody>
              	@foreach($bill_done as $key=> $bill)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$bill->id}}</td>
                  <td>{{$bill->id_customer}}</td>
                  <td>{{$bill->date_order}}</td>
                  <form method="post" action="{{route('edit_bill',$bill->id)}}">
                  <td><select name="trangthai">
                  	<option value="Chờ xác nhận">Chờ xác nhận</option>
                  	<option value="Đã xác nhận" >Đã xác nhận</option>
                  	<option value="Đang vận chuyển" s>Đang vận chuyển</option>
                  	<option value="Đã thanh toán" selected>Đã thanh toán</option>


                  </select></td>
                  <td>{{number_format($bill->total)}}</td>
                  <td><a class='xem' href="{{route('bill_detail',$bill->id)}}">Xem</a> 
                   
                   	<button  class='sua' type='submit' >Sửa</button>
                   </form></td>
                </tr>
                
                @endforeach
              </tbody>
            </table>
				</div>
			</div>
		</div>
	</div>
</div>



 @endsection