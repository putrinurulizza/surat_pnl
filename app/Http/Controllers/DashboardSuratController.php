<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSuratController extends Controller
{
    public function index()
    {
        return view('dashboard.surat');
    }
}
