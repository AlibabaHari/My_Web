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
class PageController extends Controller
{
    public function getIndex(){
      $slide = Slide::all();
      $newproduct = Product::where('trang_thai','Hiện')->orderby('created_at')->paginate(8);
      $top_rate = Product::where('trang_thai','Hiện')->orderbyRaw('star DESC')->paginate(4);
      $sale_product = Product::where('trang_thai','Hiện')->where('promotion_price','<>',0)->paginate(8);
  
    	return view('page.trangchu',compact('slide','newproduct','sale_product','top_rate'));
    }
   
      public function getCheckOutPage(){
    	return view('page.check_out');
    }
     public function getChiTiet(Request $req){
       $sanpham = Product::where('id',$req->id)->first();
        $newproduct = Product::where('trang_thai','Hiện')->orderby('created_at')->paginate(4);

       $listhinhanh = listImage::where('id_sp',$req->id)->get();
    	return view('page.chitiet',compact('sanpham','listhinhanh','newproduct'));
    }
    public function getLoaiSp($type){
      $sp_theoLoai = Product::where('id_type',$type)->paginate(9);
      $thuoctinh_theoLoai = Product::where('id_type',$type)->get();
      $tien_theoLoai = Product::where('unit_price','min')->get();
      $thuoctinh = thuoctinh::where('id_loai',$type)->get();
      $product_type = ProductType::all();
      $ten_loai = ProductType::where('id',$type)->first();
     
      return view('page.ProductGrid',compact('sp_theoLoai',
        'tien_theoLoai',
        'thuoctinh',
        'product_type',
        'ten_loai'));
    }
    public function them_giohang(Request $req,$id){
       $soluong = $req->soluong;

       $product = Product::find($id);
        $oldcart = Session('cart')? Session::get('cart'):null;
        $cart = new cart($oldcart);
        for($i=1; $i<= $soluong;$i++){
           $cart->add($product,$id);

        }
   
        $req ->session()->put('cart',$cart);
        return redirect()->back();
     

    }
    public function themgiohang(Request $req, $id){
      $product = Product::find($id);
      $oldcart = Session('cart')? Session::get('cart'):null;
      $cart = new cart($oldcart);
      
      $cart->add($product,$id);
      $req ->session()->put('cart',$cart);
      return redirect()->back();
    }
    public function xoasptrongcart($id){
      $oldcart = Session::has('cart')?Session::get('cart'):null;
      $cart = new cart($oldcart);
      $cart->removeItem($id);
      if(count($cart->items)>0){
        Session::put('cart',$cart);
      }else {
        Session::forget('cart');
      }
    
      return redirect()->back();
    }

