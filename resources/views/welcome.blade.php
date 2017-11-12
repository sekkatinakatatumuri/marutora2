@extends('layouts.app')

@section('cover')
<div class="cover">
<div class="cover-inner">
<div class="cover-contents">
<h1>旅先の情報をまるっと表示する</h1>
<a href="#" class="btn btn-success btn-lg">まるトラを始める</a>
</div>
</div>
</div>
@endsection

@section('content')

<h3>コンボボックス検索</h3>

<div class="search">
    <div class="row">
        <div class="text-center">
            {!! Form::open(['route' => 'welcome.create', 'method' => 'get', 'class' => 'form-inline']) !!}
            <select class="selectpicker" data-live-search="true" data-width="46%" data-size="5" title="国を選択してください">
              <optgroup label="アジア">
                <option data-tokens="韓国" data-subtext="soul">韓国</option>
                <option data-tokens="中国">中国</option>
                <option data-tokens="台湾">台湾</option>
              </optgroup>
              <optgroup label="ヨーロッパ">
                <option data-tokens="Italy">イタリア</option>
                <option data-tokens="France">フランス</option>
                <option data-tokens="Spain">スぺイン</option>
              </optgroup>
            </select>
            {!! Form::submit('検索', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

<h3>国旗検索</h3>
<h4>アジア地域</h4>
<div class="text-center">
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag099.png') }} class="flag" alt="韓国の情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag039.png') }} class="flag" alt="中国の情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag185.png') }} class="flag" alt="タイの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag039.png') }} class="flag" alt="トルコの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag085.png') }} class="flag" alt="インドの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag086.png') }} class="flag" alt="インドネシアの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag149.png') }} class="flag" alt="フィリピンの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag204.png') }} class="flag" alt="ベトナムの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag031.png') }} class="flag" alt="カンボジアの情報"></a>
</div>
<h4>ヨーロッパ地域</h4>
<div class="text-center">
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag197.png') }} class="flag" alt="イギリスの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag175.png') }} class="flag" alt="スペインの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag091.png') }} class="flag" alt="イタリアの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag066.png') }} class="flag" alt="フランスの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag070.png') }} class="flag" alt="ドイツの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag019.png') }} class="flag" alt="ベルギーの情報"></a>
    <a href="{{ URL::to('/welcome/create?cityname=london&countrycode=uk') }}"><img src={{ asset('/images/flag/flag082.png') }} class="flag" alt="ハンガリーの情報"></a>
</div>
<h4>アメリカ地域</h4>
<div class="text-center">
    <a href="{{ URL::to( '/welcome/create?cityname=london&countrycode=uk' )}}"><img src={{ asset('/images/flag/flag198.png') }} class="flag" alt="アメリカの情報"></a>
    <a href="{{ URL::to( '/welcome/create?cityname=london&countrycode=uk' )}}"><img src={{ asset('/images/flag/flag026.png') }} class="flag" alt="ブラジルの情報"></a>
    <a href="{{ URL::to( '/welcome/create?cityname=london&countrycode=uk' )}}"><img src={{ asset('/images/flag/flag122.png') }} class="flag" alt="メキシコの情報"></a>
    <a href="{{ URL::to( '/welcome/create?cityname=london&countrycode=uk' )}}"><img src={{ asset('/images/flag/flag033.png') }} class="flag" alt="カナダの情報"></a>
</div>
<h4>アフリカ地域</h4>
<h4>NIS地域</h4>
<h4>オセアニア地域</h4>

@include('output.weather', ['items' => $items])

@endsection
