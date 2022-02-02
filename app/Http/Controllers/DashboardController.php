<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users =  User::all();
        $teams =  Team::all();
        return view('dashboard.home.index',compact('users','teams'));
    }
}
