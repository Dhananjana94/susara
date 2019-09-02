<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart){

      if ($oldCart){
        $this->items = $oldCart->items;
        $this->totalQty = $oldCart->totalQty;
        $this->totalPrice = $oldCart->totalPrice;
      }
    }
    public function add($item, $instrumentId){
      $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
      $storedItem = ['qty' => 0, 'item' => $item];
        if($this->items){
            if(array_key_exists($instrumentId, $this->items)){
              $storedItem = $this->items[$instrumentId];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$instrumentId] = $storedItem;
        $this->totalQty++;
        $this->totalPrice += $item->price;
    }
    //update cart Qty- reduce by one
    public function reduceQtyByOne($instrumentId) {
        $this->items[$instrumentId]['qty']--;
        $this->items[$instrumentId]['price'] = $this->items[$instrumentId]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$instrumentId]['item']['price'];

        if($this->items[$instrumentId]['qty'] <= 0){
          unset($this->items[$instrumentId]);
        }

    }
    //remove cart items all
    public function removeItemAll($instrumentId){
        $this->totalQty -= $this->items[$instrumentId]['qty'];
        $this->totalPrice -= $this->items[$instrumentId]['item']['price'];
        unset($this->items[$instrumentId]);
    }

}
