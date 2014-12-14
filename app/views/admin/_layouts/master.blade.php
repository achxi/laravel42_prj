<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $title }}</title>
    {{ HTML::style('public/default/css/bootstrap.min.css') }}
    {{ HTML::style('public/default/css/font-awesome.min.css') }}
    {{ HTML::style('public/default/css/prettyPhoto.css') }}
    {{ HTML::style('public/default/css/price-range.css') }}
    {{ HTML::style('public/default/css/animate.css') }}
    {{ HTML::style('public/default/css/main.css') }}
    {{ HTML::style('public/default/css/responsive.css') }}
    {{ HTML::style('public/default/css/mystyle.css') }}
    <!--[if lt IE 9]>
    {{ HTML::script('default/js/html5shiv.js') }}
    {{ HTML::script('default/js/respond.min.js') }}
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
@include('admin._layouts.header')
	@section('cart')
	   <h1>Welcome to admin index action</h1>
	@show <!-- end cart section -->
@include('default._layouts.footer', $types)
	

    <script language="javascript">
        var baseURL= "<?php echo url();?>";
    </script>  
    {{ HTML::script('public/default/js/jquery.js') }}
    {{ HTML::script('public/default/js/jquery-ui.min.js') }}
	{{ HTML::script('public/default/js/bootstrap.min.js') }}
	{{ HTML::script('public/default/js/jquery.scrollUp.min.js') }}
	{{ HTML::script('public/default/js/price-range.js') }}
    {{ HTML::script('public/default/js/jquery.prettyPhoto.js') }}
    {{ HTML::script('public/default/js/main.js') }}
</body>
</html>