@extends('layouts.dashboard')
@section('content')
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Conférences PHP</a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/">Retour au site</a></li>
            <li><a href="/auth/logout">Logout</a></li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li class="active">
                    <a href="/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                </li>
                <li>
                    <a href="/posts/create"><i class="fa fa-fw fa-table"></i> Ajouter une conférence</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Dashboard
                    </h1>
                </div>
            </div>
            <!-- /.row -->
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Statut</th>
                            <th>Titre</th>
                            <th>Date début et fin</th>
                            <th>Mots clés</th>
                            <th>Changer le statut</th>
                            <th>Supprimer</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            @if($post->status == 'published')
                                <tr class="success">
                            @else
                                <tr class="info">
                                    @endif

                                    <td>{{$post->status}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-link">{{$post->title}} </a></td>
                                    <td>{{$post->date_start}} et {{$post->date_end}}</td>
                                    <td>@foreach($post->tags as $tag) <button type="button" class="btn btn-link">{{$tag->name}}</button>@endforeach</td>

                                        <td class="text-center">
                                            {!! Form::open(['class' => 'update','url'=>'status/'.$post->id, 'method' =>'PUT']) !!}

                                            @if($post->status =='published')
                                                {!! Form::hidden('status','unpublished')!!}
                                                {!! Form::submit('unpublished', ['class'=>'btn btn-warning', 'name'=>'status']) !!}
                                            @else
                                                {!! Form::hidden('status','published')!!}
                                                {!! Form::submit('published', ['class'=>'btn btn-warning', 'name'=>'status']) !!}

                                            @endif
                                            {!! Form::close()!!}</td>

                                    <td class="text-center">
                                        {!! Form::open(['class' => 'delete', 'url' => 'posts/' . $post->id, 'method' => 'DELETE']) !!}
                                        <button data-toggle="modal"
                                                data-target="#modal-delete-post"
                                                class="btn btn-link">
                                            <span class="glyphicon glyphicon-trash text-danger" aria-hidden="true"></span>
                                        </button>
                                        {!! Form::close() !!}</td>
                                </tr>
                                @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
    @endsection