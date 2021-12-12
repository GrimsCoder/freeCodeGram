<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data = DB::table('users')->get();
        $datas = DB::table('profile_user')->get();

        return view('index', [ 'data'=>$data, 'datas'=>$datas]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    }


