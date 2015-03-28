<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

//    /**
//     * Create a new controller instance.
//     *
//     */
//	public function __construct()
//	{
//		$this->middleware('auth');
//	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}


    /**
     * @param Request $request
     * @return $this
     */
    public function initOneRepMax(Request $request)
    {
        $validation_flag = false;

        if ($validation_flag) {
            return redirect('home')
                ->withInput($request->all())
                ->withErrors('errors!!');
        } else {

            //TODO
            //Model logic

            Maxes::create([

                'bench' => $request['bench'],
                'squat' => $request['squat'],
                'deadlift' => $request['deadlift'],
                'overhead_press' => $request['overhead_press']

            ]);

            return redirect('routine_details');
        }

    }

    public function initGymCoord(Request $request)
    {

        return viewm('home');
    }



}
