@extends('Layouts.common')
@section('title', '自己紹介')
@section('description', '今日も今日とて、僕は僕。自己紹介で差を付けろ。')
@section('canonical', 'about')

@section('add-scss')
@vite(['resources/scss/about.scss'])
@endsection

@section('content')
<main>
  <h1 class="h1">About</h1>

  <div id="main" class="inner">
    <section class="contentBox cf">
      <p class="textBox">
        今日も今日とて、僕は僕。<br>
        2016年の中学2年次に趣味でプログラミングを始める。<br>
      </p>
      <div class="profileBox cf">
        <p class="imgFace profileBoxLeft"><img src="{{ asset('/image/takuto.png') }}" alt="1番写りが良かったので採用した写真"></p>
        <div class="profileBoxRight">
          <dl class="profile cf">
            <dt>名前:</dt>
            <dd>藤村 拓翔 | Fujimura Takuto</dd>
            <br>
            <dt>所在地:</dt>
            <dd>大阪府</dd>
            <br>
            <dt>お問い合わせ:</dt>
            <dd>taqooto@gmail.com</dd>
            <br>
            <dt>電話番号:</dt>
            <dd>090-5700-1000</dd>
            <br>
            <dt>大学:</dt>
            <dd>大阪国際工科専門職大学</dd>
            <br>
            <dt>学科:</dt>
            <dd>デジタルエンタテイメント</dd>
            <br>
            <dt>コース:</dt>
            <dd>ゲームプロデュース</dd>
            <br>
            <dt>仕事内容:</dt>
            <dd><a href="/contact">※こちらから連絡してください</a></dd>
          </dl>
        </div>
      </div>
    </section>
  </div>

  <h1 class="h1">扱えるツール</h1>

  <ul id="programming-languages">
    <li>
      <a href="https://python.org" target="_blank" rel="noopener noreferrer">
        <div class="button bg-python">
          <i class="fab fa-python"></i>
        </div>
        <span>Python</span>
      </a>
    </li>
    <li>
      <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noopener noreferrer">
        <div class="button bg-javascript">
          <i class="fab fa-js-square"></i>
        </div>
        <span>Javascript</span>
      </a>
    </li>
    <li>
      <a href="https://www.typescriptlang.org/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-typescript">
          <i class="fab fa-js-square"></i>
        </div>
        <span>TypeScript</span>
      </a>
    </li>
    <li>
      <a href="https://www.microsoft.com/net" target="_blank" rel="noopener noreferrer">
        <div class="button bg-csharp">
          <i class="fab fa-microsoft"></i>
        </div>
        <span>C#</span>
      </a>
    </li>
    <li>
      <a href="https://www.php.net/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-php">
          <i class="fab fa-php"></i>
        </div>
        <span>PHP</span>
      </a>
    </li>
    <li>
      <a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank" rel="noopener noreferrer">
        <div class="button bg-html">
          <i class="fab fa-html5"></i>
        </div>
        <span>HTML</span>
      </a>
    </li>
    <li>
      <a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank" rel="noopener noreferrer">
        <div class="button bg-css">
          <i class="fab fa-css3-alt"></i>
        </div>
        <span>CSS</span>
      </a>
    </li>
    <li>
      <a href="https://www.mysql.com/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-mysql">
          <i class="fas fa-database"></i>
        </div>
        <span>MySQL</span>
      </a>
    </li>
    <li>
      <a href="https://www.postgresql.org/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-postgresql">
          <i class="fas fa-database"></i>
        </div>
        <span>PostgreSQL</span>
      </a>
    </li>
    <li>
      <a href="https://redis.io/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-redis">
          <i class="fas fa-database"></i>
        </div>
        <span>Redis</span>
      </a>
    </li>
    <li>
      <a href="https://unity.com/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-unity">
          <i class="fab fa-unity"></i>
        </div>
        <span>Unity</span>
      </a>
    </li>
    <li>
      <a href="https://www.cplusplus.com/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-cplusplus">
          <i class="fas fa-code"></i>
        </div>
        <span>C++ (少々)</span>
      </a>
    </li>
    <li>
      <a href="https://www.java.com/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-java">
          <i class="fab fa-java"></i>
        </div>
        <span>Java (少々)</span>
      </a>
    </li>
    <li>
      <a href="https://laravel.com/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-laravel">
          <i class="fab fa-laravel"></i>
        </div>
        <span>Laravel</span>
      </a>
    </li>
  </ul>

  <h1 class="h1">SNS</h1>

  <ul id="sns">
    <li>
      <a href="https://twitter.com/Anijaaatakoyaki" class="button bg-twitter" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-twitter"></i>
      </a>
    </li>
    <li>
      <a href="https://instagram.com/tikutaku.py/" class="button bg-instagram" target="_blank"
        rel="noopener noreferrer">
        <i class="fab fa-instagram"></i>
      </a>
    </li>
    <li>
      <a href="https://facebook.com/AnijaaaPan" class="button bg-facebook" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-facebook"></i>
      </a>
    </li>
    <li>
      <a href="https://github.com/AnijaaaPan" class="button bg-github" target="_blank" rel="noopener noreferrer">
        <i class="fab fa-github"></i>
      </a>
    </li>
    <li>
      <a href="https://discord.com/users/304932786286886912" class="button bg-discord" target="_blank"
        rel="noopener noreferrer">
        <i class="fab fa-discord"></i>
      </a>
    </li>
  </ul>
</main>
@endsection

@section('add-ts')
<script src="{{ asset('/js/fontawesome.js') }}" crossorigin="anonymous"></script>
@endsection