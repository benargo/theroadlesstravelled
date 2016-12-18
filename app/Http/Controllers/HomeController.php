<?php

namespace App\Http\Controllers;

use Cache;
use Curl\Curl;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Redirect to Discord
     *
     * @return \Illuminate\Http\Response
     */
    public function discord(Request $request)
    {
        if ($request->session()->has('token'))
        {
            if (Cache::has('characters_'.$request->session()->get('token')))
            {
                $response = Cache::get('characters_'.$request->session()->get('token'));
            }
            else
            {
                $curl = new Curl;
                $curl->get('https://'. config('services.battlenet.region') .'.api.battle.net/wow/user/characters?access_token='.$request->session()->get('token'));

                if (! $curl->error)
                {
                    $response = $curl->response;
                }

                Cache::put('characters_'.$request->session()->get('token'), $response, Carbon::now()->addDay());
            }

            $valid_characters = array_filter($response->characters, function($c)
            {
                if (property_exists($c, 'guild'))
                {
                    return $c->guild == 'The Road Less Travelled' &&
                           ($c->guildRealm == 'Silvermoon' || $c->guildRealm == 'Chamber of Aspects');
                }
                return false;
            });

            return redirect('https://discord.gg/WGHgqbp');
        }

        $request->session()->flush();
        return redirect('login?return=discord');
    }
}
