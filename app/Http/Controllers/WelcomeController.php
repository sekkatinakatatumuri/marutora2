<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome', [
            'keyword' => '',
            'items' => '' 
        ]);
    }
    
    public function create()
    {
        $items = [];
        $kitems = [];
        $cityname = request()->cityname;
        $countrycode = request()->countrycode;
        $keyword = $cityname . $countrycode;
        
        if ($countrycode === 'uk') {
            $kurl = "http://api.aoikujira.com/kawase/json/jpy";
            $kjson = file_get_contents($kurl);
            $kitems = json_decode($kjson,true);
        }
        
        if ($keyword) {
            $location = $keyword;
            $units = "metric";
            $APIKEY = "3baebe8732d7455a542057847c0e17f7";
        
            $url = "http://api.openweathermap.org/data/2.5/weather?q=" . $location . "&units=" . $units . "&appid=" . $APIKEY;
            $json = file_get_contents($url);
            $items = json_decode($json,true);
            logger($items); // これをかくとサーバログに出てきます
        }
        
        return view('welcome', [
            'keyword' => $keyword,
            'items' => $items,
            'kitems' => $kitems,
        ]);
    }
}
