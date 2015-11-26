<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function login()
    {
        return view ('auth.login');
    }
    public function logout()
    {
        return view ('auth.logout');
    }
    public function dashboard()
    {
        return view ('pages.dashboard'); 
    }

   
}
