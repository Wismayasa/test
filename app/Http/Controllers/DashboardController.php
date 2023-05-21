<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['page'] = 'dashboard';
        return view('page.dashboard.dashboard')->with($data);
    }
}
