<!DOCTYPE html>
<html lang="en-GB">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="/css/universal.css">
	<link rel="stylesheet" href="/css/gallery.css">
	<!-- Typekit -->
	<script src="https://use.typekit.net/kbq2qtf.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<!-- Perch Meta -->
	<?php
$domain        = 'https://'.$_SERVER["HTTP_HOST"];
$hard_gallery_domain = 'https://katephoenix.uk/gallery/';
$mainurl           = perch_page_url(array(
									    'hide-extensions'    => true,
									    'hide-default-doc'   => true,
									    'add-trailing-slash' => false,
									    'include-domain'     => true,
									), true);
$slug = perch_gallery_album_field(perch_get('s'), 'albumSlug', true);
$mainsitename  = "Kate Phoenix Art";
$pagetitlename = " - Kate Phoenix Art";
$sharing_image =  perch_gallery_album_images(perch_get('s'), array(
																'template' =>'sharing-image.html',
																'count' => 1,
															), true);
$gallery_title = perch_gallery_album_field(perch_get('s'), 'albumTitle', true);
$gallery_description = perch_gallery_album_field(perch_get('s'), 'description', true);


PerchSystem::set_var('domain',$domain);
PerchSystem::set_var('hard_gallery_domain',$hard_gallery_domain);
PerchSystem::set_var('mainsitename',$mainsitename);
PerchSystem::set_var('mainurl',$mainurl);
PerchSystem::set_var('pagetitlename',$pagetitlename);
PerchSystem::set_var('sharing_image',$sharing_image);
PerchSystem::set_var('gallery_title',$gallery_title);
PerchSystem::set_var('gallery_description',$gallery_description);
PerchSystem::set_var('slug',$slug);




perch_page_attributes(array(
	'template' => 'gallery/gallery.html'
));
?>
<?php perch_content('Analytics'); ?>
</head>
<body>
	<?php perch_content('Google Noscript Tag'); ?>
  <div class="wrapper gallery-wrapper">
    <header class="main-header gallery-header">
			<div class="header-inner">
				<?php perch_content('Header Title'); ?>
				<nav class="main-nav">
					<?php perch_pages_navigation(array(
								'hide-extensions' => true,
						)); ?>
				</nav>
			</div>
		</header>
