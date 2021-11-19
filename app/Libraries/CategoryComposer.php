<?php

namespace App\Libraries;

use Illuminate\View\View;
use App\Category;

class CategoryComposer
{
    /**
     * Bind data to the view.
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $categorys = Category::with(['childrenRecursive'])->where('parent_id',0)->get();
        $view->with('categorys', $categorys);
    }
}