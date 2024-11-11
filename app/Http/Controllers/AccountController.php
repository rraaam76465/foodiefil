<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        // You can pass user data or any other relevant info here if needed
        $user = Auth::user();
        return view('account.index', compact('user'));
    }
}