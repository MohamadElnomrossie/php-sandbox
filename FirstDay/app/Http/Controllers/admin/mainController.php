<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function home(){
        return view('welcome');
    }
}
