<?php

namespace App\Http\Controllers\Admin\Auth;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use vendor\laravel\ui\auth-backend\AuthenticatesUsers;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Buku;
use Session;
use DB;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function LoginForm(){
        return view('admin.login');
    }
    public function RegisterForm(){
        return view('user.register');
    }

    public function logining(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(auth()->attempt(['email' => $request->email, 'password' => $request->password]))
        {
            if(auth()->user()->role_id == 1 ){
                $email = $request->input('email');
                
                $user = DB::table("users")->where("email", $email)->get();
              
                $userID = $user[0]->id_user;
                
            Session::put('idUser', $userID);
                // \Session::put('success','Anda berhasil Login');
                // return redirect()->route('admin.home');
                return redirect()->route('bukuhome')->with('success','Anda berhasil Login');
            }else {
                // \Session::put('success','Anda berhasil Login');
                $email = $request->input('email');
                
                $user = DB::table("users")->where("email", $email)->get();
                // dd($user);
                $userID = $user[0]->id_user;
                
            Session::put('idUser', $userID);
                return redirect()->route('homeuser')->with('success','Anda berhasil Login');
            }
        }else{
            // return back()->with('error','email atau password salah');
            return redirect()->route('login-form')->withErrors(['msg' => 'Email atau Password yang anda masukkan salah']);
        }
    }

    //function buat daftar user baru
    public function register(Request $request)
    {
        $user = $request -> validate([
            'name'  => 'required',
            'email'  => 'required',
            'password'  => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            
          ],[
              'name.required'  => 'Judul Buku wajib diisi',
              'email.required'  => 'Nama Penerbit wajib diisi',
              'password.required'  => 'Tahun Terbit wajib diisi',
              'telp.required'  => 'Nama Pengarang wajib diisi',
              'alamat.required' => 'Jumlah Buku wajib diisi',
            ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->telp = $request->telp;
        $user->alamat = $request->alamat;
        $user->role_id = 2;
        $user->save();

        return redirect()->route('login-form');
    }

    
    
}
