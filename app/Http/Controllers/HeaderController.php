<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HeaderController extends Controller
{
    public function setCountry()
    {
        $request = request();
        if (!$request->session()->has('locale')) {
            $infoIP = Array();
            $remote_addr = $request->server('REMOTE_ADDR');
            $infoIP = @unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$remote_addr));
            //$infoIP = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip=77.54.221.119'));
            //echo $infoIP['geoplugin_countryCode'];

            if (!$request->session()->has('locale') && isset($infoIP['geoplugin_countryCode']) && $infoIP['geoplugin_countryCode'] == 'PT')
                $locale = 'pt';
            else {
                if (!$request->session()->has('locale') && isset($infoIP['geoplugin_countryCode']) && $infoIP['geoplugin_countryCode'] == 'FR')
                    $locale = 'fr';
                else
                    $locale = 'en';
            }

            app()->setLocale($locale);
            $request->session()->put('locale', $locale);
        }
    }	
}
