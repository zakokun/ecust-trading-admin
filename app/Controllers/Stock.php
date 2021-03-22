<?php

namespace App\Controllers;

class Stock extends BaseController
{
    public function list()
    {
        $data["total"] = 10;
        return view('stock/list', $data);
    }
}
