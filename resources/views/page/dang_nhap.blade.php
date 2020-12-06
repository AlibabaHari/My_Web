@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập Loren</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="source/dangki/fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="source/dangki/vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="source/dangki/css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="source/images/logo/4.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Đăng nhập ngay </h2>
             
                    </div>
                </div>
                
               
                <div class="signup-form">  
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />           
               
                   
                        
                    <form method="POST" action ="{{route('dang_nhap_2')}}" class="register-form" id="register-form">
                         @if ($errors->any()>0)
                     <div class ='alert alert-danger success-block'>
                        @foreach($errors->all() as $er)
                         <strong> {{$er}}</strong>
                         @endforeach
                      </div>
                    @endif
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="user" class="required">Email</label>
                                    <input type="text" name="email"  />
                                </div>
                                <div class="form-input">
                                    <label for="pass" class="required">Mật khẩu</label>
                                    <input type="text" name="password"  />
                                </div>
                                <div> <a>Bạn chưa có tài khoản? Hãy đăng kí</a></div>
                                <div class="form-radio">    
                                  
                                    <a  href="{{route('dang_ki')}}" value=1 checked>Đăng ký</a>
                               
                                     
                                </div>
                               
                                  
                        <div class="form-submit">
                            <input type="submit" value="Vô" class="submit" id="submit"  />
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <!-- JS -->
    <script src="source/dangki/vendor/jquery/jquery.min.js"></script>
    <script src="source/dangki/vendor/nouislider/nouislider.min.js"></script>
    <script src="source/dangki/vendor/wnumb/wNumb.js"></script>
    <script src="source/dangki/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="source/dangki/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="source/dangki/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
 
@endsection