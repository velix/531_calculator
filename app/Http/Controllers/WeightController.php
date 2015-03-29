<?php namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Maxes;

use Illuminate\Http\Request;

class WeightController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

    /**
     * Stores 1RM
     *
     * @param Request $request
     * @return $this
     */
    public function store(Request $request)
    {
        $validation_flag = false;

        if ($validation_flag) {
            return redirect('home')
                ->withInput($request->all())
                ->withErrors('errors!!');
        } else {

            $user = Auth::user();

            Maxes::create([

                'bench' => $request['bench'],
                'squat' => $request['squat'],
                'deadlift' => $request['deadlift'],
                'overhead_press' => $request['ohp'],

                'user_id' => $user['id']



            ]);



        return redirect('dashboard/routine_details');
        }

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


}
