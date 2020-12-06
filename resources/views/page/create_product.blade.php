@extends('dashboard_template')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Tên và danh mục</h4>
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
      <form action="{{route('create_product_new')}}" enctype="multipart/form-data" method="post"> 
      <div class="card-content collapse show">
        <div class="card-body">
          
          	
		  <div class="form-group">
		    <label for="exampleInputEmail1">Tên sản phẩm</label>
		    <input name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" ></input>
		    <small id="emailHelp" class="form-text text-muted">Hãy đặt cho nó một cái tên thu hút nào</small>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Danh mục</label>
		    <select class="form-control" name="type" > 
		    	@foreach($danhmuc as $danhmuc)
		    	<option value ='{{$danhmuc->id}}'>
		    		{{$danhmuc->name}}
		    		
		    	</option>>
		    	@endforeach
		    </select>
		   
		  </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>         
	<div class="col-12">
		<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Viết nội dung cho sản phẩm</h4>
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
       
          
        
		  <div class="form-group">
		    <label for="exampleInputEmail1">Nội dung</label>
		    <textarea  class="form-control" name="content" rows="10" cols="50" >
		    </textarea> 
		    <small id="emailHelp" class="form-text text-muted">Nổi bật sản phẩm, thể hiện sự độc đáo và cuốn hút</small>
		  </div>
		  <div class="form-group">
		   
		    <div class='row'>
		    	<div class='col-6'>
		    		 <label for="exampleInputPassword1">Giá trước</label>
		    		<input class="form-control" name="giatruoc" ></input>
				</div>
				<div class='col-6'>
		    		<label for="exampleInputPassword1">Giá sau</label>
		   		<input class="form-control" name="khuyenmai" ></input>
		   </div>
	
		</div>
		 <div class="form-group">
		   
		  <div class="form-group">
		    <label for="exampleInputPassword1">Trạng thái</label>
		    <select class="form-control" name="trang_thai" > 
		    	<option value ='Ẩn'>Ẩn </option>
		    	<option value ='Hiện'>Hiện</option>
		    	<option value ='Hết hàng'>Hết hàng</option>
		    </select>
		   
		  </div>

		  <div class="form-group">
			    <label for="exampleInputPassword1">Hình ảnh đại diện sản phẩm</label>
			<p><input type="file"  accept="image/*" name="image_product" id="file"  onchange="loadFile(event)" ></p>
			<p><label for="file" style="cursor: pointer;">Upload</label></p>
			<p><img id="output" width="200" /></p>

			<script>
			var loadFile = function(event) {
				var image = document.getElementById('output');
				image.src = URL.createObjectURL(event.target.files[0]);
			};
			</script>

		  </div>
		
	
		</div>	   
		  </div>
		    <button  type='submit' class="btn btn-success">Hoàn thành</button>
		 
		
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>
	</div>
 @endsection