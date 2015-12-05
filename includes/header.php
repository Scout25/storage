<?php
session_start();
$current_url = $_SERVER['HTTP_HOST'];
$current_uri = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<!-- Head -->
<title><?= $head_title ?></title>
<meta name="description" content="">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta http-equiv="Content-Language" content="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="scouts,scoutisme,guides,pluralistes,jeunes,jeunesse,mouvement de jeunesse,activités,animations,ganshoren,bruxelles,Bruxelles-Noroi,section,animateurs,week-end,adolescents,jeunes adolescents">
    <meta name="author" content="Axel Capaert">

	<!--link rel="stylesheet/less" href="/less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="/less/responsive.less" type="text/css" /-->
	<!--script src="/js/bootstrap/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/js/bootstrap/html5shiv.js"></script>
    <![endif]-->


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/img/icons/apple_touch/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/img/icons/apple_touch/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/img/icons/apple_touch/72.png">
    <link rel="apple-touch-icon-precomposed" href="/img/icons/apple_touch/57.png">
    <link rel="shortcut icon" href="/img/icons/favicon.png">

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="/css/nprogress/nprogress.css"> -->
    <!-- <link href="/css/boootstrap.css" rel="stylesheet"> -->
    <!-- <link href="/css/bootstrap.css" rel="stylesheet"> -->

    <!-- Add custom CSS here -->
    <!-- <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link href="/css/stylish-portfolio.css" rel="stylesheet"> -->
    <link href="/css/scout25.css" rel="stylesheet">
    
    <!-- Google Analytics -->
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-58418852-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>

<body class="index">
    <!-- Navbar -->
    <?php include("navbar.php"); ?>