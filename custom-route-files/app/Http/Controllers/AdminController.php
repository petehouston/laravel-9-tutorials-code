<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return 'Admin Dashboard';
    }

    public function showSettings()
    {
        return 'Admin Settings';
    }
}
