<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardApproveController extends Controller
{
    public function index()
    {
        return view('dashboard.approve');
    }
}
