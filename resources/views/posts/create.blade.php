@extends('layouts.front')
@section('content')

<h1>Nouvelle conférence</h1>
{!! Form::open(['url' => 'posts', 'files' => true]) !!}

<div class="from-group">
{!! Form::label('title','Titre:') !!}<br>
{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('excerpt','Résumé de la conférence:') !!}<br>
    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
</div>


<div class="from-group">
    {!! Form::label('content','Contenu:') !!}<br>
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('date_start','Date début:') !!}<br>
    {!! Form::input('datetime-local','date_start', null, ['class' => 'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('date_end','Date fin:') !!}<br>
    {!! Form::input('datetime-local','date_end', null, ['class' => 'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('link_thumbnail','Image') !!}<br>
    {!! Form::file('link_thumbnail', null, ['class' => 'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::label('url_site','Url site web:') !!}<br>
    {!! Form::text('url_site', null, ['class' => 'form-control']) !!}
</div>

<div class="from-group">
    {!! Form::submit('Publier la conférence',['class' => 'btn btn-primary form-control']) !!}<br>
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