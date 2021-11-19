<?php

namespace App\Libraries;

use Illuminate\View\View;
use App\Product;

class ProductHotComposer
{
    /**
     * Bind data to the view.
     * Bind data vào view. $view->with('ten_key_se_dung_trong_view', $data);
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $productHot = Product::with('images')->where('status_hight_light',1)->get();
		
        $view->with('productHots', $productHot);
    }
}