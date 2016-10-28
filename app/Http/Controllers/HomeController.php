<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Redirect to Discord
     *
     * @return \Illuminate\Http\Response
     */
    public function discord(Request $request)
    {
        if ($request->session()->has('token'))
        {
            return redirect('https://discord.gg/WGHgqbp');
        }

        return redirect('login?return=discord');
    }

    /**
     * Redirect to TeamSpeak
     *
     * @return \Illuminate\Http\Response
     */
    public function teamspeak(Request $request)
    {
        if ($request->session()->has('token'))
        {
            return redirect('ts3server://ts.animorphus.com?password=guldan616');
        }

        return redirect('login?return=teamspeak');
    }
}
