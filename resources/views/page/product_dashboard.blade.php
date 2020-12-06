@extends('dashboard_template')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Danh sách sản phẩm</h4>
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
        
          <a href="{{route('create_product')}}" class="card-text">Tạo mới</a>
         
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr href='xem chi tiet'>
                  <th style="width:5%">STT</th>
                  <th style="width:10%">Hình ảnh</th>
                  <th style="width:10%">Mã</th>
                  <th style="width:25%">Tên</th>
                  <th style="width:15%">Ngày tạo</th>
                  <th style="width:15%">Trạng thái</th>
                  <th style="width:30%">Thao tác</th>

                </tr>
              </thead>
              <tbody>
              	@foreach($products as $key=> $product)
                <tr>
                  <th scope="row">{{$key+1}}</th>
                  <td><img href="{{route('chitiet',$product->id)}}" src="source/images/product/{{$product->image}}" height="50" width="50" alt="product images"></td>
                  <td>{{$product->id}}</td>
                  <td>{{$product->name}}</td>
                  <td>{{$product->created_at}}</td>
               
                  <td>{{$product->trang_thai}}</td>
                 
                  <td><a href="{{route('chitiet',$product->id)}}">Xem</a> | <a href="{{route('xoa',$product->id)}}">Xóa</a>|
                  	<a href="{{route('edit',$product->id)}}">Sửa</a>
                   
                   	
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
       
          
	
</div>
<!-- Basic Tables end -->
<!-- Striped rows start -->

<!-- Striped rows end -->

<!-- Table head options start -->




 @endsection