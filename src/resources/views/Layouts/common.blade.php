<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>

  @vite(['resources/scss/app.scss'])
  @vite(['resources/ts/header.ts'])
</head>

<body>
  @include('Parts.header')
  @yield('content')
</body>

</html>