<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/universal.css">
	<link rel="stylesheet" href="<?php perch_page_attribute('css', array('template' => 'bits.html')) ;?>">
	<!-- Perch Meta -->
	<?php
	$domain        = 'https://'.$_SERVER["HTTP_HOST"];// TODO: Check Protocol
	$mainurl           = perch_page_url(array(
										    'hide-extensions'    => true,
										    'hide-default-doc'   => true,
										    'add-trailing-slash' => false,
										    'include-domain'     => true,
										), true);
	$mainsitename      = "Site Name";
	$pagetitlename = " - Site Name";
	$sharing_image = '/images/default_fb_image.jpg';

	PerchSystem::set_var('domain',$domain);
	PerchSystem::set_var('mainurl',$mainurl);
	PerchSystem::set_var('mainsitename',$mainsitename);
	PerchSystem::set_var('pagetitlename',$pagetitlename);
	PerchSystem::set_var('sharing_image',$sharing_image);

	perch_page_attributes(array(
		'template' => 'default.html'
	));
	?>
<!-- Google Analytics -->
<?php perch_content('Analytics'); ?>
</head>
	<body class="<?php perch_page_attribute('bodyClass', array('template' => 'bits.html' )); ?>">
		<div class="wrapper <?php perch_page_attribute('wrapperClass', array('template' => 'bits.html'));?>">
			<header class="main-header">
				<nav class="main-nav">
					<?php perch_pages_navigation(array(
							'hide-extensions' => true,
					)); ?>
				</nav>
			</header>
