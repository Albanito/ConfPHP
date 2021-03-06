<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ConfPHP - Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('/assets/css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('/assets/css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('/assets/css/plugins/morris.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
@if ('flash_message'))
    <div class="alert alert-success"{{('flash_message')? 'alert-important' : ''}}>

    </div>
    @endif
@yield('content')

<!-- jQuery -->
<script src="{{asset('/assets/')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{asset('/assets/vendor/bootstrap.js')}}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{asset('/assets/js/plugins/morris/raphael.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('/assets/js/plugins/morris/morris-data.js')}}"></script>

</body>

</html>