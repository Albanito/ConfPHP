@extends('layouts.front')
@section('content')

            @foreach($posts as $post)
                <article class="news">
                    <h2><a href="/posts/{{$post->id}}" class="link-post" >{{$post->title}}</a></h2>
                    <img class="left thumb" src="
                    @if($post->link_thumbnail){{url('assets/img/confs',$post->link_thumbnail)}}" >

                    @endif

                    <p class="abstract">
                        {{$post->excerpt}}
                        <br>
                        <a class="link" href="/post/{{$post->id}}">lire la suite...</a>
                        <br>
                    </p>
                    <p><a class="link-outside" href="{{$post->url_site}}" >site web de la conférence</a>
                    </p>
                    <p class="link-keyword" >Mots clefs:
                        @foreach($post->tags as $tag)<a  href="#">{{$tag->name}}</a> @endforeach
                    </p>
                    <p>Nombre de commentaires : {{count($post->comments)}}</p>

                    <footer>
                        <h3 class="date">Debut: {{$post->DateStart()}} fin: {{$post->DateEnd()}} </h3>
                    </footer>
                </article>
                @endforeach

    @endsection