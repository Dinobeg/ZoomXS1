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
    public function contacts()
    {
        return view ('pages.contacts');
    }
    public function admin()
    {
        return view ('pages.sideAdmin');
    }

   
}