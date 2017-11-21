@if ($weather)
<div class="wrapw col-sm-12">
    <div class="inner">
    <h1 class="weather category">天気</h1>
    <h3>{{$weather['city']['name']}}</h3>
    <ul>
        @if ($weather['list'][3]['weather'][0]['main'] === 'Clouds')
        <img src= {{ asset('/images/weather/26.png') }} class="weather" alt="曇り"></a>
        @elseif ($weather['list'][3]['weather'][0]['main'] === 'Rain')
        <img src= {{ asset('/images/weather/12.png') }} class="weather" alt="雨"></a>
        @elseif ($weather['list'][3]['weather'][0]['main'] === 'Mist')
        <img src= {{ asset('/images/weather/18.png') }} class="weather" alt="小雨"></a>
        @elseif ($weather['list'][3]['weather'][0]['main'] === 'Clear')
        <img src= {{ asset('/images/weather/32.png') }} class="weather" alt="晴れ"></a>
        @elseif ($weather['list'][3]['weather'][0]['main'] === 'Smoke')   
        <img src= {{ asset('/images/weather/20.png') }} class="weather" alt="霧"></a>
        @elseif ($weather['list'][3]['weather'][0]['main'] === 'Snow')   
        <img src= {{ asset('/images/weather/16.png') }} class="weather" alt="雪"></a>
        @endif
        <li>日時：{{ $weather['list'][3]['dt_txt'] }}</li>
        <li>天候：{{ $weather['list'][3]['weather'][0]['main'] }}</li>
        <li>気温：{{ $weather['list'][3]['main']['temp'] }} ℃</li>
        <li>湿度：{{ $weather['list'][3]['main']['humidity'] }} %</li>
        <li>気圧：{{ $weather['list'][3]['main']['pressure'] }} hPa</li>
        <li>風速：{{ $weather['list'][3]['wind']['speed'] }} m/s</li>
    </ul>
    <ul>
        @if ($weather['list'][11]['weather'][0]['main'] === 'Clouds')
            <img src= {{ asset('/images/weather/26.png') }} class="weather" alt="曇り"></a>
        @elseif ($weather['list'][11]['weather'][0]['main'] === 'Rain')
            <img src= {{ asset('/images/weather/12.png') }} class="weather" alt="雨"></a>
        @elseif ($weather['list'][11]['weather'][0]['main'] === 'Mist')
            <img src= {{ asset('/images/weather/18.png') }} class="weather" alt="小雨"></a>
        @elseif ($weather['list'][11]['weather'][0]['main'] === 'Clear')
            <img src= {{ asset('/images/weather/32.png') }} class="weather" alt="晴れ"></a>
        @elseif ($weather['list'][11]['weather'][0]['main'] === 'Smoke')   
            <img src= {{ asset('/images/weather/20.png') }} class="weather" alt="霧"></a>
        @elseif ($weather['list'][11]['weather'][0]['main'] === 'Snow')   
            <img src= {{ asset('/images/weather/16.png') }} class="weather" alt="雪"></a>
        @endif
        <li>日時：{{ $weather['list'][11]['dt_txt'] }}</li>
        <li>天候：{{ $weather['list'][11]['weather'][0]['main'] }}</li>
        <li>気温：{{ $weather['list'][11]['main']['temp'] }} ℃</li>
        <li>湿度：{{ $weather['list'][11]['main']['humidity'] }} %</li>
        <li>気圧：{{ $weather['list'][11]['main']['pressure'] }} hPa</li>
        <li>風速：{{ $weather['list'][11]['wind']['speed'] }} m/s</li>
    </ul>
        <ul>
        @if ($weather['list'][19]['weather'][0]['main'] === 'Clouds')
            <img src= {{ asset('/images/weather/26.png') }} class="weather" alt="曇り"></a>
        @elseif ($weather['list'][19]['weather'][0]['main'] === 'Rain')
            <img src= {{ asset('/images/weather/12.png') }} class="weather" alt="雨"></a>
        @elseif ($weather['list'][19]['weather'][0]['main'] === 'Mist')
            <img src= {{ asset('/images/weather/18.png') }} class="weather" alt="霧"></a>
        @elseif ($weather['list'][19]['weather'][0]['main'] === 'Clear')
            <img src= {{ asset('/images/weather/32.png') }} class="weather" alt="晴れ"></a>
        @elseif ($weather['list'][19]['weather'][0]['main'] === 'Smoke')   
            <img src= {{ asset('/images/weather/20.png') }} class="weather" alt="霧"></a>
        @elseif ($weather['list'][19]['weather'][0]['main'] === 'Snow')   
            <img src= {{ asset('/images/weather/16.png') }} class="weather" alt="霧"></a>
        @endif
        <li>日時：{{ $weather['list'][19]['dt_txt'] }}</li>
        <li>天候：{{ $weather['list'][19]['weather'][0]['main'] }}</li>
        <li>気温：{{ $weather['list'][19]['main']['temp'] }} ℃</li>
        <li>湿度：{{ $weather['list'][19]['main']['humidity'] }} %</li>
        <li>気圧：{{ $weather['list'][19]['main']['pressure'] }} hPa</li>
        <li>風速：{{ $weather['list'][19]['wind']['speed'] }} m/s</li>
    </ul>
        <ul>
        @if ($weather['list'][27]['weather'][0]['main'] === 'Clouds')
            <img src= {{ asset('/images/weather/26.png') }} class="weather" alt="曇り"></a>
        @elseif ($weather['list'][27]['weather'][0]['main'] === 'Rain')
            <img src= {{ asset('/images/weather/12.png') }} class="weather" alt="雨"></a>
        @elseif ($weather['list'][27]['weather'][0]['main'] === 'Mist')
            <img src= {{ asset('/images/weather/18.png') }} class="weather" alt="小雨"></a>
        @elseif ($weather['list'][27]['weather'][0]['main'] === 'Clear')
            <img src= {{ asset('/images/weather/32.png') }} class="weather" alt="晴れ"></a>
        @elseif ($weather['list'][27]['weather'][0]['main'] === 'Smoke')   
            <img src= {{ asset('/images/weather/20.png') }} class="weather" alt="霧"></a>
        @elseif ($weather['list'][27]['weather'][0]['main'] === 'Snow')   
            <img src= {{ asset('/images/weather/16.png') }} class="weather" alt="雪"></a>
        @endif
        <li>日時：{{ $weather['list'][27]['dt_txt'] }}</li>
        <li>天候：{{ $weather['list'][27]['weather'][0]['main'] }}</li>
        <li>気温：{{ $weather['list'][27]['main']['temp'] }} ℃</li>
        <li>湿度：{{ $weather['list'][27]['main']['humidity'] }} %</li>
        <li>気圧：{{ $weather['list'][27]['main']['pressure'] }} hPa</li>
        <li>風速：{{ $weather['list'][27]['wind']['speed'] }} m/s</li>
    </ul>
        <ul>
        @if ($weather['list'][35]['weather'][0]['main'] === 'Clouds')
            <img src= {{ asset('/images/weather/26.png') }} class="weather" alt="曇り"></a>
        @elseif ($weather['list'][35]['weather'][0]['main'] === 'Rain')
            <img src= {{ asset('/images/weather/12.png') }} class="weather" alt="雨"></a>
        @elseif ($weather['list'][35]['weather'][0]['main'] === 'Mist')
            <img src= {{ asset('/images/weather/18.png') }} class="weather" alt="小雨"></a>
        @elseif ($weather['list'][35]['weather'][0]['main'] === 'Clear')
            <img src= {{ asset('/images/weather/32.png') }} class="weather" alt="晴れ"></a>
        @elseif ($weather['list'][35]['weather'][0]['main'] === 'Smoke')   
            <img src= {{ asset('/images/weather/20.png') }} class="weather" alt="霧"></a>
        @elseif ($weather['list'][35]['weather'][0]['main'] === 'Snow')   
            <img src= {{ asset('/images/weather/16.png') }} class="weather" alt="雪"></a>
        @endif
        <li>日時：{{ $weather['list'][35]['dt_txt'] }}</li>
        <li>天候：{{ $weather['list'][35]['weather'][0]['main'] }}</li>
        <li>気温：{{ $weather['list'][35]['main']['temp'] }} ℃</li>
        <li>湿度：{{ $weather['list'][35]['main']['humidity'] }} %</li>
        <li>気圧：{{ $weather['list'][35]['main']['pressure'] }} hPa</li>
        <li>風速：{{ $weather['list'][35]['wind']['speed'] }} m/s</li>
    </ul>
    </div>
</div>
@endif
