<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OutputsController extends Controller
{
    public function create()
    {
        $keyword = 'hoge';
        # $keyword = request()->keyword;
        $items = [];
        
        $location = "Fukuoka-shi,jp";
        # $location = $keyword;
        $units = "metric";
        $APIKEY = "3baebe8732d7455a542057847c0e17f7";
        
        $url = "http://api.openweathermap.org/data/2.5/weather?q=" . $location . "&units=" . $units . "&appid=" . $APIKEY;
        $json = file_get_contents($url);
        $items = json_decode($json,true);
        
        return view('welcome', [
            'keyword' => $keyword,
            'items' => $items,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
