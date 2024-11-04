<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demo;
class DemoController extends Controller
{
    public function __construct()
    {
        ini_set('max_execution_time', '300');
        ini_set('memory_limit', '512M'); 
    }
    public function index(){
        $demo=demo::get();
        return view('demo/demolist',compact('demo'));
    }
}
