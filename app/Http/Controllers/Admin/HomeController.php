<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\BukuController;
use App\Models\Buku;


class HomeController extends Controller
{
    //
    public function __construct()
    {
        
    }
    public function index(){
        return view('bukuhome');
    }
    public function user(){
        return view('homeuser');
    }
}
