@extends('layouts.front')
@section('content')
                <article class="news">
                    <h2>{{$post->title}}</h2>
                    <img class="left" src="{{asset('/assets/img/confs/'.$post->link_thumbnail)}}" >
                    <p class="abstract"></p>
                        {{$post->excerpt}}
                        <br>
                        <p>{{$post->content}}</p>
                        <br>
                    <p><a class="link-outside" href="{{$post->url_site}}" >site web de la conférence</a>
                    </p>
                    <p class="link-keyword" >Mots clefs:
                        @foreach($post->tags as $tag)<a  href="#">{{$tag->name}}</a> @endforeach
                    </p>

                    <footer>
                        <h3 class="date">{{$post->date_start}} fin: {{$post->date_start}} </h3>
                    </footer>
                </article>
            @if(count($post->comments)>0)
                @foreach($post->comments as $comment)
                   <p>Auteur: {{$comment->email}}</p>
                    <p>Message:{{$comment->message}}</p>
                    @endforeach
                @else
                <p>Aucun commentaire. Soyez le premier à commenter ce post!</p>
                @endif
            <div>
            {!! Form::open() !!}
                <div class="form-group">
                {!! Form::label('Email') !!}
                {!! Form::email('blabla') !!}
                </div>

                <div class="form-group">
                {!! Form::label('Commentaire') !!}
                {!! Form::textarea('name') !!}
                {!! Form::submit('valider') !!}
                </div>
            {!! Form::close() !!}

            </div>
    @endsection