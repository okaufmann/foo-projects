<?php

namespace App\Http\Controllers;

use App\Task;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Auth::user()->tasks()->with('list')->get();

        return view('home', compact('tasks'));
    }
}
