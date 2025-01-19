<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>商品一覧ページ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <div class="all-contents">
        <div class="left-contents">
          <h1>商品一覧</h1>
          <!-- 商品一覧画面：商品検索実行（POST)リクエスト-->
            <form action="/products/search" method = "POST">
            @csrf
              <input type="text" name="keyword" class="keyword" placeholder="商品名で検索">
              <button type="submit" class="submit-button">検索</button>
              <!-- 応用機能：並び替え -->
              <label class="select-label">価格順で表示</label>
              <select class="select" name="sort" id="sort">
                <option value="">価格で並び替え</option>
                <option value="high_price">高い順に表示</option>
                <option value="low_price">低い順に表示</option>
              </select>
          </form>
          @if(@isset($sort)&& $sort != "")
              <div class="sort_contents">
                <p class="searched_data">{{$sort}}</p>
                <div class="close-content">
                  <a href="/products">
                    <img src="{{ asset('/images/close-icon.png') }}"  alt="閉じるアイコン" class="img-close-icon"/>
            </a>
          </div>
        </div>
        @endif
      </div>
    <!-- 商品追加：商品を追加ボタン押下で商品登録画面へ遷移 -->
      <div class="right-contents">
          <p class="message">{{session('message')}}</p>
              <button class="add-button" onclick="location.href='{{ route('product_regist') }}'"><span>+</span>商品を追加</button>
            <div class="product-contents">
              @foreach ($products as $product)
                <div class="product-content">
                  <a href="{{route('product_detail', $product->id)}}" class="product-link"></a>
                  <img src="{{asset('storage/' . $product->image)}}" alt="商品画像" class="img-content" />
                  <div class="detail-content">
                    <p>{{$product->name}}</p>
                    <p>{{$product->price}}</p>
                  </div>
                </div>
              @endforeach
            </div>
      </div>
</body>
</html>
