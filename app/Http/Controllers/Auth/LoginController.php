<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            auth()->user()->update([
                'last_login' => now()
            ]);
            if (auth()->user()->type == 'cbe') {
                if($request->next){
                    return redirect($request->next);
                }else{
                    return redirect()->route('cbe.home');
                }
            }else if (auth()->user()->type == 'department') {
                if($request->next){
                    return redirect($request->next);
                }else{
                    return redirect()->route('department.home');
                }
            }else if (auth()->user()->type == 'supervisor') {
                if($request->next){
                    return redirect($request->next);
                }else{
                    return redirect()->route('supervisor.home');
                }
            }else if (auth()->user()->type == 'institution') {
                if($request->next){
                    return redirect($request->next);
                }else{
                    return redirect()->route('institution.home');
                }
            }else{
                if($request->next){
                    return redirect($request->next);
                }else{
                    return redirect()->route('student.home');
                }
            }
        }else{
            return redirect()->route('login')
                ->with('error','Invalid Credential.');
        }

    }
}
