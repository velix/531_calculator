<?php namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class RoutineDetailsController extends Controller {

	public function index()
    {
        $user = Auth::user();

        $weights = $user->maxes;
        return view('routine_details')->with(compact('weights'));
    }

}
