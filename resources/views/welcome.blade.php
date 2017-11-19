@extends('layouts.app')

@section('cover')
<div class="cover">
    <div class="cover-inner">
        <div class="cover-contents">
            <h1>旅先の情報をまるっと表示する</h1>
            @unless (Auth::check())
                <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">まるトラを始める</a>
            @endunless
        </div>

    </div>
</div>
@endsection

@section('content')
    @if (Auth::check())
    <div class="wraps col-sm-12">
        <div class="inner">
        <i class="fa fa-search" aria-hidden="true"></i>
        <h3 class="text-center">国・地域名から検索 <span class="glyphicon glyphicon-search"></span></h3>
        <div class="search">
            <div class="row">
                <div class="text-center">
                {!! Form::open(['route' => 'welcome.create', 'method' => 'get', 'class' => 'form-inline']) !!}
                <select name="select" class="selectpicker" data-live-search="true" data-width="46%" data-size="8" title="国を選択してください">
                  <optgroup label="アジア地域 ->19ヵ国,27都市">
                    <option value="1835848,KRW,韓国" data-tokens="韓国 Korea ソウル Seoul Soul" data-subtext="ソウル">韓国</option>
                    <option value="1796236,CNY,中国" data-tokens="中国 China 上海 Shanghai" data-subtext="上海">中国</option>
                    <option value="1816670,CNY,中国" data-tokens="中国 China 北京 Beijing" data-subtext="北京">中国</option>
                    <option value="1668341,TWD,台湾" data-tokens="台湾 Taiwan 台北 Taipei" data-subtext="台北">台湾</option>
                    <option value="1609350,THB,タイ" data-tokens="タイ Thailand バンコク Bangkok" data-subtext="バンコク">タイ</option>
                    <option value="1821274,MOP,マカオ" data-tokens="マカオ Macau" data-subtext="マカオ">マカオ</option>
                    <option value="1819729,HKD,香港" data-tokens="香港 HongKong" data-subtext="香港">香港</option>
                    <option value="1880252,SGD,シンガポール" data-tokens="シンガポール Singapore" data-subtext="シンガポール">シンガポール</option>
                    <option value="1735161,MYR,マレーシア" data-tokens="マレーシア Malaysia クアラルンプール KualaLumpur" data-subtext="クアラルンプール">マレーシア</option>
                    <option value="1566083,VND,ベトナム" data-tokens="ベトナム Vietnam ホーチミン HoChiMinh" data-subtext="ホーチミン">ベトナム</option>
                    <option value="1821306,KHR,カンボジア" data-tokens="カンボジア Cambodia プノンペン PhnomPenh" data-subtext="プノンペン">カンボジア</option>
                    <option value="323786,TRY,トルコ" data-tokens="トルコ Turkey アンカラ Ankara" data-subtext="アンカラ">トルコ</option>
                    <option value="745044,TRY,トルコ" data-tokens="トルコ Turkey イスタンブール Istanbul" data-subtext="イスタンブール">トルコ</option>
                    <option value="1701668,PHP,フィリピン" data-tokens="フィリピン Philippines マニラ Manila" data-subtext="マニラ">フィリピン</option>
                    <option value="1692199,PHP,フィリピン" data-tokens="フィリピン Philippines ケソン QuezonCity" data-subtext="ケソン">フィリピン</option>
                    <option value="1261481,INR,インド" data-tokens="インド India ニューデリー NewDelhi" data-subtext="ニューデリー">インド</option>
                    <option value="1275339,INR,インド" data-tokens="インド India ムンバイ Mumbai" data-subtext="ムンバイ">インド</option>
                    <option value="1642911,IDR,インドネシア" data-tokens="インドネシア Indonesia ジャカルタ Jakarta" data-subtext="ジャカルタ">インドネシア</option>
                    <option value="2028462,MNT,モンゴル国" data-tokens="モンゴル国 Mongolia ウランバートル Ulaanbaatar" data-subtext="ウランバートル">モンゴル国</option>
                    <option value="1298824,MMK,ミャンマー" data-tokens="ミャンマー Myanmar ラングーン ヤンゴン Rangoon Yangon" data-subtext="ヤンゴン(ラングーン)">ミャンマー</option>
                    <option value="1248991,LKR,スリランカ" data-tokens="スリランカ SriLanka コロンボ Colombo" data-subtext="コロンボ">スリランカ</option>
                    <option value="1238992,LKR,スリランカ" data-tokens="スリランカ SriLanka スリジャヤワルダナプラコッテ SriJayewardenepuraKotte" data-subtext="スリジャヤワルダナプラコッテ">スリランカ</option>
                    <option value="1283240,NPR,ネパール" data-tokens="ネパール Nepal カトマンズ Kathmandu" data-subtext="カトマンズ">ネパール</option>
                    <option value="290030,QAR,カタール" data-tokens="カタール Qatar ドーハ Doha" data-subtext="ドーハ">カタール</option>
                    <option value="587084,AZN,アゼルバイジャン" data-tokens="アゼルバイジャン Azerbaijan バクー Baku" data-subtext="バクー">アゼルバイジャン</option>
                    <option value="292968,AED,アラブ首長国連邦" data-tokens="アラブ首長国連邦 UAE UnitedArabEmirates アブダビ AbuDhabi" data-subtext="アブダビ">アラブ首長国連邦</option>
                    <option value="292223,AED,アラブ首長国連邦" data-tokens="アラブ首長国連邦 UAE UnitedArabEmirates ドバイ Dubai" data-subtext="ドバイ">アラブ首長国連邦</option>
                  </optgroup>
                  <optgroup label="ヨーロッパ地域 ->ヵ国,都市">
                    <option value="2643741,GBP,イギリス" data-tokens="イギリス UnitedKingdom ロンドン London" data-subtext="ロンドン">イギリス</option>
                    <option value="3169070,EUR,イタリア" data-tokens="イタリア Italy ローマ Roma" data-subtext="ローマ">イタリア</option>
                    <option value="2988507,EUR,フランス" data-tokens="フランス France パリ Paris" data-subtext="パリ">フランス</option>
                    <option value="3117735,EUR,スペイン" data-tokens="スペイン Spain マドリード Madrid" data-subtext="マドリード">スぺイン</option>
                    <option value="2950159,EUR,ドイツ" data-tokens="ドイツ Germany ベルリン Berlin" data-subtext="ベルリン">ドイツ</option>
                    <option value="6618983,HRK,クロアチア" data-tokens="クロアチア Hrvatska ザグレブ Zagreb" data-subtext="ザグレブ">クロアチア</option>
                    <option value="2660646,CHF,スイス" data-tokens="スイス Switzerland ジュネーブ Geneve" data-subtext="ジュネーブ">スイス</option>
                    <option value="2661552,CHF,スイス" data-tokens="スイス Switzerland ベルン Bern" data-subtext="ベルン">スイス</option>
                    <option value="2657896,CHF,スイス" data-tokens="スイス Switzerland チューリッヒ Zurich" data-subtext="チューリッヒ">スイス</option>
                    <option value="3054643,HUF,ハンガリー" data-tokens="ハンガリー Hungary ブダペスト Budapest" data-subtext="ブダペスト">ハンガリー</option>
                    <option value="2800866,EUR,ベルギー" data-tokens="ベルギー Belgium ブリュッセル Brussels" data-subtext="ブリュッセル">ベルギー</option>
                    <option value="6544881,EUR,オランダ" data-tokens="オランダ Nederland アムステルダム Amsterdam" data-subtext="アムステルダム">オランダ</option>
                    <option value="2618425,DKK,デンマーク" data-tokens="デンマーク Danmark コペンハーゲン Copenhagen" data-subtext="コペンハーゲン">デンマーク</option>
                    <option value="2267057,EUR,ポルトガル" data-tokens="ポルトガル Portugal リスボン Lisbon" data-subtext="リスボン">ポルトガル</option>
                    <option value="756135,PLN,ポーランド" data-tokens="ポーランド Poland ワルシャワ Warsaw" data-subtext="ワルシャワ">ポーランド</option>
                    <option value="264371,EUR,ギリシャ" data-tokens="ギリシャ Greece アテネ Athens" data-subtext="アテネ">ギリシャ</option>
                    <option value="2761369,EUR,オーストリア" data-tokens="オーストリア Austria ウィーン Vienna" data-subtext="ウィーン">オーストリア</option>
                    <option value="2673730,SWE,スウェーデン" data-tokens="スウェーデン Sweden ストックホルム Stockholm" data-subtext="ストックホルム">スウェーデン</option>
                    <option value="658225,EUR,フィンランド" data-tokens="フィンランド Finland ヘルシンキ Helsinki" data-subtext="ヘルシンキ">フィンランド</option>
                    <option value="3413829,ISK,アイスランド" data-tokens="アイスランド Iceland レイキャヴィーク Reykjavik" data-subtext="レイキャヴィーク">アイスランド</option>
                    <option value="3143244,NOK,ノルウェー" data-tokens="ノルウェー Norway オスロ Oslo" data-subtext="オスロ">ノルウェー</option>
                    <option value="727011,BGL,ブルガリア" data-tokens="ブルガリア Bulgaria ソフィア Sofia" data-subtext="ソフィア">ブルガリア</option>
                    <option value="2964574,EUR,アイルランド" data-tokens="アイルランド Ireland ダブリン Dublin" data-subtext="ダブリン">アイルランド</option>
                    <option value="683506,RON,ルーマニア" data-tokens="ルーマニア Romania ブカレスト Bucharest" data-subtext="ブカレスト">ルーマニア</option>
                    <option value="3196359,EUR,スロベニア" data-tokens="スロベニア Slovenia リュブリャナ Ljubljana" data-subtext="リュブリャナ">スロベニア</option>
                    <option value="3067696,CZK,チェコ" data-tokens="チェコ Czech プラハ Prague" data-subtext="プラハ">チェコ</option>
                    <option value="3060972,EUR,スロバキア" data-tokens="スロバキア Slovakia ブラチスラヴァ Bratislava" data-subtext="ブラチスラヴァ">スロバキア</option>
                    <option value="703448,UAH,ウクライナ" data-tokens="ウクライナ Ukraine キエフ Kiev" data-subtext="キエフ">ウクライナ</option>
                    <option value="524901,RUB,ロシア" data-tokens="ロシア Russia モスクワ Moscow" data-subtext="モスクワ">ロシア</option>
                  </optgroup>
                  <optgroup label="アメリカ地域">
                    <option value="4880731,USD,アメリカ" data-tokens="アメリカ America ワシントン Washington" data-subtext="ワシントン">アメリカ</option>
                    <option value="5128581,USD,アメリカ" data-tokens="アメリカ America ニューヨーク NewYorkCity" data-subtext="ニューヨーク">アメリカ</option>
                    <option value="4044012,USD,グアム" data-tokens="アメリカ America グアム Guam Hagatna ハガニア" data-subtext="ハガニア">グアム</option>
                    <option value="4038659,USD,グアム" data-tokens="アメリカ America グアム Guam Tumon タモン" data-subtext="タモン">グアム</option>
                    <option value="5856195,USD,ハワイ" data-tokens="アメリカ America ハワイ Hawaii Honolulu ホノルル" data-subtext="ホノルル">ハワイ</option>
                    <option value="6094817,CAD,カナダ" data-tokens="カナダ Canada オタワ Ottawa" data-subtext="オタワ">カナダ</option>
                    <option value="6167865,CAD,カナダ" data-tokens="カナダ Canada トロント Toronto" data-subtext="トロント">カナダ</option>
                    <option value="3469058,BRL,ブラジル" data-tokens="ブラジル Brazil ブラジリア Brasilia" data-subtext="ブラジリア">ブラジル</option>
                    <option value="3448439,BRL,ブラジル" data-tokens="ブラジル Brazil サンパウロ SaoPaulo" data-subtext="サンパウロ">ブラジル</option>
                    <option value="3530597,MXN,メキシコ" data-tokens="メキシコ Mexico メキシコシティー MexicoCity" data-subtext="メキシコシティー">メキシコ</option>
                    <option value="3553478,CUC,キューバ" data-tokens="キューバ Cuba ハバナ Havana" data-subtext="ハバナ">キューバ</option>
                    <option value="3936456,PEN,ペルー" data-tokens="ペルー Peru リマ Lima" data-subtext="リマ">ペルー</option>
                    <option value="3435910,ARS,アルゼンチン" data-tokens="アルゼンチン Argentina ブエノスアイレス BuenosAires" data-subtext="ブエノスアイレス">アルゼンチン</option>
                    <option value="3871336,CLP,チリ" data-tokens="チリ Chile サンティアゴ Santiago" data-subtext="サンティアゴ">チリ</option>
                    <option value="3646738,VEB,ベネズエラ" data-tokens="ベネズエラ Venezuela カラカス Caracas" data-subtext="カラカス">ベネズエラ</option>
                    <option value="3688689,COP,コロンビア" data-tokens="コロンビア Columbia ボゴタ Bogota" data-subtext="ボゴタ">コロンビア</option>
                    <option value="3652462,USD,エクアドル" data-tokens="エクアドル Ecuador キト Quito" data-subtext="キト">エクアドル</option>
                    <option value="3657509,USD,エクアドル" data-tokens="エクアドル Ecuador グアヤキル Guayaquil" data-subtext="グアヤキル">エクアドル</option>
                    <option value="3903987,BOB,ボリビア" data-tokens="ボリビア Bolivia スクレ Sucre" data-subtext="スクレ">ボリビア</option>
                    <option value="3904906,BOB,ボリビア" data-tokens="ボリビア Bolivia サンタクルス SantaCruz" data-subtext="サンタクルス">ボリビア</option>
                    <option value="3441575,UYU,ウルグアイ" data-tokens="ウルグアイ Uruguay モンテビデオ Montevideo" data-subtext="モンテビデオ">ウルグアイ</option>
                    <option value="3439389,PYG,パラグアイ" data-tokens="パラグアイ Paraguay アスンシオン Asuncion" data-subtext="アスンシオン">パラグアイ</option>
                    <option value="4568127,USD,プエルトリコ" data-tokens="プエルトリコ PuertoRico サンフアン SanJuan" data-subtext="サンフアン">プエルトリコ</option>
                    <option value="3571824,BSD,バハマ" data-tokens="バハマ Bahama ナッソー Nassau" data-subtext="ナッソー">バハマ</option>
                    <option value="3703443,PAB,パナマ" data-tokens="パナマ Panama パナマシティ PanamaCity" data-subtext="パナマシティ">パナマ</option>
                    <option value="3489854,JMD,ジャマイカ" data-tokens="ジャマイカ Jamaica キングストン Kingston" data-subtext="キングストン">ジャマイカ</option>
                    <option value="3621849,CRC,コスタリカ" data-tokens="コスタリカ CostaRica サンホセ SanJose" data-subtext="サンホセ">コスタリカ</option>
                    <option value="3492908,DOP,ドミニカ" data-tokens="ドミニカ共和国 Dominica サントドミンゴ SantoDomingo" data-subtext="サントドミンゴ">ドミニカ共和国</option>
                  </optgroup>
                  <optgroup label="オセアニア地域 ->7ヵ国,11都市">
                    <option value="2172517,AUD,オーストラリア" data-tokens="オーストラリア Australia キャンベラ Canberra" data-subtext="Canberra">オーストラリア</option>
                    <option value="2147714,AUD,オーストラリア" data-tokens="オーストラリア Australia シドニー Sydney" data-subtext="Sydney">オーストラリア</option>
                    <option value="2158177,AUD,オーストラリア" data-tokens="オーストラリア Australia メルボルン Melbourne" data-subtext="Melbourne">オーストラリア</option>
                    <option value="2179537,NZD,ニュージーランド" data-tokens="ニュージーランド NewZealand ウェリントン Wellington" data-subtext="Wellington">ニュージーランド</option>
                    <option value="2193733,NZD,ニュージーランド" data-tokens="ニュージーランド NewZealand オークランド Auckland" data-subtext="Auckland">ニュージーランド</option>
                    <option value="2198148,FJD,フィジー" data-tokens="フィジー Fiji スバ Suva" data-subtext="Suva">フィジー</option>
                    <option value="7303944,USD,パラオ" data-tokens="パラオ Palau マルキョク Melekeok" data-subtext="Melekeok">パラオ</option>
                    <option value="7732415,USD,パラオ" data-tokens="パラオ Palau コロール Koror" data-subtext="Koror">パラオ</option>
                    <option value="4032402,TOP,トンガ" data-tokens="トンガ Tonga ヌクアロファ Nukualofa" data-subtext="ヌクアロファ">トンガ</option>
                    <option value="2088122,PGK,パプアニューギニア" data-tokens="パプアニューギニア PapuaNewGuinea ポートモレスビー PortMoresby" data-subtext="ポートモレスビー">パプアニューギニア</option>
                    ！！<option value=",,ニューカレドニア" data-tokens="ニューカレドニア" data-subtext="">ニューカレドニア</option>
                  </optgroup>
                <optgroup label="アフリカ地域 ->9ヵ国,12都市">
                    <option value="360630,EGP,エジプト" data-tokens="エジプト Egypt カイロ Cairo" data-subtext="カイロ">エジプト</option>
                    <option value="2538475,MAD,モロッコ" data-tokens="モロッコ Morocco ラバト Rabat" data-subtext="ラバト">モロッコ</option>
                    <option value="2553604,MAD,モロッコ" data-tokens="モロッコ Morocco カサブランカ Casablanca" data-subtext="カサブランカ">モロッコ</option>
                    <option value="2464470,TND,チュニジア" data-tokens="チュニジア Tunisia チュニス Tunis" data-subtext="チュニス">チュニジア</option>
                    <option value="2507480,DZD,アルジェリア" data-tokens="アルジェリア Algeria アルジェ Algiers" data-subtext="アルジェ">アルジェリア</option>
                    <option value="2352778,NGN,ナイジェリア" data-tokens="ナイジェリア Nigeria アブジャ Abuja" data-subtext="アブジャ">ナイジェリア</option>
                    <option value="2332459,NGN,ナイジェリア" data-tokens="ナイジェリア Nigeria ラゴス Lagos" data-subtext="ラゴス">ナイジェリア</option>
                    <option value="1040652,MZM,モザンビーク" data-tokens="モザンビーク Mozambique マプト Maputo" data-subtext="マプト">モザンビーク</option>
                    <option value="964137,ZAR,南アフリカ共和国" data-tokens="南アフリカ共和国 SouthAfrica プレトリア Pretoria" data-subtext="プレトリア">南アフリカ共和国</option>
                    <option value="993800,ZAR,南アフリカ共和国" data-tokens="南アフリカ共和国 SouthAfrica ヨハネスブルグ Johannesburg" data-subtext="ヨハネスブルグ">南アフリカ共和国</option>
                    <option value="184745,KES,ケニア" data-tokens="ケニア Kenya ナイロビ Nairobi" data-subtext="ナイロビ">ケニア</option>
                    <option value="344979,ETB,エチオピア" data-tokens="エチオピア Ethiopia アディスアベバ AddisAbaba" data-subtext="アディスアベバ">エチオピア</option>
                  </optgroup>
                </select>
                {!! Form::submit('検索', ['class' => 'btn btn-success']) !!}
                {!! Form::close() !!}
                </div>
            </div>
        </div>

        <h3 class="text-center">国旗から検索 <span class="glyphicon glyphicon-globe"></span></h3>
        <p class="text-center">アジア</p>
        <div class="text-center nationalflag">
            <a href="{{ URL::to('/welcome/create?id=1835848&ccode=KRW&keyword=韓国') }}"><img src={{ asset('/images/flag/flag099.png') }} class="flag" alt="韓国の情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1816670&ccode=CNY&keyword=中国') }}"><img src={{ asset('/images/flag/flag039.png') }} class="flag" alt="中国の情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1735161&ccode=MYR&keyword=マレーシア') }}"><img src={{ asset('/images/flag/flag115.png') }} class="flag" alt="マレーシアの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1880252&ccode=SGD&keyword=シンガポール') }}"><img src={{ asset('/images/flag/flag169.png') }} class="flag" alt="シンガポールの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=&ccode=&keyword=アラブ首長国連邦') }}"><img src={{ asset('/images/flag/flag196.png') }} class="flag" alt="アラブ首長国連邦の情報"></a>
            <a href="{{ URL::to('/welcome/create?id=&ccode=&keyword=アゼルバイジャン') }}"><img src={{ asset('/images/flag/flag149.png') }} class="flag" alt="！アゼルバイジャンの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1298824&ccode=MMK&keyword=ミャンマー') }}"><img src={{ asset('/images/flag/Myanmar.png') }} class="flag" alt="ミャンマーの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1283240&ccode=NPR&keyword=ネパール') }}"><img src={{ asset('/images/flag/flag133.png') }} class="flag" alt="ネパールの情報"></a>
        </div>
        <div class="text-center nationalflag">
            <a href="{{ URL::to('/welcome/create?id=1819729&ccode=HKD&keyword=香港') }}"><img src={{ asset('/images/flag/flag083.png') }} class="flag" alt="香港の情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1821274&ccode=MOP&keyword=マカオ') }}"><img src={{ asset('/images/flag/flag111.png') }} class="flag" alt="マカオの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1668341&ccode=TWD&keyword=台湾') }}"><img src={{ asset('/images/flag/taiwan.jpg') }} class="flag" alt="台湾の情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1609350&ccode=THB&keyword=タイ') }}"><img src={{ asset('/images/flag/flag185.png') }} class="flag" alt="タイの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=323786&ccode=TRY&keyword=トルコ') }}"><img src={{ asset('/images/flag/flag191.png') }} class="flag" alt="トルコの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1261481&ccode=INR&keyword=インド') }}"><img src={{ asset('/images/flag/flag085.png') }} class="flag" alt="インドの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1642911&ccode=IDR&keyword=インドネシア') }}"><img src={{ asset('/images/flag/flag086.png') }} class="flag" alt="インドネシアの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1701668&ccode=PHP&keyword=フィリピン') }}"><img src={{ asset('/images/flag/flag149.png') }} class="flag" alt="フィリピンの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1566083&ccode=VND&keyword=ベトナム') }}"><img src={{ asset('/images/flag/flag204.png') }} class="flag" alt="ベトナムの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=1821306&ccode=KHR&keyword=カンボジア') }}"><img src={{ asset('/images/flag/flag031.png') }} class="flag" alt="カンボジアの情報"></a>
        </div>
        <p class="text-center">北・南アメリカ</p>
        <div class="text-center nationalflag">
            <a href="{{ URL::to('/welcome/create?id=4880731&ccode=USD&keyword=アメリカ') }}"><img src={{ asset('/images/flag/flag198.png') }} class="flag" alt="アメリカの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=3469058&ccode=BRL&keyword=ブラジル') }}"><img src={{ asset('/images/flag/flag026.png') }} class="flag" alt="ブラジルの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=6094817&ccode=CAD&keyword=カナダ') }}"><img src={{ asset('/images/flag/flag033.png') }} class="flag" alt="カナダの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=3530597&ccode=MXN&keyword=メキシコ') }}"><img src={{ asset('/images/flag/flag122.png') }} class="flag" alt="メキシコの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=3553478&ccode=CUC&keyword=キューバ') }}"><img src={{ asset('/images/flag/flag047.png') }} class="flag" alt="キューバの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=3936456&ccode=PEN&keyword=ペルー') }}"><img src={{ asset('/images/flag/flag148.png') }} class="flag" alt="ペルーの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=3435910&ccode=ARS&keyword=アルゼンチン') }}"><img src={{ asset('/images/flag/flag008.png') }} class="flag" alt="アルゼンチンの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=3871336&ccode=CLP&keyword=チリ') }}"><img src={{ asset('/images/flag/flag038.png') }} class="flag" alt="チリの情報"></a>
        </div>
        <p class="text-center">アフリカ</p>
        <div class="text-center nationalflag">
            <a href="{{ URL::to('/welcome/create?id=360630&ccode=EGP&keyword=エジプト') }}"><img src={{ asset('/images/flag/flag055.png') }} class="flag" alt="エジプトの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=2538475&ccode=MAD&keyword=モロッコ') }}"><img src={{ asset('/images/flag/flag128.png') }} class="flag" alt="モロッコの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=2464470&ccode=TND&keyword=チュニジア') }}"><img src={{ asset('/images/flag/flag190.png') }} class="flag" alt="チュニジアの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=2507480&ccode=DZD&keyword=アルジェリア') }}"><img src={{ asset('/images/flag/flag003.png') }} class="flag" alt="アルジェリアの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=964137&ccode=ZAR&keyword=南アフリカ共和国') }}"><img src={{ asset('/images/flag/flag174.png') }} class="flag" alt="南アフリカ共和国の情報"></a>
            <a href="{{ URL::to('/welcome/create?id=184745&ccode=KES&keyword=ケニア') }}"><img src={{ asset('/images/flag/flag096.png') }} class="flag" alt="ケニアの情報"></a>
        </div>
        <p class="text-center">オセアニア</p>
        <div class="text-center nationalflag">
            <a href="{{ URL::to('/welcome/create?id=2172517&ccode=AUD&keyword=オーストラリア') }}"><img src={{ asset('/images/flag/flag011.png') }} class="flag" alt="オーストラリアの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=7303944&ccode=USD&keyword=パラオ') }}"><img src={{ asset('/images/flag/flag143.png') }} class="flag" alt="パラオの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=2198148&ccode=FJD&keyword=フィジー') }}"><img src={{ asset('/images/flag/flag064.png') }} class="flag" alt="フィジーの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=2179537&ccode=NZD&keyword=ニュージーランド') }}"><img src={{ asset('/images/flag/flag135.png') }} class="flag" alt="ニュージーランドの情報"></a>
        </div>
        <p class="text-center">ヨーロッパ</p>
        <div class="text-center nationalflag">
            <a href="{{ URL::to('/welcome/create?id=2643741&ccode=GBP&keyword=イギリス') }}"><img src={{ asset('/images/flag/flag197.png') }} class="flag" alt="イギリスの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=3117735&ccode=EUR&keyword=スペイン') }}"><img src={{ asset('/images/flag/flag175.png') }} class="flag" alt="スペインの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=3169070&ccode=EUR&keyword=イタリア') }}"><img src={{ asset('/images/flag/flag091.png') }} class="flag" alt="イタリアの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=2988507&ccode=EUR&keyword=フランス') }}"><img src={{ asset('/images/flag/flag066.png') }} class="flag" alt="フランスの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=2950159&ccode=EUR&keyword=ドイツ') }}"><img src={{ asset('/images/flag/flag070.png') }} class="flag" alt="ドイツの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=6618983&ccode=HRK&keyword=クロアチア') }}"><img src={{ asset('/images/flag/flag046.png') }} class="flag" alt="クロアチアの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=2661552&ccode=CHF&keyword=スイス') }}"><img src={{ asset('/images/flag/flag181.png') }} class="flag" alt="スイスの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=6544881&ccode=EUR&keyword=オランダ') }}"><img src={{ asset('/images/flag/flag134.png') }} class="flag" alt="オランダの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=524901&ccode=RUB&keyword=ロシア') }}"><img src={{ asset('/images/flag/flag155.png') }} class="flag" alt="ロシアの情報"></a>
            <a href="{{ URL::to('/welcome/create?id=703448&ccode=UAH&keyword=ウクライナ') }}"><img src={{ asset('/images/flag/flag195.png') }} class="flag" alt="ウクライナの情報"></a>
        </div>
        </div>
    </div>
    
        @include('items.weather', ['weather' => $weather])
        @include('items.news', ['news' => $news])
        @include('items.exchange', ['exchange' => $exchange])
    
    @endif
@endsection