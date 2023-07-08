<!DOCTYPE HTML>
<html lang="ja">

<head>
  @include('Parts.head')

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  @vite(['resources/scss/app.scss'])
  @yield('add-scss')
</head>

<body>
  @include('Parts.loading')

  @include('Parts.header')
  @yield('content')
  @include('Parts.footer')

  @vite(['resources/ts/load.ts'])
  @yield('add-ts')
</body>

</html>