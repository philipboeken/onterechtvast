<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JudgementDayController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
