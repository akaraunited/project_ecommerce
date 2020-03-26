<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;

class AuthController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
              ]);
 

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')), 
            ]);
            $user = Auth::guard()->attempt( $request->only('email', 'password'), $request->filled('remember'));
            
            if($user){
                $request->session()->regenerate();
                return redirect(route('app.index'));
            }else{
                throw ValidationException::withMessages([
                    'email' => [trans('auth.failed')],
                ]);
            }
    }


    public function login(Request $request){
        
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }



        $user = Auth::guard()->attempt( $request->only('email', 'password'), $request->filled('remember'));

        if($user){
            //store session 
            $request->session()->regenerate();
            return redirect(route('app.index'));
        }else{
            throw ValidationException::withMessages([
                'email' => [trans('auth.failed')],
            ]);
        }


    }

    protected function sendLockoutResponse(Request $request)
    {
        $seconds = $this->limiter()->availableIn(
            $this->throttleKey($request)
        );

        throw ValidationException::withMessages([
            $this->username() => [Lang::get('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ])],
        ])->status(Response::HTTP_TOO_MANY_REQUESTS);
    }

    public function logout(Request $request)
    {
        Auth::guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
    protected function loggedOut(Request $request)
    {
        //
    }



}
