<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    public function product_type(){
    	return $this->belongsTo('App\ProductType','id_type','id');
    }
    public function bill_detail(){
    	return $this->hasMany('App\BillDetail','product','id');
    }
    public function listImage(){
    	return $this->hasMany('App\listImage','id_sp','id');
    }
}
