<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class DemoController extends Controller
{
    public function __construct()
    {
        ini_set('memory_limit','2M');
    }
    public function index(){
        $user=User::get();
        return view('demo/index',compact('user'));
    }
}
