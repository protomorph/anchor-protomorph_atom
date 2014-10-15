<?php theme_include('header'); ?>

	<article class="article error-page clearfix">
		<h1><span>Page not found</span></h1>

		<h3>Unfortunately, the page <code>/<?php echo htmlspecialchars(current_url()); ?></code> could not be found.</h3>

		<p>That page has either been moved or no longer exists.</p>

		<div>Try <a href="<?php echo search_url(); ?>">searching</a> or return to the <a href="/">homepage</a>.</div>
	</article>

<?php theme_include('footer'); ?>
