<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin-panel');
    }
    public function index2(){
        return view('admin-page');
    }
    public function index1(){
        return view('home-page-edit');
    }
}
