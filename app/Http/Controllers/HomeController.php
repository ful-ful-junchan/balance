<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends AppController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//         var_dump(\Auth::user());
        return $this->render('home');
    }
}
