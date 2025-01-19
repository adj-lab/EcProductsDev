@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/productregist.css') }}" />
@endsection
@section('content')

<body>
  <header class="header">
    <div class="header__inner">
      <a class="header__logo">
        mogitate
      </a>
    </div>
  </header>

  <main>
    <div class="inquiry-form__content">
      <div class="inquiry-form__heading">
        <h2>商品登録</h2>
      </div>
      <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">< 画像：GridLayoutなど ></span>
          </div>
          <div class="form__group-content">
          <div class="form__error">
          <!--バリデーション実行結果-->
                @error('detail')
                {{ $message }}
                @enderror
              </div>
          </div>
            </div>
            <div class="form__nation">
                <ul>
                    <li>1</li>
                    <li><a href="page/2">2</li>
                    <li><a href="page/3">3</li>
                    <li><a href="page/4">4</li>
                </ul>

            </div>
        </div>
      </form>
    </div>
  </main>
</body>

</html>
