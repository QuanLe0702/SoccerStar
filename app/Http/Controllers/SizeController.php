<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function size()
    {
        return view('user.pages.size');
    }
}
