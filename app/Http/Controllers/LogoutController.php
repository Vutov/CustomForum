<?php namespace Forum\Http\Controllers;

use Forum\Http\Requests;
use Forum\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        Auth::logout();
        return redirect('home'); //TODO make page for logout only!
	}

}
