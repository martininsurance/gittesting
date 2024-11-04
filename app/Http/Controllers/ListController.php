<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;

class ListController extends Controller
{
    public function index(){
        $list_data=Lists::get();
        return view('lists/index',compact('list_data'));
    }
}
