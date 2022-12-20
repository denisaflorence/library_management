<?php

namespace App\Http\Controllers;
use Session;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function perform()
    {
        Session::flush();
        // Auth::logout();

        return redirect('/');
    }
}
