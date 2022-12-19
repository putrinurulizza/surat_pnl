<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardJurusanController extends Controller
{
    public function index()
    {
        return view('dashboard.jurusan');
    }
}
