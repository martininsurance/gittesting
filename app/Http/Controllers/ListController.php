<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;

class ListController extends Controller
{
    public function index(){
        // this is the testing module for list 1st branch.
        $list_data=Lists::orderBy('id','desc')->get();
        return view('lists/index',compact('list_data'));
    }

    public function create(){
        return view('lists/create');
    }
}
