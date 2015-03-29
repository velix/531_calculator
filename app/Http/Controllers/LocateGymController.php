<?php namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\GymCoords;

class LocateGymController extends Controller {

    public function index()
    {

        if(Auth::check()) {
            return view("locateGym");
        }

        return view("index");

    }


    public function initGymCoord(Request $request)
    {

        $validation_flag = false;

        if ($validation_flag) {
            return redirect('locateGym')
                ->withInput($request->all())
                ->withErrors('errors!!');
        } else {

            $user = Auth::user();

            GymCoords::create([

                'latitude' => $request['lat'],
                'longitude' => $request['lon'],

                'user_id' => $user['id']

            ]);

            return redirect('dashboard/routine_details');
        }
    }





}