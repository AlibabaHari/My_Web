@extends('user_dasboard_template')
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
                  <th style="width: 20%">Trạng thái</th>
                  <th style="width: 10%">Tổng thanh toán</th>
                  <th style="width: 50%">Thao tác</th>

                </tr>
              </thead>
              <tbody>
                @foreach($bill as $key=> $bill)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td>{{$bill->id}}</td>
                  <td>{{$bill->id_customer}}</td>
                  <td>{{$bill->date_order}}</td>
                
                  <td>{{$bill->trang_thai}}</td>
                  <td>{{number_format($bill->total)}}</td>
                 
                  <td><a  class='xem' style="width: 10" href="{{route('detailbil',$bill->id)}}">Xem</a> 
                     @if ($bill->trang_thai=='Chờ xác nhận')
                      <a  class='sua' style="width: 10" href="{{route('deletebill',$bill->id)}}">Xoá</a>

                       @endif
                   
                   
                 

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


<!-- Table head options start -->



 @endsection