<!DOCTYPE HTML>
<html lang="ja">

<head>
  @include('Parts.head')

  @vite(['resources/scss/app.scss'])
  @yield('add-scss')
</head>

<body>
  @include('Parts.loading')

  @include('Parts.header')
  @yield('content')
  @include('Parts.footer')

  <script src="{{ asset('/js/load.js') }}"></script>
  @yield('add-ts')
</body>

</html>