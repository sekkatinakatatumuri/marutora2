<!DOCTYPE html>
<html>
<head>

<!--OGP-->
<meta property="og:title" content="Marutora" />
<meta property="og:type" content="travel" />
<meta property="og:url" content="http://marutora.herokuapp.com/" />
<meta property="og:image" content="http://marutora.herokuapp.com/images/cover-bg.jpg" />
<meta property="og:site_name" content="Marutora" />
<meta property="og:description" content="旅先の情報をまるっと表示する" />
<meta property=”og:locale” content=”ja_JP” />

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Marutora</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--bootstrap-select-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('commons.navbar')

@yield('cover')

<div class="container">
@include('commons.error_messages')
@yield('content')
</div>

@include('commons.footer')
</body>
</html>
