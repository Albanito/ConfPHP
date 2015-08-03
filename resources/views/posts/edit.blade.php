@extends('layouts.front')
@section('content')
    <h1>Edit : {{$post->title}}</h1>

    {!! Form::model($post, ['method' => 'PATCH', 'files' => true, 'action' => ['PostController@update', $post->id]]) !!}

    <div class="from-group">
        {!! Form::label('title','Titre:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('excerpt','Résumé de la conférence:') !!}
        {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
    </div>

    <div class="from-group">
        {!! Form::label('content','Contenu:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('date_start','Date début:') !!}
        {!! Form::input('datetime-local','date_start', null, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('date_end','Date fin:') !!}
        {!! Form::input('datetime-local','date_end', null, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('link_thumbnail','Image') !!}
        {!! Form::file('link_thumbnail', null, ['class' => 'form-control']) !!}
    </div>
    <div class="from-group">
        {!! Form::label('url_site','Url site web:') !!}
        {!! Form::text('url_site', null, ['class' => 'form-control']) !!}
    </div>

    <div class="from-group">
        {!! Form::submit('Publier la conférence',['class' => 'btn btn-primary form-control']) !!}
    </div>


    {!! Form::close() !!}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @endsection