<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        return view('account', compact('user'));
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|unique:posts|max:255',
            'surname' => 'required',
        ]);
    }
}
