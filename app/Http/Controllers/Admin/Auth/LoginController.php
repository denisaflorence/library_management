<?php

namespace App\Http\Controllers\Admin\Auth;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use vendor\laravel\ui\auth-backend\AuthenticatesUsers;
use Auth;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    // use AutheticatesUsers;
    // protected $guard='adminMiddle';
    // protected $redirectTo='admin/home';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // public function guard(){
    //     return auth()->guard('adminMiddle');
    // }
    //
    public function LoginForm(){
        // if(auth()->user()){
        //     return back();
        // }
        return view('admin.login');
    }
    public function RegisterForm(){
        // if(auth()->user()){
        //     return back();
        // }
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
                \Session::put('success','Anda berhasil Login');
                return redirect()->route('admin.home');
            }else {
                \Session::put('success','Anda berhasil Login');
                return redirect()->route('user.home');
            }
        }else{
            return back()->with('error','email atau password salah');
        }
    }
    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role_id = 2;
        $user->save();

        return redirect()->route('login-form');
    }
}
