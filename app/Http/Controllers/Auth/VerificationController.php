<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Auth\Events\Verified;
use Session;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be resent if the user did not receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
    public function verify(Request $request)
    {
        
        // dd($request->route('id'));
        // // dd(date('d-m-Y H:i:s', '1539178678'));
        // dd($request->user()->getKey());
        // dd($request->user()->markEmailAsVerified());
        // if ($request->route('id') == $request->user()->getKey() &&
        //     $request->user()->markEmailAsVerified()) {
        //     event(new Verified($request->user()));
        // }
            event(new Verified($request->user()));
        Session::flash('alert', 'Verified successfully.');
        // Session::flash('loginModal', 1);
        return redirect('/');
    }
}
