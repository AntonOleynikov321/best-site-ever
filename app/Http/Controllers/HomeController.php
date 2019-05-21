<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;



    /**
     * Create a new controller instance.
     *
     * @return void
     */

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Requests $request)
    {
        return view('cabinet.index');
    }
