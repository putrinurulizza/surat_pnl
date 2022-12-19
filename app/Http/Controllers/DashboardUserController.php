<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    function index()
    {
        return view('dashboard.user');
    }

    public function create(Request $request)
    {
        return view('dashboard.form_user', [
            // 'title' => 'Tambah User Baru',
            // 'users' => User::all(),
        ]);
    }
}
