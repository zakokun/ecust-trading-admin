<?php

namespace App\Controllers;

class Trade extends BaseController
{
    public function list()
    {
        return view('trade/trade');
    }
    public function showAdd()
    {
        return view('trade/add');
    }
}
