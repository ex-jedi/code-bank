<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/css/main.css">
		<link rel="stylesheet" href="/css/blog.css">

		<!-- Perch Meta -->
	 	<?php perch_blog_post_meta(perch_get('s'));

		perch_page_attributes(array(
			'template' => 'favicons.html'
		));

		?>
		<!-- Google Analytics -->
		<?php perch_content('Analytics'); ?>

<!-- Cookie Warning -->
<!-- TODO: Move to footer -->
<?php perch_content("Cookie Warning"); ?>

	</head>
	<body>
	  <div class="site-wrapper blog-post-wrapper">
	    <header class="main-header blog-header">
				<div class="header-inner">
					<nav class="main-nav">
						<?php perch_pages_navigation(array(
							'hide-extensions' => true,
						)); ?>
					</nav>
				</div>
				<?php perch_content('Header Title'); ?>
	    </header>
