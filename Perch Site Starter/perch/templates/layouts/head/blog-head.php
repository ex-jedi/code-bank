<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="/css/main.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/css/main.css');?>">
		<link rel="stylesheet" href="/css/blog.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/css/blog.css');?>">

		<!-- Typekit  -->

		<!-- Perch Meta -->
	 	<?php perch_blog_post_meta(perch_get('s'));

		perch_page_attributes(array(
			'template' => 'favicons.html'
		));

		?>
<!-- Head end tag in relevant header file -->