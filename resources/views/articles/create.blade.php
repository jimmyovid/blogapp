@extends('layouts.main')

@section('content')
    <h1>Publish a new Article</h1>

    <hr/>

    {!! Form::open(['url' => 'articles']) !!}

    <div class="form-group">

        {!! Form::label('title', 'Title:')!!}
        {!! Form::text('title', null, ['class' => 'form-control'])!!}

    </div>

    <div class="form-group">

        {!! Form::label('body', 'Body:')!!}
        {!! Form::textarea('body', null, ['class' => 'form-control'])!!}

    </div>

    <div class="form-group">

        {!! Form::submit('Publish Article', ['class' => 'btn btn-primary form-control'])!!}

    </div>

    {!! Form::close() !!}



    @include('partials.errors')


@stop