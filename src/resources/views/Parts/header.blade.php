<header>
  <div class="logo">
    <a href="/">
      <img src="{{ asset('image/icon1.png') }}" alt="">
    </a>
  </div>
  <div>
    @CheckLogin
    <form method="post" name="logout" action="/logout">
      @csrf
      <input type="hidden" name="user_name" value="名前">
      <a href="" onclick="submit();return false;">ログアウト</a>
    </form>
    @else
    <a href="{{ route('login') }}">ログイン</a>
    @endCheckLogin
  </div>
</header>
<script>
function submit() {
  document.logout.submit();
}
</script>