<?php
$host = $_SERVER['HTTP_HOST'];
$host = 'https://'.$host;


if ($_GET) {
	$url = $_GET['cod'];
	$exp = explode('/', $url);
	$pgn = $exp[0];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Grupo de desenvolvedores de PHP do estado do Pará | PHPPA.ORG</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grupo de desenvolvedores de PHP do estado do Pará" />

<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
</script>
<!-- //for-mobile-apps -->
<link href="<?php echo "$host"; ?>/public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo "$host"; ?>/public/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo "$host"; ?>/public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo "$host"; ?>/public/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
</head>

<link rel="shortcut icon" href="<?php echo "$host"; ?>/public/images/phppa-icon.png">

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Navegação</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<!-- <a class="navbar-brand" href="<?php //echo "$host"; ?>">PHPPA.ORG <span>Grupo de desenvolvedores de PHP do estado do Pará</span></a> -->
							<a class="navbar-brand" href="<?php echo "$host"; ?>">
								<img src="<?php echo "$host"; ?>/public/images/phppa.png" width="200">
							</a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav cl-effect-14">
						<li><a href="<?php echo "$host"; ?>" class="active">Início</a></li>
						<li><a href="<?php echo "$host"; ?>/comunidade">Como Contribuir</a></li>
						<li><a href="<?php echo "$host"; ?>/comunidade">A Comunidade</a></li>
						<li><a href="#">Artigos</a></li>
						<li><a href="<?php echo "$host"; ?>/contato">Contato</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<?php

if (isset($pgn) and is_file("_$pgn.php")) {
	include("_$pgn.php");
}
else {
	include("_home.php");
}

?>
<!-- footer -->
	<div class="footer" >
		<div class="container" >
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<h3 class="title"></h3>
					<ul>
						<li><a href="<?php echo "$host"; ?>/comunidade">Como Contribuir</a></li>
						<li><a href="<?php echo "$host"; ?>/comunidade">A Comunidade</a></li>
						<li><a href="#">Artigos</a></li>
						<li><a href="#">Eventos</a></li>
						<li><a href="<?php echo "$host"; ?>/contato">Contato</a></li>
					</ul>
				</div>
				<div class="col-md-6 footer-grid ctact-grid">
						<a class="twitter-timeline" data-height="250" href="https://twitter.com/phppara?ref_src=twsrc%5Etfw">Tweets by phppara</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
				<div class="col-md-3 footer-grid contact-grid">
						<h3 class="title">Contato</h3>
						<ul>
							<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:contato@phppa.org">contato@phppa.org</a></li>
						</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="copy">
		<div class="container">
			<p>Copyright © <?php echo date("Y"); ?>. Design by <a target="_blank" href="https://w3layouts.com">W3layouts</a></p>
			<div class="social-icons">
				<ul>
					<li><a href="https://www.facebook.com/elephants.para/" target="_balnk" class="fb"></a></li>
					<li><a href="https://twitter.com/phppara" target="_balnk"></a></li>
					<li><a href="https://github.com/elephantspara" target="_balnk" class="gg"></a></li>
					<li><a href="#" class="pn"></a></li>
				</ul>
			</div>
		</div>
	</div>
<!--//footer-->
<!-- for bootstrap working -->
		<script src="<?php echo "$host"; ?>/public/js/bootstrap.js"> </script>
		<script src="<?php echo "$host"; ?>/public/js/owl.carousel.js"> </script>
<!-- //for bootstrap working -->
		<script src="<?php echo "$host"; ?>/public/js/funcoes.js"> </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84407708-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
