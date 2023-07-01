<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.app');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }

}