    public function cart(){
      if(Session('cart')){
          $oldcart = Session::get('cart');
          return view('page.cart',['cart'=>Session::get('cart'), 'product_cart'=>$oldcart->items,'totalPrice'=>$oldcart->tongtien,'soluong'=>$oldcart->soluong]);
      } 
      return view('page.cart');
    }
   public function check_out(){

      if(Session('cart')){
         
        $oldcart = Session::get('cart');
          return view('page.check_out',['cart'=>Session::get('cart'), 'product_cart'=>$oldcart->items,'totalPrice'=>$oldcart->tongtien,'soluong'=>$oldcart->soluong]);
        
      }
 
      return Redirect::to('cart');
    }
    public function postCheck_out(Request $req){

      if(Session('user_session')){
        $cart = Session::get('cart');
        $user = Session::get('user_session');
        $bill = new Bill;
      $bill ->id_customer = $user->email;
      $bill ->date_order = date('Y-m-d');
      $bill ->total = $cart ->tongtien ;
      $bill->note = $req->note;
      $bill->trang_thai ='Chờ xác nhận';
      $bill->sdt_khac = $req->another_phone;
      if($req->ship_method_card){
         $bill->payment = "card";

      }else if($req->ship_deliver){
        $bill->payment = "deliver";
      }
     
      $bill->address_another =$req->another_address;
      $bill->save();
      foreach ($cart->items as $key => $value) {
        $billDetail = new BillDetail;
        $billDetail ->id_bill= $bill->id;
        $billDetail->product = $key;
        $billDetail ->quantity =$value['qty'];
        $billDetail ->unit_price =($value['price']/$value['qty']);
        $billDetail->save();

      }
      Session::forget('cart');
      return Redirect::to('customer_dashboard');
      }

    }
     public function get_dang_ki(){
    
      
      return view('page.dang_ki');
    }
    public function post_dang_ki(Request $req){
      $this->validate($req,[
        'email'=>'required|email|unique:users,email',
        'pass' =>'required|min:6|max:20',
        're_pass'=>'required|same:pass',
        
          'email.required'=>'Vui lòng nhập email',
          'email.email'=>'Không đúng định dạng email',
          'email.unique'=>'Email đã có người sử dụng',
          'pass.required'=>'Vui lòng nhập pass',
          're_pass.required'=>'Vui lòng nhập lại pass',
          're_pass.same'=>'Mật khẩu không giống nhau',
          'pass.min'=>'Mật khẩu ít nhất 6 kí tự',
          'pass.max'=>'Mật khẩu nhiều nhất 20 kí tự',
        ]
      );
 

      
      $user = new user();
      $user ->phone = $req ->phone;
      if($req->gender_male)
      $user ->gender = 1;
      else
      $user ->gender = 0;

      $user ->password = Hash::make($req ->pass);
      $user ->country = $req ->country;
      $user ->email = $req ->email;
      $user ->first_name = $req ->first_name;
      $user ->last_name = $req ->last_name;
    
      $user ->address= $req->address;
      $user ->city = $req->city; 
      $user ->code_zip = $req ->code_zip;
      $user->save();
      
      return redirect()->back()->with('thanhcong','Đăng kí thành công');
      
    }
    public function get_dangnhap(){

      return view('page.dang_nhap');
    }
    public function post_dangnhap(Request $req){
   
      $user_data = $req->only('email', 'password');

      if(Auth::attempt($user_data)){   

        $user = Auth::user();
        if($user->user_type=='admin'){
          print_r('okk');
        }
        $user_session= new user_session($user->email,$user->last_name,$user->password, $user->address,$user->user_type);
         Session::put('user_session',$user_session);
         Session::put('user_name',$user->last_name);
         Session::put('user_type',$user->user_type);
         if($user_session ->user_type=='admin')
         {
          return Redirect::to('dash_board');

         }else{
            return Redirect::to('/');

         }
         

        

      }else {
       
     return redirect()->back()->with('error','dang nhap khong thanh cong');
      }

    }
    public function CheckOut_action(){

      
    }
    public function dang_xuat(){

      if(Session('user_session')){
        Session::forget('user_session');
      }

    return Redirect::back();
    
    }
    public function profile_user(){
       if(!Session('user_session')){
        print_r('oks');

       }else{ 
       
        $user = User::where('email',Session::get('user_session')->email)->first();
   
        $bill= Bill::where('id_customer',$user->email)->where('trang_thai', 'Đã thanh toán')->get();
        
        return view('page.profile_user',compact('user','bill'));
      }
    }
      public function post_edit_profile(Request $req){
         if(!Session('user_session')){
          return;
         
         }else{ 
          $email = Session::get('user_session')->email;
          
                if(!$req->avatar){
                  User::where('email',$email)->update(array('phone' =>$req->phone ,'gender'=>$req->gender,'address'=>$req->address,
                  'last_name'=>$req->last_name,'first_name'=>$req->first_name,'city'=>$req->city,'country'=>$req->country));
                 
                }else{
                $image = $req->file('avatar');   
                $name = $image->getClientOriginalName();
                $name_image = current(explode('.', $name));
                $extension = $image->getClientOriginalExtension();
                $new_name= $name_image.rand(0,100).'.'.$extension;
                $destinationPath = public_path('source/images/user_avatar');
                $image->move($destinationPath, $new_name);
               
                 User::where('email',$email)->update(array('phone' =>$req->phone ,'gender'=>$req->gender,'address'=>$req->address,
                  'last_name'=>$req->last_name,'first_name'=>$req->first_name,'city'=>$req->city,'country'=>$req->country,'image'=>$new_name));
                }

           

            return Redirect::to('edit_user');   
   
              
         }        
        
       

    }
    public function get_edit_profile(Request $req){
         if(!Session('user_session')){
          return;

         }else{ 
          $user = User::where('email',Session::get('user_session')->email)->first();

         }        
        
        return view('page.edit_profile',compact('user'));    
    
    }
    public function get_watch_bills(){
       if(!Session('user_session')){
          return;
         }else{ 
          $user = User::where('email',Session::get('user_session')->email)->first();
          $bill= Bill::where('id_customer',$user->email); 
          $bill_waiting=$bill->where('trang_thai','Chờ xác nhận')->get();
          $bill_checked=$bill->where('trang_thai','Đã xác nhận')->get();
          $bill_moving=$bill->where('trang_thai','Đang vận chuyển')->get();
          $bill_done=$bill->where('trang_thai','Đã thanh toán')->get();


         }        
        return view('page.theo_doi_bill',compact('user','bill_waiting','bill_checked','bill_moving','bill_done'));    
    }
     public function get_customer_dashboard(){
       if(!Session('user_session')){
          return;
         }else{ 
          $user = User::where('email',Session::get('user_session')->email)->first();
          $bill= Bill::where('id_customer',$user->email); 
          $bill= $bill->orderbyRaw('created_at Desc')->get();
          
           return view('page.customer_dashboard',compact('user','bill'));  


         }        
         
    }
       public function delete_bill($id){
       if(!Session('user_session')){
          return;
         }else{ 
          $user = User::where('email',Session::get('user_session')->email)->first();
          BillDetail::where('id_bill',$id)->delete();
          Bill::where('id',$id)->delete(); 
          return Redirect::to('customer_dashboard');
         
         }        
        
    }
     public function detail_bill($id){
       if(!Session('user_session')){
          return;
         }else{ 
         $BillDetail = BillDetail::select('*')
          ->join('Products', 'bill_detail.product', '=', 'Products.id')
          ->where('id_bill', $id)
          ->get();  
          $customer = User::select('*')->join('bill','users.email','=','bill.id_customer')->where('bill.id',$id)->first();
          $bill = Bill::select('*')
          ->join('bill_detail', 'bill_detail.id_bill', '=', 'bill.id')
          ->where('id_bill', $id)
          ->first();  
        return view ('page.bill_detail_user',compact('BillDetail','customer','bill'));
         }        
        
    }


}
