<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>

  @vite(['resources/scss/app.scss'])
</head>

<body>
  @include('Parts.header')
  @yield('content')
  @include('Parts.footer')
</body>

</html>