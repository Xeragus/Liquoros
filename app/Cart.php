<?php

namespace App;
//()
class Cart
{
    /** cartItems is an array and will store new items as: $cartItems[$id] = newItem */
    public $cartItems = null;
    public $cartTotalQuantity = 0;
    public $cartTotalPrice = 0;

    public function __construct($oldCart){
        if ($oldCart){
            $this->cartItems = $oldCart->cartItems;
            $this->cartTotalQuantity = $oldCart->cartTotalQuantity;
            $this->cartTotalPrice = $oldCart->cartTotalPrice;
        }
    }

    public function add($item, $id) {
        $newCartItem = ['item' => $item, 'price' => $item->price, 'qty' => 0];
        if ($this->cartItems) {
            if (array_key_exists($id, $this->cartItems)) {
                $newCartItem = $this->cartItems[$id];
            }
        }
        $newCartItem['qty']++;
        $newCartItem['price'] = $item->price * $newCartItem['qty'];
        $this->cartItems[$id] = $newCartItem;
        $this->cartTotalQuantity++;
        $this->cartTotalPrice += $item->price;
    }

    public function remove($id) {
        $this->cartTotalQuantity -= $this->cartItems[$id]['qty'];
        $this->cartTotalPrice -= $this->cartItems[$id]['price'];
        unset($this->cartItems[$id]);
    }
}
