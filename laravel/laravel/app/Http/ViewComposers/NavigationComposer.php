<?php

namespace App\Http\ViewComposers;


use Illuminate\View\View;

class NavigationComposer
{
    public function compose(View $view)
    {
        $view->items = [
            'Home' => '#',
            'Links' => '#'
        ];
    }
}