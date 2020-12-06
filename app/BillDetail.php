<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table = "bill_detail";
    public function product(){
    	return $this->hasMany('App\Product','id','product');
    }
    public function bill(){
    	return $this->belongsTo('App\Bill','id_bill','id');
    }

}
