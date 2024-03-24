<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('Admin/login');
    }
    public function login(Request $request)
    {
        return view('Admin/admin');
    }
}
