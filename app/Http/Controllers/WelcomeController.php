<?php 
namespace App\Http\Controllers;
use DB;
class WelcomeController extends Controller{
    
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function index()
    {
    	DB::table('role')->insert(
    ['r_name' => 'test']
);
        return view('index');
    }
}

