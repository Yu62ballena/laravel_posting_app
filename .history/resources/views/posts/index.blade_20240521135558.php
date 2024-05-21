<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>投稿一覧</title>

      {{-- Bootstrap --}}
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light">
<div class="container">
                <a href="{{ route('posts.index') }}" class="navbar-brand">投稿アプリ</a>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
</div>
        </nav>
    </header>

        <main>
            <div class="container">
                <h1 class="fs-2 my-3">投稿一覧</h1>

                @if(session('flash_message'))
                    <p class="text-success">{{ session('flash_message') }}</p>
                @endif

                @if(session('error_message'))
                    <p class="text-danger">{{ session('error_message') }}</p>
                @endif

                <div class="mb-2">
                    <a href="{{ route('posts.create') }}" class="text-decoration-none">新規投稿</a>
                </div>

                @if($posts->isNotEmpty())
                    @foreach ($posts as $post)
                        <article>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h2 class="card-title fs-5">{{ $post->title }}</h2>
                                    <p class="card-text">{{ $post->content }}</p>
                                    <div class="d-flex">
                                        <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-primary d-block me-1">詳細</a>
                                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-primary d-block me-1">編集</a>
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('本当に削除してもよろしいですか？');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">削除</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                @else
                    <p>投稿はありません</p>
                @endif
            </div>
        </main>

        <footer>
            <p>&copy; 投稿アプリ All rights reserved.</p>
        </footer>

         {{-- Bootstrap --}}
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
