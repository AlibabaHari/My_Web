@extends('dashboard_template')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Thống kê bill</h4>
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
          <p  class="card-text">Doanh thu </p>
          <a href="{{route('create_product')}}" class="card-text">Tạo mới</a>
         
          <div class="table-responsive">
            <table style="width:100%" class="table">
              <thead>
                <tr href='xem chi tiet'>
                 
                  
                  <th style="width:5%" >Stt</th>
					<th style="width:20%">Tên</th>
					<th style="width:10%">Email</th>
					<th style="width:10%">Sdt</th>
					<th style="width:15%">Chức vụ</th>
					<th style="width:40%">Thao tác</th>

                  
                </tr>
              </thead>
              <tbody>
              	@foreach($users as $key=> $user)
                <tr>
                	<td scope>{{$key+1}}</td>
                  <td>{{$user->first_name}} {{$user->last_name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->phone}}</td>
                  <td>
                  	<form action ="{{route('sua_chuc_vu',$user->email)}}" method="post">
                  <select name='type'>
                  	@if($user->user_type=='user')
                  	<option value= 'user' selected>
                  		User	
                  	</option>
                  	<option value= 'admin' >
                  		Admin	
                  	</option>
                  	@else
                  	<option value= 'user' >
                  		User	
                  	</option>
                  	<option value= 'admin' selected>
                  		Admin	
                  	</option>
                  	@endif
                  	

                  	
                  </select>
             
              		</td>
                  
                
                  <td><a class='sua' href="{{route('thongtin_user',$user->email)}}" >Xem</a>  <a class='sua' href="{{route('xoa_user',$user->email)}}">Xóa</a>
                  	<button class='sua' type='submit'>Sửa</a>
                  	 </form>
                   
                   	
                  </td>
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




 @endsection