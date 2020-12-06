@extends('master')
@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
        <div class="col-sm-10"><h1>Thông tin khách hàng</h1></div>
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->
      

      <div class="text-center">
        @if(!$user->image)
                            @if($user->gender ==1)
                            <img id ='output' src="source/images/user_avatar/male.jpg" class="avatar img-circle img-thumbnail"   alt="avatar"/>
                           

                            @else
                            <img id ='output' src="source/images/user_avatar/female.jpg" class="avatar img-circle img-thumbnail"   alt="avatar" />
                            
                            @endif
                            
                            @else
                             <img id ='output' src="source/images/user_avatar/{{$user->image}}" class="avatar img-circle img-thumbnail" alt="avatar"/>
         @endif
        
        
      </div>
  </hr><br>

               
          
        </div><!--/col-3-->
        <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Thông tin</a></li>
               
                <li><a data-toggle="tab" href="#settings">Chỉnh sửa</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="name">@if($user->gender==1)<h4>Anh: </h4>
                              @else
                             <h4>Chị: </h4>
                             @endif
                      </label>
                              <label id="name"  ><h4>{{$user->first_name}} {{$user->last_name}}</h4></label>

                             
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="country"><h4>Quốc gia: </h4></label>
                               <label id="country">@if($user->country=='VN')
                                <h4>Việt Nam</h4>
                                @endif
                                @if($user->country=='Thai')
                                <h4>Thái Lan</h4>
                                @endif
                                @if($user->country=='Ind')
                                <h4>Indonesia</h4>
                                @endif
                               </label>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone:</h4></label>
                               <label id="phone"  ><h4>{{$user->phone}}</h4></label>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="city"><h4>Thành phố:</h4></label>
                              <label id="city"  ><h4>{{$user->city}}</h4></label>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="address"><h4>Địa chỉ: </h4></label>
                               <label id="address"  ><h4>{{$user->address}}</h4></label>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                             <label for="email"><h4>Zode-zip:</h4></label>
                              <label id="email"  ><h4>{{$user->code_zip}}</h4></label>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                             <label for="email"><h4>Email:</h4></label>
                              <label id="email"  ><h4>{{$user->email}}</h4></label>
                          </div>
                      </div>
                     
                     
                
              
              <hr>
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="messages">
               
               <h2></h2>
               
               <hr>
                 
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="settings">

                    
                
                  <hr>
                  <form class="form" action="{{route('edit_profile')}}" enctype="multipart/form-data" method="post" > 
             
                     <input type="file" name='avatar' accept="image/*" class="text-center center-block file-upload">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Họ</h4></label>
                              <input type="text" class="form-control" name="first_name" value="{{$user->first_name}}" id="first_name" title="enter your first name if any."></input>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Tên</h4></label>
                              <input type="text" class="form-control" name="last_name" value="{{$user->last_name}} id="last_name"  title="enter your last name if any."> </input>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>SDT</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" value="{{$user->phone}}" title="enter your phone number if any."></input>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Thành phố</h4></label>
                              <input type="text" class="form-control" name="city" id="city" value="{{$user->city}}" title="enter your mobile number if any.">
                          </div>
                      </div>
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="location"><h4>Địa chỉ</h4></label>
                              <input type="text" class="form-control" name='address' value="{{$user->address}}" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="text"><h4>Code-zip</h4></label>
                              <input type="text" class="form-control" name="code_zip"  value="{{$user->code_zip}}" title="enter your password.">
                          </div>
                          <div class="col-xs-6">
                              <label for="text"><h4>Quốc gia</h4></label>
                               <select name="country" class="form-control" name="country">
                                                    @if($user->country=='VN')
                                                    <option value="VN" selected>Việt Nam</option>
                                                    <option value="Thai">Thái Lan</option>
                                                    <option value="Ind">Indonesia</option>
                                                    @endif
                                                     @if($user->country=='Thai')
                                                    <option value="VN" >Việt Nam</option>
                                                    <option value="Thai" selected>Thái Lan</option>
                                                    <option value="Ind">Indonesia</option>
                                                    @endif
                                                     @if($user->country=='Ind')
                                                    <option value="VN" >Việt Nam</option>
                                                    <option value="Thai">Thái Lan</option>
                                                    <option value="Ind" selected>Indonesia</option>
                                                    @endif
                                                     @if(!$user->country)
                                                    <option value="VN" >Việt Nam</option>
                                                    <option value="Thai">Thái Lan</option>
                                                    <option value="Ind">Indonesia</option>
                                                    @endif

                                                </select>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="text"><h4>Giới tính</h4></label>
                           
                        <select  class="form-control" name='gender'>
                                                    @if($user->gender==0)
                                                <option value="0" selected><p>Nữ</p></option>
                                                <option value="1" ><p>Nam</p></option>
                                                @else
                                                <option value="0" ><p>Nữ</p></option>
                                                <option value="1" selected><p>Nam</p></option>
                                                @endif
                                                    

                                                </select>
                                                
                                         
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success pull-right" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Lưu</button>
                                <!--<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>-->
                            </div>
                      </div>
                </form>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div>
    </form><!--/row-->
    <script type="text/javascript">
        $(document).ready(function() {

    
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.avatar').attr('src', e.target.result);
            }
    
            reader.readAsDataURL(input.files[0]);
        }
    }
    

    $(".file-upload").on('change', function(){
        readURL(this);
    });
});
    </script>
@endsection