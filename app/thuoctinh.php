<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thuoctinh extends Model
{
    protected $table = "thuoctinh";
    public function product_type(){
    	return $this->belongsTo('App\ProductType','id','id_loai');
    }

}
