<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\cart;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.  *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loaisp= ProductType::all();
            $view ->with('loaisp',$loaisp);
        });
        view()->composer('header',function($view){
           if(Session('cart')){
               $oldcart = Session::get('cart');
               $cart = new cart($oldcart);
               $view->with(['cart'=>Session::get('cart'), 'product_cart'=>$cart->items, 'totalPrice'=>$cart->tongtien,'soluong'=>$cart->soluong]);
           }      
        });   
        
    }
}
