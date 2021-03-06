@foreach ($articles as $art)
<article class="article">
    <h4><a class="article_title_link" href='{{ action('ArticlesController@show', [$art->id, $art->slug]) }}'>{{ $art->title }}</a></h4>

    <h6 class="text-secondary">Автор статьи <a href="{{ route('user.profile', [$art->authoruid]) }}">{{ $art->author }}</a>. Создал {{ $art->created_at }}</h6>

    <br>
    <p>{{ $art->content }}</p>
    <hr>
</article>
@endforeach