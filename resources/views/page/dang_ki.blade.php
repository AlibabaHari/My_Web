@extends('master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

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
                    <img src="source/dangki/images/form-img.jpg" alt="">
                    <div class="signup-img-content">
                        <h2>Đăng kí ngay </h2>
             
                    </div>
                </div>
                <div class="signup-form">
                    @if(count($errors)>0)
                    @foreach($errors as $err)
                    <li>{{$err}}</li>
                    @endforeach
                    @endif
                    <form method="POST" action ="{{route('dang_ki_2')}}" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">Họ</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Tên</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>
                                <div class="form-input">
                                    <label for="company" class="required">Công ty/ Cơ quan/ Trường học</label>
                                    <input type="text" name="company" id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Số điện thoại</label>
                                    <input type="text" name="phone" id="phone" />
                                </div>
                                <div class="form-input">
                                    <label for="pass" class="required">Mật khẩu</label>
                                    <input type="text" name="pass" id="pass" />
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Quốc gia</label>
                                        
                                    </div>
                                    <div class="select-list">
                                        <select name="country" id="meal_preference">
                                            <option value="VN">Việt Nam</option>
                                            <option value="Thai">Thái Lan</option>
                                            <option value="Ind">Ấn Độ</option>
                                        </select>
                                    </div>
                                </div>
                            
                                    <div class="label-flex">
                                        <label for="payment">Giới tính</label>
                                 
                                    </div>
                                          
                                        
                                        <div >
                                            <select class="mdb-select md-form" name ='gender'>
                                                <option  value=1>Nam

                                           </option>
                                            <option class=form-control" value=0>Nữ

                                           </option>
                                            </select>
                                        </div>
                                        
                                   
                     
                                <div class="form-input">
                                    <label for="chequeno">Địa chỉ</label>
                                    <input type="text" name="address" id="chequeno" />
                                </div>
                                <div class="form-input">
                                    <label for="Code-Zip">Code-Zip</label>
                                    <input type="text" name="code_zip" id="code_zip" />
                                </div>
                                <div class="form-input">
                                    <label for="payable">Thành phố</label>
                                    <input type="text" name="city" id="payable" />
                                </div>
                                 <div class="form-input">
                                    <label for="re_pass" class="required">Lặp lại mật khẩu</label>
                                    <input type="text" name="re_pass" id="re_pass" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
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