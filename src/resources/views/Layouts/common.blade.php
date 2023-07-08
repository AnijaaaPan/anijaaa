<!DOCTYPE HTML>
<html lang="ja">

<head>
  @include('Parts.head')

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  @vite(['resources/scss/app.scss'])
</head>

<body>
  @include('Parts.loading')
  @include('Parts.header')
  @yield('content')
  @include('Parts.footer')
  <script>
  window.addEventListener('DOMContentLoaded', function() {
    const loader = document.getElementById('loading');
    if (loader) {
      loader.classList.add('completed');
    };

    const foreverLoading = document.getElementById('forever-loading');
    if (!foreverLoading) {
      document.body.style.overflowY = 'scroll';
    };
  });
  </script>
</body>

</html>