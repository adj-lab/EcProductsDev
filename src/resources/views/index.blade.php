@extends('layouts.app')
@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
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
        <h2>商品一覧</h2>
      </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item"><検索用テキストボックス></span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="product_name" placeholder="商品名で検索" />
              <div class="form__error">
                <!--バリデーション実行結果-->
                @error('product_name')
                {{ $message }}
                @enderror
            </div>
        </div>  
    </div>
</div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">< 検索ボタン ></span>
          </div>
          <div class="form__group-content">
            <div class="form__error">
                <!--バリデーション実行結果-->
                @error('email')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">< 価格順で表示 ></span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="" placeholder="" />
            </div>
            <div class="form__error">
            <!--バリデーション実行結果-->
                @error('tel_first')
                {{ $message }}
                @enderror
              </div>
          </div>
        </div>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">応用機能：価格順で表示</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--select">

           <option disabled selected>価格で並べ替え</option>
              </select>
            </div>
            <div class="form__error">
                <!--バリデーション実行結果-->
                @error('inquiry_type')
                {{ $message }}
                @enderror
            </div>
          </div>
        </div>
        <form class="form" action="products/register" method="GET">
          @csrf
            <div class="form__button">
              <button class="form__button-submit" type="submit" >+商品を追加</button>
            </div>
        </form>

        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">< 画像：GridLayoutなど ></span>
          </div>
          <div class="form__products-images">
            @foreach ($products as $product)
            <a href="{{ route('product_detail', $product->id)}}">
              <img src="{{asset('storage/' . $product->image)}}" alt="{{ $product->name }}">
            </a>
            @endforeach
        </div>
          <!--バリデーション実行結果-->
                @error('detail')
                {{ $message }}
                @enderror
              </div>
          </div>
            </div>
            <div class="form__nation">
                <ul>
                    <li><a href="page/1">1</li>
                    <li><a href="page/2">2</li>
                    <li><a href="page/3">3</li>
                    <li><a href="page/4">4</li>
                </ul>
            </div>
        </div>
      </div>
  </main>
</body>

</html>
