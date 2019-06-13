<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('/css/styles.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center mb-5">
      <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top">
        <a class="navbar-brand text-dark" href="{{ url('/') }}">相方マッチング</a>
        <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active bg-secondary" href="{{ url('/search') }}">検索</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active bg-primary" href="{{ url('/show') }}">相性の良い相方</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active bg-info" href="{{ url('/event') }}">イベント</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active bg-success" href="{{ url('/profile') }}">プロフィール</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active bg-warning" href="{{ url('/favorite') }}">お気に入りリスト</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active bg-danger" href="{{ url('/messagebox') }}">メッセージボックス</a>
            </li>
          </ul>
        </div>
      </nav>

      {{-- ツイートボタン --}}
      <div class="text-right mt-5 pt-5">
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet?url={{ url('/') }}&text=相方マッチングサイト" data-size="large">Tweet</a>
      </div>
      @yield('header')

      {{-- ログイン完了メッセージ --}}
      @if (session('login'))
      <div class="alert alert-success mt-5">
        {{ session('login') }}
      </div>
      @endif

      @yield('body')
    </div>
    <!-- twitter -->
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    <!-- bootstrap関連（jQuery、Popper.js等） -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Google Map API関連（jQuery,js等） -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxbeYuC7fA8pnAHbvOlxeAlZScWYYmCxE"></script>
    <script type="text/javascript">
      //NSC東京
      var center1 = {
        lat: 35.695036, // 緯度
        lng: 139.760981 // 経度
      };
      var nsc_map = new google.maps.Map(document.getElementById('nsc_map'), {
        center: center1,
        zoom: 16 //地図のズームを設定
      });
      var marker = new google.maps.Marker({
        position: center1, // マーカーを立てる位置を指定
        map: nsc_map // マーカーを立てる地図を指定
      });

      //ワタナベコメディスクール
      var center2 = {
        lat: 35.647305,
        lng: 139.694671
      };
      var watanabe_map = new google.maps.Map(document.getElementById('watanabe_map'), {
        center: center2,
        zoom: 16
      });
      var marker = new google.maps.Marker({
        position: center2,
        map: watanabe_map
      });
    </script>
  </body>
</html>
