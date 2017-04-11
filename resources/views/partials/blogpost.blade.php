@section('content')
    @foreach($articles as $article)
        <div class="blog-post">
            <h2 class="blog-post-title">
                <a href="/articles/{{ $article->id }}">
                    {{ $article->title }}
                </a>

            </h2>
            <p class="blog-post-meta">

                {{ $article->updated_at->toFormattedDateString() }}

                by

                <a href="#">{{ $article->user->name }}</a>

            </p>

            {{ $article->body }}
        </div><!-- /.blog-post -->
    @endforeach
@endsection