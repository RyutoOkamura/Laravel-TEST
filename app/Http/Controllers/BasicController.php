<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create($param)
    {
        $item = [
            'param' => $param
        ];
        return view('create', $item);
    }
}
