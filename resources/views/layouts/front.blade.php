<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta content="conférence PHP" name="description">
    <meta content="Antoine AFUP" name="author">
    <meta content="Paris, France" name="geo.placename">
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" >
</head>
<body >
<header id="banner" role="banner">
    <div id="avatar"></div>
    <h1 id="afup"><a class="link-home" href="/">ConfPHP</a></h1>
    <p id="conf" >Prochaines conférences 2015</p>
    <nav role="navigation" id="navigation">
        <a href="/">Accueil</a>
        <a href="/about">A propos</a>
        <a href="/contact">Contact</a>
        @if(!Auth::guest())
            <a href="/dashboard">Dashboard</a>
            <a href="/auth/logout">Se déconnecter</a>
        @else
        <a href="/auth/login">Log in</a>
            @endif
    </nav>
</header>
<div id="main" role="main">
    <section id="post" >
        <h1>Conférences intéressantes autour du PHP</h1>
        @yield('content')
        <section id="sidebar">
            <h1>Sponsors</h1>
            <img class="logo" src="{{asset('/assets/img/logos/elao.png')}}" alt="">
            <img class="logo" src="{{asset('/assets/img/logos/eleph.png')}}" alt="">
            <img class="logo" src="{{asset('/assets/img/logos/joli.png')}}" alt="">
            <img class="logo" src="{{asset('/assets/img/logos/zol.png')}}" alt="">
        </section>
    </section>
</div>
<footer id="footer">
    <nav>
        <a href="/">Accueil</a>
        <a href="/mentions">Mentions légales</a>
        <a href="/contact">Contact</a>
    </nav>
</footer>
</body>
</html>