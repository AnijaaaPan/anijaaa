@extends('Layouts.common')
@section('title', '実績')
@section('description', '実績一覧だよ。仕事は趣味だよ。趣味は仕事だよ。')
@section('canonical', 'works')

@section('add-scss')
<link rel="stylesheet" href="https://unpkg.com/flickity@2.3.0/dist/flickity.css">
@vite(['resources/scss/works.scss'])
@endsection

@section('content')
<main>
  <h1 class="h1">実績</h1>

  @foreach ($jsonData as $data)
  <div class="year-works">
    <h2 class="h2">{{ $data["year"] }}</h2>

    <ul class="slider js-flickity" data-flickity-options='{ "wrapAround": false, "prevNextButtons": false, "pageDots": false }'>
      @foreach ($data["works"] as $w)
      <li class="slider-cell">
        <a href="{{ asset('works/'.$w['page']) }}">
          <img src="{{ asset('image/works/'.$w['page'].'.png') }}">
          <div>
            <span>{{ $w['workType'] }}</span>
            <span>{{ $w['title'] }}</span>
          </div>
        </a>
      </li>
      @endforeach
    </ul>
  </div>
  @endforeach
</main>
@endsection

@section('add-ts')
<script src="https://unpkg.com/flickity@2.3.0/dist/flickity.pkgd.min.js"></script>
<script src="{{ asset('/js/slider.js') }}"> </script>
@endsection