<?php theme_include('header'); ?>

<?php if(has_posts()): ?>

	<?php posts(); ?>
	<article class="article clearfix">
		<h1>
			<a href="<?php echo article_url(); ?>">
				<?php echo article_title(); ?>
			</a>
		</h1>

		<p class="description">
			<?php echo article_description(); ?>
		</p>

		<footer>
			Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('jS F Y', article_time()); ?></time>
			by <?php echo article_author('real_name'); ?>.
			<span>
				<a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a>.
			<?php if(comments_open()): ?>
				<?php echo total_article_comments() . pluralise(total_article_comments(), ' comment'); ?>.
			<?php endif; ?>
			</span>
		</footer>
	</article>

	<?php while(posts()): ?>
	<article class="article clearfix">
		<h2>
			<a href="<?php echo article_url(); ?>">
				<?php echo article_title(); ?>
			</a>
		</h2>

		<p class="description">
			<?php echo article_description(); ?>
		</p>

		<footer>
			Posted <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo date('jS F Y', article_time()); ?></time>
			by <?php echo article_author('real_name'); ?>.
			<span>
				<a href="<?php echo article_category_url(); ?>"><?php echo article_category(); ?></a>.
			<?php if(comments_open()): ?>
				<?php echo total_article_comments() . pluralise(total_article_comments(), ' comment'); ?>.
			<?php endif; ?>
			</span>
		</footer>
	</article>
	<?php endwhile; ?>

	<?php if(has_pagination()): ?>
	<ul class="pagination">
		<li class="previous">
			<?php echo posts_prev('Older'); ?>
		</li>

		<li class="next">
			<?php echo posts_next('Newer'); ?>
		</li>
	</ul>
	<?php endif; ?>

<?php else: ?>
	<article class="article">
		<h1>No posts yet!</h1>

		<div class="description">There are currently no posts here, try again later!</div>
	</article>
<?php endif; ?>

<?php theme_include('footer'); ?>