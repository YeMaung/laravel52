<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function __construct()
	{
		$this->middleware('iplogger');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.home.home');
    }
}
