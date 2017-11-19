@if ($exchange)
    <div class="wrape col-sm-4">
        <div class="inner">
            <h1 class="weather category">為替</h1>
            <h3>{{ $exchange["query"]["from"] }} / JPY に変換 (10分更新)</h3>
            <h2>￥{{ $exchange["info"]["quote"] }}</h2>
        </div>
    </div>
@endif