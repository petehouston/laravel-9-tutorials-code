<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showDashboard()
    {
        return 'User Dashboard';
    }

    public function showSettings()
    {
        return 'User Settings';
    }
}
