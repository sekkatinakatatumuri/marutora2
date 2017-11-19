<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'weather' => '',
            'exchange' => '',
            'news' => '',
        ]);
    }
    
    public function create()
    {
        # structure declaration
        $weather = [];
        $exchange = [];
        $news = [];
        
        # Request from national flag
        $city_code = request()->id;
        $currency_code = request()->ccode;
        $keyword = request()->keyword;
        
        # Request from combo box
        $select = request()->select;
        
        if($select) {
            $select_parameters =  explode("," ,$select);
            $city_code = $select_parameters [0];
            $currency_code = $select_parameters [1];
            $keyword = $select_parameters [2];
        }

        /**
         * currencylayer
         */
        if ($city_code) {
            # set API Endpoint, access key, required parameters
            $endpoint = "convert";
            $access_key = "1235f3c5a380ac1b4b50e90cc01aefc5";
            $from = $currency_code;
            $to = "JPY";
            $amount = 1;
            
            # initialize CURL
            $ch = curl_init("https://apilayer.net/api/". $endpoint . "?access_key=" . $access_key . "&from=" . $from . "&to=" . $to . "&amount=" . $amount);   
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            # get the (still encoded) JSON data
            $json = curl_exec($ch);
            curl_close($ch);
            
            # Decode JSON response
            $exchange = json_decode($json, true);
        }
        
        /**
         * OpenWeatherMap API
         */
        if ($city_code) {
            # set access key, required parameters
            $city_id = $city_code;
            $units = "metric";
            $APIKEY = "3baebe8732d7455a542057847c0e17f7";
            
            # initilize URL
            $url = "http://api.openweathermap.org/data/2.5/forecast?id=" . $city_id . "&units=" . $units . "&appid=" . $APIKEY;
            
            # get the (still encoded) JSON data
            $json = file_get_contents($url);
            
            # Decode JSON response
            $weather = json_decode($json, true);
        }
        
        /**
         * Bing News Search API v7
         */
        if ($keyword) {
            # set access key
            $accessKey = '819b0d7f18eb4bbc9665a3596cdd3c25';

            # set API Endpoint
            $endpoint = 'https://api.cognitive.microsoft.com/bing/v7.0/news/search';
            
            # set required parameters
            $term = $keyword;

            function BingNewsSearch ($url, $key, $query) {
                # Prepare HTTP request
                $headers = "Ocp-Apim-Subscription-Key: $key\r\n";
                $options = array ('http' => array (
                                'header' => $headers,
                                'method' => 'GET' ));

                # Perform the Web request and get the JSON response
                $context = stream_context_create($options);
                $result = file_get_contents($url . "?q=" . urlencode($query) . "&mkt=ja-jp", false, $context);

                # Extract Bing HTTP headers
                $headers = array();
                foreach ($http_response_header as $k => $v) {
                    $h = explode(":", $v, 2);
                    if (isset($h[1]))
                    if (preg_match("/^BingAPIs-/", $h[0]) || preg_match("/^X-MSEdge-/", $h[0]))
                        $headers[trim($h[0])] = trim($h[1]);
                }
                
                #return header and result
                return array($headers, $result);
            }
            
            # get the (still encoded) JSON data
            list( , $json) = BingNewsSearch($endpoint, $accessKey, $term);

            # Decode JSON response
            $news = json_decode($json, true);
        }
        
        # dump and die
        # dd($news);
        
        return view('welcome', [
            'weather' => $weather,
            'exchange' => $exchange,
            'news' => $news,
        ]);
    }
}
