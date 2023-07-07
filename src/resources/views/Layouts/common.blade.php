<!DOCTYPE HTML>
<html lang="ja">

<head>
  @include('Parts.head')

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  @vite(['resources/scss/app.scss'])
</head>

<body>
  @include('Parts.header')
  @yield('content')
  @include('Parts.footer')
</body>

</html>