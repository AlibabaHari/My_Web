<?php

namespace App;


class cart 
{
    public $items =null;
    public $soluong = 0;
    public $tongtien = 0;
    public function __construct($oldCart){
        if($oldCart){
            $this->items = $oldCart->items;
            $this->soluong = $oldCart->soluong;
            $this->tongtien = $oldCart->tongtien;
        }
    }

    public function add($item,$id){
        $money=0;
        if($item->promotion_price==0){
            $money = $item->unit_price;
        }else{
            $money = $item->promotion_price;
        }

        $giohang =['qty'=> 0 ,'price'=> $money, 'item'=> $item];
        if ($this->items){
            if(array_key_exists($id,$this->items)){
                $giohang = $this->items[$id];
            }
        }
        $giohang['qty'] ++;
        $giohang['price'] = $money * $giohang['qty'];
        $this->items[$id] = $giohang;
        $this->soluong ++;
        
            $this->tongtien += $money;
       
        
    }

    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price']-=$this ->items[$id]['item']['price'];
        $this->soluong--;
        $this->tongtien -= $this->items[$id]['item']['price'];
        if($this->items[$id]['qty'] <=0){
            unset($this ->items[$id]);
        }
    }

    public function removeItem($id){
        $this->soluong -= $this ->items[$id]['qty'];
        $this ->tongtien -=$this ->items[$id]['price'];
        
        unset($this->items[$id]);
    }

    
    

}
