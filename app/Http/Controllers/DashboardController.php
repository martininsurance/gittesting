<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\demo;
use App\Models\Note;
use App\Models\User;
use App\Models\Lists;

class DashboardController extends Controller
{
    public function __construct()
    {
        
    }

    public function index(){
        $demo=demo::get();
        $note=Note::get();
        $user=User::get();
        $list=Lists::get();
        return view('dashboard/index',compact('demo','note','user','list'));
    }

    public function create(Request $request){
		$demo=demo::get();
        $note=Note::get();
        return view('dashboard/create',compact('demo','note'));
    }

    public function __destruct()
    {
        
    }
}
