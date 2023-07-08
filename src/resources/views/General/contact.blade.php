@extends('Layouts.common')
@section('title', '連絡')
@section('description', '連絡したい人用の場所。使われないと思うけどね。')
@section('canonical', 'contact')

@section('add-scss')
@vite(['resources/scss/contact.scss'])

@if (isset($completed) || isset($unknownRequired))
<link rel="stylesheet" href="{{ asset('/css/sweetalert2.min.css') }}">

<style>
  .swal2-popup {
    width: 85vw;
    background: #2f3136;
    margin: 7.5vh 0;
  }

  .swal2-title {
    color: #d9d9d9;
    border: none;
  }

  .swal2-html-container {
    color: #d9d9d9;
  }

  .swal2-icon-error {
    border: 1px solid #f27474;
  }

  .swal2-icon-success {
    border: 1px solid #a5dc86;
  }
</style>
@endif
@endsection

@section('content')
<main>
  <h1 class="h1">お問い合わせ</h1>

  <div class="container">
    <form method="POST">
      @csrf
      <div class="mb-3">
        <label for="company" class="form-label">会社・団体名</label>
        <input type="text" class="form-control" id="company" name="company">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">お名前 <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="mb-3">
        <label for="nameKana" class="form-label">フリガナ <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="nameKana" name="nameKana" required>
      </div>
      <div class="mb-3">
        <label for="department" class="form-label">所属部署名</label>
        <input type="text" class="form-control" id="department" name="department">
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">メールアドレス <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="address" name="address" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">電話番号 <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="phone" name="phone" required>
      </div>
      <div class="mb-3">
        <label for="url" class="form-label">URL</label>
        <input type="url" class="form-control" id="url" name="url">
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">お問い合わせ内容 <span class="text-danger">*</span></label>
        <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">送信</button>
    </form>
  </div>

  <h1 class="h1">SNS</h1>

  <ul id="sns">
    <li>
      <a href="https://twitter.com/Anijaaatakoyaki" class="button bg-twitter">
        <i class="fab fa-twitter"></i>
      </a>
    </li>
    <li>
      <a href="https://instagram.com/tikutaku.py/" class="button bg-instagram">
        <i class="fab fa-instagram"></i>
      </a>
    </li>
    <li>
      <a href="https://facebook.com/AnijaaaPan" class="button bg-facebook">
        <i class="fab fa-facebook"></i>
      </a>
    </li>
    <li>
      <a href="https://github.com/AnijaaaPan" class="button bg-github">
        <i class="fab fa-github"></i>
      </a>
    </li>
    <li>
      <a href="https://discord.com/users/304932786286886912" class="button bg-discord">
        <i class="fab fa-discord"></i>
      </a>
    </li>
  </ul>
</main>
@endsection

@section('add-ts')
<script src="{{ asset('/js/fontawesome.js') }}" crossorigin="anonymous"></script>

@if (isset($completed) || isset($unknownRequired))
<script src="{{ asset('/js/sweetalert2.min.js') }}"></script>
@endif

@if (isset($completed))
<script>
  Swal.fire(
    '※送信しました',
    '{{ $completed }}',
    'success'
  )
</script>
@endif

@if (isset($unknownRequired))
<script>
  Swal.fire(
    '※エラーが発生しました',
    '{{ $unknownRequired }}',
    'error'
  )
</script>
@endif
@endsection