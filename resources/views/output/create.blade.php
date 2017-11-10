@extends('layouts.app')

@section('content')

<div class="search">
    <div class="row">
        <div class="text-center">
            {!! Form::open(['route' => 'outputs.create', 'method' => 'get', 'class' => 'form-inline']) !!}
                <div class="form-group">
                    {!! Form::text('keyword', $keyword, ['class' => 'form-control input-lg', 'placeholder' => '国名を入力', 'size' => 40]) !!}
                </div>
                {!! Form::submit('検索', ['class' => 'btn btn-success btn-lg']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>

@include('output.weather', ['items' => $items])

@endsection

