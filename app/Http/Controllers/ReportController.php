<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Line;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{


public function report(){

    return view('report');

}
}
