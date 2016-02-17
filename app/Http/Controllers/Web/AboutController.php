<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = "Vacation Planning.Vacation Planning.Vacation Planning.Vacation Planning.Vacation Planning";
        return view('web.about.index')
                ->with('data',$data);
    }

}
