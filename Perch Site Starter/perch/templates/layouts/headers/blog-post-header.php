<!-- Anything to include in head goes here  -->
</head>
	<body class="<?php perch_page_attribute('bodyClass', array('template' => 'bits.html' )); ?>" >
		<!-- Cookie Warning -->
		<?php perch_content("Cookie Warning"); ?>
		<div class="site-wrapper">
			<header class="main-header blog-post-header">
				<!-- Skip to main content link  -->
				<a class="show-on-focus"  href="#main-content">Skip to main content</a>
				<div class="header-nav-bar">
					<?php perch_content("Main Logo"); ?>
					<?php perch_content("Header Phone Number"); ?>
					<?php perch_pages_navigation(array(
						'hide-extensions' => true,
			)); ?>
			</div>
		</header>