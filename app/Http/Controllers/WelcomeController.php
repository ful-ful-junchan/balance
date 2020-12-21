<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends AppController
{
    /**
     * ログインが必要か
     * @return boolean
     */
    protected function _isRequireAuthorize()
    {
        return false;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $this->render('welcome');
    }
}
