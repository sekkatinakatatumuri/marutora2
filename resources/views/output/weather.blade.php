@if ($items)
    <h1>現在の天気予報</h1>
    <h3>場所：{{$items['name']}}</h3>
    <ul>
        <li>気温：{{ $items['main']['temp'] }} 度</li>
        <li>気圧：{{ $items['main']['pressure'] }} hPa</li>
        <li>湿度：{{ $items['main']['humidity'] }} %</li>
    </ul>
    <h3>為替</h3>
    <ul>
        <li>為替：{{ $kitems["GBP"] }}</li>
    </ul>
@endif
