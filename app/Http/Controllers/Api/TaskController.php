<?php

namespace App\Http\Controllers\Api;

use App\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index(){
        return Task::find(1);
    }
}
