<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function showItem($id = null)
    {
        return view('item-list');
    }

}
