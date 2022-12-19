<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardApprovesiorController extends Controller
{
    public function index()
    {
        return view('dashboard.approvesior');
    }
}
