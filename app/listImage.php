<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class listImage extends Model
{
    protected $table = "listhinhanh";
    public function listImage(){
    	return $this->belongsTo('App\Product','id','id_sp');
    }
}
