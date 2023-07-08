@extends('Layouts.common')
@section('title', 'Error')
@section('description', 'Error画面だよ。なぜこんなページに来てしまった？')
@section('canonical', '')
@section('content')
<main>
  <div id="forever-loading">
    <div id="wrapper">
      <img class="circle" src="{{ asset('image/takoyaki.png') }}" />
      <img class="circle" src="{{ asset('image/takoyaki.png') }}" />
      <img class="circle" src="{{ asset('image/takoyaki.png') }}" />
      <div class="shadow"></div>
      <div class="shadow"></div>
      <div class="shadow"></div>
    </div>

    <span class="loading-text">@yield('code') | @yield('message')</span>

    <noscript>
      <p style="margin-top: 1em;">※JavaScriptが無効のためロードが終了しません。</p>
    </noscript>
  </div>
</main>
@endsection