<?php

namespace App\Http\Controllers;

class FundController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('client.fund');
    }
}
