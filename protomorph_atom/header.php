<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="imagetoolbar" content="no" />

	<meta name="generator" content="Anchor CMS" />
	<meta name="description" content="<?php echo site_description(); ?>" />

	<meta property="og:locale" content="en_GB" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo site_name(); ?>" />
	<meta property="og:image" content="<?php echo full_url(theme_url('css/img/og_image.png')); ?>" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:image:width" content="152" />
	<meta property="og:image:height" content="152" />
	<meta property="og:url" content="<?php echo full_url(e(current_url())); ?>" />
	<meta property="og:site_name" content="<?php echo site_name(); ?>" />
	<meta property="og:description" content="<?php echo site_description(); ?>" />
	
	<meta name="twitter:card" content="website">
	<meta name="twitter:url" content="<?php echo full_url(e(current_url())); ?>" />
	<meta name="twitter:title" content="<?php echo page_title('Page not found'); ?>" />
	<meta name="twitter:description" content="<?php echo site_description(); ?>" />
	<meta name="twitter:image" content="<?php echo full_url(theme_url('css/img/og_image.png')); ?>" />

	<meta itemprop="name" content="<?php echo site_name(); ?>" />
	<meta itemprop="description" content="<?php echo page_title('Page not found'); ?>" />
	<meta itemprop="image" content="<?php echo full_url(theme_url('css/img/og_image.png')); ?>" />

	<title><?php echo page_title('Page not found'); ?> - <?php echo site_name(); ?></title>

	<link rel="canonical" href="<?php echo full_url(e(current_url())); ?>">

	<link rel="icon" sizes="16x16 32x32 48x48 64x64" href="<?php echo theme_url('css/img/favicon.ico'); ?>" />

	<!--[if lt IE 9]>
		<link rel="shortcut icon" href="<?php echo theme_url('css/img/favicon.ico'); ?>" />
	<![endif]-->

	<meta name="mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="white" />
	<meta name="apple-mobile-web-app-title" content="<?php echo site_name(); ?>" />

	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo theme_url('css/img/apple-touch-icon-57x57.png'); ?>" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo theme_url('css/img/apple-touch-icon-114x114.png'); ?>" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo theme_url('css/img/apple-touch-icon-72x72.png'); ?>" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo theme_url('css/img/apple-touch-icon-144x144.png'); ?>" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo theme_url('css/img/apple-touch-icon-60x60.png'); ?>" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo theme_url('css/img/apple-touch-icon-120x120.png'); ?>" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo theme_url('css/img/apple-touch-icon-76x76.png'); ?>" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo theme_url('css/img/apple-touch-icon-152x152.png'); ?>" />

	<link rel="icon" type="image/png" href="<?php echo theme_url('css/img/favicon-196x196.png'); ?>" sizes="196x196" />
	<link rel="icon" type="image/png" href="<?php echo theme_url('css/img/favicon-96x96.png'); ?>" sizes="96x96" />
	<link rel="icon" type="image/png" href="<?php echo theme_url('css/img/favicon-32x32.png'); ?>" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo theme_url('css/img/favicon-16x16.png'); ?>" sizes="16x16" />
	<link rel="icon" type="image/png" href="<?php echo theme_url('css/img/favicon-128.png'); ?>" sizes="128x128" />

	<meta name="application-name" content="<?php echo site_name(); ?>" />
	<meta name="msapplication-TileColor" content="#FFFFFF" />
	<meta name="msapplication-TileImage" content="<?php echo theme_url('css/img/mstile-144x144.png'); ?>" />
	<meta name="msapplication-square70x70logo" content="<?php echo theme_url('css/img/mstile-70x70.png'); ?>" />
	<meta name="msapplication-square150x150logo" content="<?php echo theme_url('css/img/mstile-150x150.png'); ?>" />
	<meta name="msapplication-wide310x150logo" content="<?php echo theme_url('css/img/mstile-310x150.png'); ?>" />
	<meta name="msapplication-square310x310logo" content="<?php echo theme_url('css/img/mstile-310x310.png'); ?>" />
	<meta name="msapplication-notification" content="frequency=30;polling-uri=http://notifications.buildmypinnedsite.com/?feed=<?php echo rss_url(); ?>&amp;id=1;polling-uri2=http://notifications.buildmypinnedsite.com/?feed=<?php echo rss_url(); ?>&amp;id=2;polling-uri3=http://notifications.buildmypinnedsite.com/?feed=<?php echo rss_url(); ?>&amp;id=3;polling-uri4=http://notifications.buildmypinnedsite.com/?feed=<?php echo rss_url(); ?>&amp;id=4;polling-uri5=http://notifications.buildmypinnedsite.com/?feed=<?php echo rss_url(); ?>&amp;id=5;cycle=1" />

	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">

	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,300italic,400italic,600italic,700italic,800italic|Inconsolata:400,700" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" />
	<!-- A complete list of styles can be found at (https://highlightjs.org/static/test.html) -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/styles/github.min.css" />
	<link rel="stylesheet" href="<?php echo theme_url('/css/normalize.css'); ?>" />
	<link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>" />

	<!--[if lt IE 9]>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>

	<script>var base = '<?php echo theme_url(); ?>';</script>

	<?php if(customised() and article_css()): ?>
	<style><?php echo article_css(); ?></style>
	<?php endif; ?>
</head>

<body class="<?php echo body_class(); ?>">

	<nav class="navbar-off-canvas" role="navigation">
		<div class="inner">
			<form class="search" id="search" action="<?php echo search_url(); ?>" method="post" role="search">
				<input type="search" id="term" name="term" placeholder="Search" value="<?php echo search_term(); ?>">
			</form>

			<?php if(has_menu_items()): ?>
			<ul class="navlinks" role="menu">
				<?php while(menu_items()): ?>
				<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
					<a href="<?php echo menu_url(); ?>">
						<?php echo menu_name(); ?>
					</a>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<ul class="navlinks" role="menu">
				<li class="dropdown">
					<a href="#" data-toggle="dropdown">
						Categories
						<i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu" role="menu">
						<?php while(categories()): ?>
						<li>
							<a href="<?php echo category_url(); ?>">
								<?php echo category_title(); ?>
								<span><?php echo category_count(); ?></span>
							</a>
						</li>
						<?php endwhile; ?>
					</ul>
				</li>
			</ul>

			<footer class="footer clearfix" id="top">
				<ul class="foot-links" role="navigation">
					<li><a href="<?php echo rss_url(); ?>">RSS</a></li>

					<?php if(twitter_account()): ?>
					<li><a href="<?php echo twitter_url(); ?>">@<?php echo twitter_account(); ?></a></li>
					<?php endif; ?>

					<li><a href="<?php echo base_url('admin'); ?>">Admin</a></li>

					<li><a href="/">Home</a></li>
				</ul>

				<small><?php echo site_name(); ?>&copy; <?php echo date('Y'); ?>. All rights reserved.</small>
			</footer>
		</div>
	</nav>

	<div class="page-body">
		<header class="header">
			<button class="toggle" type="button" data-toggle="off-canvas">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</button>

			<a id="logo" href="<?php echo base_url(); ?>">
				<?php echo site_name(); ?>
			</a>
		</header>

		<div class="inner">

			<noscript>
				<div class="browser-alert">
					<h4>This site requires that you have javascript enabled for it to function correctly.</h4>
				</div>
			</noscript>

			<!--[if lt IE 9]>
			<div class="browser-alert">
				<h2>This site is not compatible with your version of Internet Explorer.</h2>

				<div class="browser-icons">
					<a href="http://www.google.com/chrome"><i class="browser-chrome"></i></a>
					<a href="http://www.firefox.com/"><i class="browser-firefox"></i></a>
					<a href="http://windows.microsoft.com/ie"><i class="browser-ie"></i></a>
					<a href="http://www.opera.com/"><i class="browser-opera"></i></a>
					<a href="http://www.apple.com/safari/"><i class="browser-safari"></i></a>
				</div>

				<h4>For a better, safer and faster experience please upgrade to a modern web browser.</h4>
			</div>
			<![endif]-->
