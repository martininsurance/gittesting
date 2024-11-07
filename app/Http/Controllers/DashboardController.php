<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demo;
use App\Models\Note;

class DashboardController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(){
        $demo=demo::get();
        $note=Note::get();
        return view('dashboard/index',compact('demo','note'));
    }

    public function create(Request $request){
        return view('dashboard/create');
    }

    public function __destruct()
    {
        
    }
}
