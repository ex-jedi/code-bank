<?php include('../perch/runtime.php'); ?>
<?php
perch_member_log_out();
perch_shop_empty_cart();
 ?>
<!DOCTYPE html>

<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script type="text/javascript" src="/scripts/main-min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title><?php perch_content('Store Page Title') ?></title>
	<meta name="description" content="<?php perch_content('Store meta description'); ?>">
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="/favicon-194x194.png" sizes="194x194">
		<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
		<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
		<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="msapplication-TileImage" content="/mstile-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-63560047-1', 'auto');
			ga('send', 'pageview');
		</script>
</head>

<body>

	<div class="wrapper">

<header>
<h1 class="main-heading"><a href="/"><?php perch_content('Sitewide Main Heading'); ?></a></h1>

				<nav class="main-nav">
					<div class="responsive-menu">
						<a href="/gallery/">galleries</a>
						<a href="/shop/">shop</a>
						<a href="/blog">blog</a>
						<a href="/services.php">about me</a>
						<a href="/contact-me.php">contact me</a>
					</div>
					<a href="#" id="pull"><span class="pull-span">Show </span>Menu</a>
				</nav>

</header>


		<main class="main-content logout-page">

      <?php perch_content('Log Out'); ?>

    </main>
    <?php PerchUtil::output_debug(); ?>
    <?php perch_layout('main.footer'); ?>
	</div> <!-- wrapper div -->

</body>

</html>
