<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemilik;
use App\Models\Tenant;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
     /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $pemiliks = DB::table('pemiliks')->count();
        $tenants = DB::table('tenants')->count();
        $pengelolas = DB::table('pengelolas')->count();
        $pasars = DB::table('pasars')->count();
        return view('home' , compact('pemiliks','tenants','pengelolas','pasars'),[
            "title" => "Dashboard",
            "active" => 'dashboard',
            
        ]);
    }
}

