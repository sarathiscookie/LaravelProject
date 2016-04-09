<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('backend');
    }

    public function index(){
        return view('admin.dashboard');
    }
}