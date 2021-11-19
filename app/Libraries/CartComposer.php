<?php

namespace App\Libraries;

use Illuminate\View\View;
use Cart;

class CartComposer
{
    /**
     * Bind data to the view.
     * Bind data vào view. $view->with('ten_key_se_dung_trong_view', $data);
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $carts = Cart::content();
		$cartTotal = Cart::total(0,3,'.');
        $cartSubTotal = Cart::subtotal(0,3,'.');
        $cartTax = Cart::tax(0,3,'.');
        $view->with(['carts' => $carts, 'cartTotal' => $cartTotal, 'cartSubTotal' => $cartSubTotal, 'cartTax' => $cartTax]);
    }
}