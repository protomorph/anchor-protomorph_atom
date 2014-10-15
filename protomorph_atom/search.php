<?php theme_include('header'); ?>

<?php if(search_term() === ''): ?>
	<h1>Search</h1>

	<form class="search" id="search" action="<?php echo search_url(); ?>" method="post" role="search">
		<div class="input-group">
			<input class="float-input" id="term" type="search" name="term" placeholder="Search">
			<label class="float-label" for="term">Search</label>
		</div>
	</form>
<?php elseif(has_search_results()): ?>
	<h1>Search term &ldquo;<?php echo e(search_term()); ?>&rdquo;.</h1>

	<h4>Total results: <?php echo total_search_results(); ?></h4>

	<?php $i = 0; while(search_results()): $i++; ?>
	<article class="article clearfix">
		<h2>
			<a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a>
		</h2>

		<footer>
			Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('jS F Y', article_time()); ?></time>
			by <?php echo article_author('real_name'); ?>.
			<a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a>.
		</footer>
	</article>
	<?php endwhile; ?>

	<?php if(has_pagination()): ?>
	<ul class="pagination">
		<li class="previous">
			<?php echo search_prev('Older'); ?>
		</li>

		<li class="next">
			<?php echo search_next('Newer'); ?>
		</li>
	</ul>
	<?php endif; ?>

<?php else: ?>
	<h1>Search</h1>

	<h3>Unfortunately, there are no results for &ldquo;<?php echo e(search_term()); ?>&rdquo;</h3>

	<form class="search" id="search" action="<?php echo search_url(); ?>" method="post" role="search">
		<div class="input-group">
			<input class="float-input" id="term" type="search" name="term" placeholder="Search">
			<label class="float-label" for="term">Search</label>
		</div>
	</form>
<?php endif; ?>

<?php theme_include('footer'); ?>