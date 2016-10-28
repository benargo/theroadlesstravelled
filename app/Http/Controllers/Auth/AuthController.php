<?php

namespace App\Http\Controllers\Auth;

use Socialite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    /**
     * Redirect the user to the Battle.net authentication page.
     *
     * @return Response
     */
    public function redirectToProvider(Request $request)
    {
        if ($request->has('return'))
        {
            $request->session()->put('returnUrl', $request->input('return'));
        }

        $request->session()->put('bnet.region', config('services.battlenet.region'));

        return Socialite::with('battlenet')->redirect();
    }

    /**
     * Obtain the user information from Battle.net.
     *
     * @return Response
     */
    public function handleProviderCallback(Request $request)
    {
        $user = Socialite::driver('battlenet')->user();

        $request->session()->put('token', $user->token);

        if ($request->session()->has('returnUrl'))
        {
            return redirect($request->session()->pull('returnUrl'));
        }

        return redirect('/');
    }
}
