@extends('Layouts.common')
@section('title', '実績')
@section('description', '実績一覧だよ。仕事は趣味だよ。趣味は仕事だよ。')
@section('canonical', 'works')

@section('add-scss')
@vite(['resources/scss/about.scss'])
@vite(['resources/scss/work.scss'])
@endsection

@section('content')
<main>
  <h1 class="h1">Work</h1>

  <div id="main" class="inner">
    <section class="contentBox cf">
      @if (isset($work["page_info"]))
      <p class="textBox">{!! nl2br(e($work["page_info"]["description"])) !!}</p>
      @endif

      <div class="profileBox cf">
        <p class="imgFace profileBoxLeft"><img src="{{ asset('image/works/'.$work['page'].'.png') }}"></p>
        <div class="profileBoxRight">
          <dl class="profile cf">
            <dt>種類:</dt>
            <dd>{{ $work["workType"] }}</dd>
            <br>
            <dt>タイトル:</dt>
            <dd>{{ $work["title"] }}</dd>

            @if (isset($work["page_info"]) && isset($work["page_info"]["fields"]))
            @foreach ($work["page_info"]["fields"] as $d)
            <br>
            <dt>{{ $d["key"] }}:</dt>
            <dd><?php echo $d["value"]; ?></dd>
            @endforeach
            @endif
          </dl>
        </div>
      </div>
    </section>
  </div>

  @if (isset($work["page_info"]) && isset($work["page_info"]["youtube"]))
  @foreach ($work["page_info"]["youtube"] as $url)
  <h1 class="h1">Youtube</h1>

  <div class="youtube">
    <iframe width="560" height="315" src="{{ $url }}" frameborder="0"
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  @endforeach
  @endif

  @if (isset($work['projectTools']))
  <h1 class=" h1">使用したツール</h1>

  <ul id="programming-languages">
    @if (in_array('Python', $work['projectTools']))
    <li>
      <a href="https://python.org" target="_blank" rel="noopener noreferrer">
        <div class="button bg-python">
          <i class="fab fa-python"></i>
        </div>
        <span>Python</span>
      </a>
    </li>
    @endif

    @if (in_array('Javascript', $work['projectTools']))
    <li>
      <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noopener noreferrer">
        <div class="button bg-javascript">
          <i class="fab fa-js-square"></i>
        </div>
        <span>Javascript</span>
      </a>
    </li>
    @endif

    @if (in_array('TypeScript', $work['projectTools']))
    <li>
      <a href="https://www.typescriptlang.org/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-typescript">
          <i class="fab fa-js-square"></i>
        </div>
        <span>TypeScript</span>
      </a>
    </li>
    @endif

    @if (in_array('C#', $work['projectTools']))
    <li>
      <a href="https://www.microsoft.com/net" target="_blank" rel="noopener noreferrer">
        <div class="button bg-csharp">
          <i class="fab fa-microsoft"></i>
        </div>
        <span>C#</span>
      </a>
    </li>
    @endif

    @if (in_array('PHP', $work['projectTools']))
    <li>
      <a href="https://www.php.net/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-php">
          <i class="fab fa-php"></i>
        </div>
        <span>PHP</span>
      </a>
    </li>
    @endif

    @if (in_array('Mysql', $work['projectTools']))
    <li>
      <a href="https://www.mysql.com/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-mysql">
          <i class="fas fa-database"></i>
        </div>
        <span>MySQL</span>
      </a>
    </li>
    @endif

    @if (in_array('PostgreSQL', $work['projectTools']))
    <li>
      <a href="https://www.postgresql.org/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-postgresql">
          <i class="fas fa-database"></i>
        </div>
        <span>PostgreSQL</span>
      </a>
    </li>
    @endif

    @if (in_array('Redis', $work['projectTools']))
    <li>
      <a href="https://redis.io/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-redis">
          <i class="fas fa-database"></i>
        </div>
        <span>Redis</span>
      </a>
    </li>
    @endif

    @if (in_array('Unity', $work['projectTools']))
    <li>
      <a href="https://unity.com/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-unity">
          <i class="fab fa-unity"></i>
        </div>
        <span>Unity</span>
      </a>
    </li>
    @endif

    @if (in_array('Laravel', $work['projectTools']))
    <li>
      <a href="https://laravel.com/" target="_blank" rel="noopener noreferrer">
        <div class="button bg-laravel">
          <i class="fab fa-laravel"></i>
        </div>
        <span>Laravel</span>
      </a>
    </li>
    @endif
  </ul>
  @endif
</main>
@endsection

@section('add-ts')
<script src="{{ asset('/js/fontawesome.js') }}" crossorigin="anonymous"></script>
@endsection