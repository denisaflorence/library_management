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
        return view('admin.home');
    }
    public function user(){
        return view('user.home');
    }
    // public function buku(){
    //     $data_buku = Buku::all();
    //     return view('user.home', compact('data_buku'));
    //     // $users = User::get();
    //     // return view('user.home',compact('users'));
    // }
}
