<?php
namespace App\Http\Controllers;
use App\Http\Requests\JsonRequest;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Slide;
use App\Product;
use App\ProductType;
use Carbon\Carbon;
use App\cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Input;
use DB;

use Illuminate\Http\UploadedFile;
use Hash;
use File;
use Session;
use App\thuoctinh;
use App\Bill;
use App\BillDetail;

use App\listImage;
use App\User;
use App\user_session;

class AdminController extends Controller
{
	public function getIndex(){
		if(Session('user_session')){
		$email =Session::get('user_session')->email;
		$user = User::where('email',$email)->first();
		$bill_waiting = Bill::where('trang_thai','Chờ xác nhận')->get();
		$bill_check = Bill::where('trang_thai','Đã xác nhận')->get();
		$bill_moving = Bill::where('trang_thai','Đang vận chuyển')->get();
		$bill_done = Bill::where('trang_thai','Đã thanh toán')->get();
		return view ('page.dashboard',compact('bill_waiting','bill_check','bill_moving','bill_done','user'));
		
		}

		
	}
	public function xemChiTietBill($id){

		
		$BillDetail = BillDetail::select('*')
	    ->join('Products', 'bill_detail.product', '=', 'Products.id')
	    ->where('id_bill', $id)
	    ->get();	
	    $customer = User::select('*')->join('bill','users.email','=','bill.id_customer')->where('bill.id',$id)->first();
	    $bill = Bill::select('*')
	    ->join('bill_detail', 'bill_detail.id_bill', '=', 'bill.id')
	    ->where('id_bill', $id)
	    ->first();	
		return view ('page.BillDetail',compact('BillDetail','customer','bill'));

	}
	public function editBill(Request $req,$id){
		$Bill = Bill::where('id',$id)->update(['trang_thai'=>  $req->input('trangthai')]);
		return Redirect::back();


	}
	public function get_product_dashboard(){
		$products = Product::orderByRaw('created_at desc')->get();
		return view ('page.product_dashboard',compact('products'));
	
	}
	public function get_create_product(){
		$danhmuc = ProductType::all();
		return view ('page.create_product',compact('danhmuc'));
	}
	public function post_create_product(Request $req){
		$new_product = new Product;
		$new_product->name = $req->name;
		$new_product->description = $req->content;
		$new_product->unit_price=$req->giatruoc;
		$new_product->id_type =$req->type;
		$new_product->star=0;
		$new_product->new=1;

		$new_product->promotion_price=$req->khuyenmai;
		$new_product->trang_thai=$req->trang_thai;
		if($req->image_product){		
			$image = $req->file('image_product');		
			$name = $image->getClientOriginalName();
			$name_image = current(explode('.', $name));
			$extension = $image->getClientOriginalExtension();
			$new_name= $name_image.rand(0,100).'.'.$extension;
			$destinationPath = public_path('source/images/product');
			$image->move($destinationPath, $new_name);
			
			$new_product->image = $new_name;

		}else{
			$new_product->image = null;
		}
		
		$new_product->save();	

		return Redirect::to('product_dashboard');
	}
	public function xoa_sanpham($id){
		BillDetail::where('product',$id)->delete();
		$product = Product::find($id);
		 $image_path = public_path("public/source/images/product/",$product->image);
		if(File::exists($image_path)){

		    File::delete($image_path);

		  }else{

		    dd('File does not exists.');

		  }
		$product->delete();
		return Redirect::back();

	}
	public function edit_sanpham($id){
		$danhmuc = ProductType::all();
		$product = Product::where('id',$id)->first();
		return view('page.edit_product',compact('product','danhmuc'));

	}
	public function post_edit_sanpham(Request $req, $id){
		$product = Product::where('id',$id)->first();
		$product->name=$req->name;
		$product->id_type=$req->type;
		$product->description =$req->content;
		$product->unit_price=$req->giatruoc;
		$product->promotion_price=$req->khuyenmai;
		$product->trang_thai=$req->trang_thai;
	
			if(!$req->image_product){
				$product->save();
			}else{
			$image = $req->file('image_product');		
			$name = $image->getClientOriginalName();
			$name_image = current(explode('.', $name));
			$extension = $image->getClientOriginalExtension();
			$new_name= $name_image.rand(0,100).'.'.$extension;
			$destinationPath = public_path('source/images/product');
			$image->move($destinationPath, $new_name);
			$product->image = $new_name;
			$product->save();
			}
		
		
		return Redirect::to('product_dashboard');
		

	}
	public function get_doanh_thu(){
		$doanhthu = Bill::selectRaw('count(*) as dem, sum(total) as tong')
    ->where('trang_thai', '=', 'Đã thanh toán')
    ->get()
    ->groupBy(function($date) {
			return Carbon::parse($date->date_order)->format('m'); // grouping by years and its month
			});
  
		return view('page.doanh_thu',compact('doanhthu'));

	
	}
	public function get_user(){
		$users = User::all();

		return view('page.user_dashboars',compact('users'));
	}
	public function sua_chuc_vu(Request $req,$id){
	User::where('email',$id)->update(['user_type'=> $req->type]);
	

		return  Redirect::to('user_dashboard');
	}
	public function thongtin_user($id){

		$user = User::where('email',$id)->first();
   
      
        
        return view('page.profile_user',compact('user'));
	}
	public function xem_user($id){

		$user = User::where('email',$id)->first();       
        return view('page.view_profile',compact('user'));
	}
	public function xoa_user($id){
		Bill::where('id_customer',$id)->delete();

		User::where('email',$id)->delete();       
        return  Redirect::to('user_dashboard');
	}



}
