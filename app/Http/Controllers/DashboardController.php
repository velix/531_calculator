<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Maxes;

class DashboardController extends Controller {

    public function index()
    {

        if(Auth::check())
        {
            return view('dashboard');
        }

        return view('index');
    }




}