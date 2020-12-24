<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use Auth;

class ViewComposer
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function compose(View $view)
    {
        // ログイン者情報
        if (Auth::check()) {
            $view->with('userInfo', Auth::user());
        }
    }
}
