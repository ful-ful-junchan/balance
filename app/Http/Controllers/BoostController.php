<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoostController extends AppController
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
     * Get
     * @param string $name
     */
    public function index($name)
    {
        exit("aaa = " . $name);
        $this->_pageName = 'bootstrap.'.$name;
        $this->render();
    }
}
