@extends('layouts.main')

@section('content')
    <h1>{{$article->title}}</h1>

    {{$article->body}}
    <hr>

    <div class="card">
        <div class="card-block">
            <form method="POST" action="/articles/{{ $article->id }}/comments">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" placeholder="Your comment here." class="form-control" required>

                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add comment</button>
                </div>
            </form>
        </div>
    </div>

    @include('partials.errors')

    <br>

    <div class="fa-comments">
        <ul class="list-group">
            @foreach($article->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $article->user->name }} &nbsp;
                    </strong>
                    {{ $comment->updated_at->diffForHumans() }}: &nbsp;

                    {{ $comment->body }}
                </li>
            @endforeach
        </ul>
    </div>

@endsection