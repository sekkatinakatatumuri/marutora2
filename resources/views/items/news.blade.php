@if ($news)
<div class="wrapn col-sm-8">
    <div class="inner">
        <h1 class="news category">ニュース</h1>
        <div class="loop">
            @if ($news["value"][0]["image"]["thumbnail"]["contentUrl"])
            <img src="{{ $news["value"][0]["image"]["thumbnail"]["contentUrl"] }}" alt="" role="presentation" class="img_left">
            @endif
            <a href="{{ $news["value"][0]["url"] }}"><h4 class="newsname">{{ $news["value"][1]["name"] }}</h4></a>
            <p>{{ $news["value"][0]["description"] }}</p>
            <div class="clear"></div>
        </div>
        <div class="loop">
            @if ($news["value"][1]["image"]["thumbnail"]["contentUrl"])
            <img src="{{ $news["value"][1]["image"]["thumbnail"]["contentUrl"] }}" alt="" role="presentation" class="img_left">
            @endif
            <a href="{{ $news["value"][1]["url"] }}"><h4 class="newsname">{{ $news["value"][1]["name"] }}</h4></a>
            <p>{{ $news["value"][1]["description"] }}</p>
            <div class="clear"></div>
        </div>
        <div class="loop">
            @if ($news["value"][2]["image"]["thumbnail"]["contentUrl"])
            <img src="{{ $news["value"][2]["image"]["thumbnail"]["contentUrl"] }}" alt="" role="presentation" class="img_left">
            @endif
            <a href="{{ $news["value"][2]["url"] }}"><h4 class="newsname">{{ $news["value"][2]["name"] }}</h4></a>
            <p>{{ $news["value"][2]["description"] }}</p>
            <div class="clear"></div>
        </div>
    </div>
</div>
@endif
