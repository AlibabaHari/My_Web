<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[
	'as'=>'trangchu',
	'uses'=>'PageController@getIndex'

]);


Route::get('check_out_2',[
	'as'=>'check_out',
	'uses'=>'PageController@check_out'
]);
Route::post('check_out',[
	'as'=>'dat_hang_2',
	'uses'=>'PageController@postCheck_out'
]);
Route::get('/chitietsanpham-{id}',[
	'as'=>'chitiet',
	'uses'=>'PageController@getChiTiet'
]);
Route::get('/loaisanpham-{type}',[
	'as'=>'loaisanpham',
	'uses'=>'PageController@getLoaiSp'
]);

Route::get('/addToCart-{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@themgiohang'
]);

Route::post('/add-ToCart-{id}',[
	'as'=>'themgiohang_2',
	'uses'=>'PageController@them_giohang'
]);

Route::get('/delete-cart-{id}',[
	'as'=>'xoa_sp_giohang',
	'uses'=>'PageController@xoasptrongcart'
]);
Route::get('/cart',[
	'as'=>'cart',
	'uses'=>'PageController@cart'
]);
Route::get('/check_out',[
	'as'=>'checkout',
	'uses'=>'PageController@check_out'
])->middleware('auth');;
Route::post('/dathang',[
	'as'=>'dat_hang',
	'uses'=>'PageController@dat_hang'
]);
Route::get('/dang_ki',[
	'as'=>'dang_ki',
	'uses'=>'PageController@get_dang_ki'
]);

Route::post('dang_ki_2',[
	'as'=>'dang_ki_2',
	'uses'=>'PageController@post_dang_ki'
]);
Route::get('dang_nhap',[
	'as'=>'dang_nhap',
	'uses'=>'PageController@get_dangnhap'
]);


Route::post('dang_nhap',[
	'as'=>'dang_nhap_2',
	'uses'=>'PageController@post_dangnhap'
]);

Route::get('/dang_xuat',[
	'as'=>'dangxuat',
	'uses'=>'PageController@dang_xuat'
]);
Route::get('/dash_board',[
	'as'=>'dash_board',
	'uses'=>'AdminController@getIndex'
]);
Route::get('/chitietbill-{id}',[
	'as'=>'bill_detail',
	'uses'=>'AdminController@xemChiTietBill'
]);
Route::post('/editbill-{id}',[
	'as'=>'edit_bill',
	'uses'=>'AdminController@editBill'
]);
Route::get('/product_dashboard',[
	'as'=>'product_dashboard',
	'uses'=>'AdminController@get_product_dashboard'
]);
Route::get('/create_product',[
	'as'=>'create_product',
	'uses'=>'AdminController@get_create_product'
]);
Route::post('/create_new_product',[
	'as'=>'create_product_new',
	'uses'=>'AdminController@post_create_product'
]);
Route::get('/xoa-{id}',[
	'as'=>'xoa',
	'uses'=>'AdminController@xoa_sanpham'
]);
Route::get('/edit-{id}',[
	'as'=>'edit',
	'uses'=>'AdminController@edit_sanpham'
]);
Route::post('/edit-product-{id}',[
	'as'=>'edit-product',
	'uses'=>'AdminController@post_edit_sanpham'
]);

Route::get('/xem-doanh-thu',[
	'as'=>'view_doanhthu',
	'uses'=>'AdminController@get_doanh_thu'
]);
Route::get('/user_dashboard',[
	'as'=>'user_dashboard',
	'uses'=>'AdminController@get_user'
]);
Route::get('/profile_user',[
	'as'=>'profile_user',
	'uses'=>'PageController@profile_user'
]);
Route::get('/profile_user_{id}',[
	'as'=>'thongtin_user',
	'uses'=>'AdminController@thongtin_user'
]);
Route::get('/edit_user',[
	'as'=>'edit_user',
	'uses'=>'PageController@get_edit_profile'
]);
Route::post('/edit_profile',[
	'as'=>'edit_profile',
	'uses'=>'PageController@post_edit_profile'
]);
Route::get('/bill_watcher',[
	'as'=>'bill_watcher',
	'uses'=>'PageController@get_watch_bills'
]);
Route::get('/customer_dashboard',[
	'as'=>'customerdashboard',
	'uses'=>'PageController@get_customer_dashboard'
]);
Route::get('/deletebill_{id}',[
	'as'=>'deletebill',
	'uses'=>'PageController@delete_bill'
]);
Route::get('/detailbill_{id}',[
	'as'=>'detailbil',
	'uses'=>'PageController@detail_bill'
]);
Route::post('/sua_chuc_vu_{id}',[
	'as'=>'sua_chuc_vu',
	'uses'=>'AdminController@sua_chuc_vu'
]);
Route::get('/xem_user_{id}',[
	'as'=>'thongtin_user',
	'uses'=>'AdminController@xem_user'
]);
Route::get('/xoa_user_{id}',[
	'as'=>'xoa_user',
	'uses'=>'AdminController@xoa_user'
]);





























