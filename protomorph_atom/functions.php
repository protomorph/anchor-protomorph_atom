<?php
/* =======================================================================
 * Protomorph Atom: Version 1.0.0
 * @ProtoMorph (http://protomorph.cf/)
 * =======================================================================
 * Copyright 2014
 * Licensed under the MIT license (http://protomorph.cf/)
 * ======================================================================= */
$GLOBALS['atom'] = [
	'article_next'		=> 'Newer',
	'article_prev'		=> 'Older',
	'gravatar_rating'	=> 'g',			// Gravatar rating [ g | pg | r | x ].
	'gravatar_type'		=> 'retro',		// Gravatar type [ mm | identicon | monsterid | wavatar | retro ].
	'twitter_user'		=> 'anchorcms',	// Twitter username or leave blank to disable.
];

function numeral($number, $hideIfOne = false) {
	if ($hideIfOne === true and $number == 1) {
		return '';
	}
	
	$test = abs($number) % 10;
	$ext = ((abs($number) % 100 < 21 and abs($number) % 100 > 4) ? 'th' : (($test < 4) ? ($test < 3) ? ($test < 2) ? ($test < 1) ? 'th' : 'st' : 'nd' : 'rd' : 'th'));

	return $number . $ext;
}

function count_words($str) {
	return count(preg_split('/\s+/', strip_tags($str), null, PREG_SPLIT_NO_EMPTY));
}

function pluralise($amount, $str, $alt = '') {
	return intval($amount) === 1 ? $str : $str . ($alt !== '' ? $alt : 's');
}

function relative_time($date) {
	if (is_numeric($date)) $date = '@' . $date;

	$user_timezone = new DateTimeZone(Config::app('timezone'));
	$date = new DateTime($date, $user_timezone);

	// get current date in user timezone
	$now = new DateTime('now', $user_timezone);

	$elapsed = $now->format('U') - $date->format('U');

	if ($elapsed <= 1) {
		return 'Just now';
	}

	$times = array(
		31104000 => 'year',
		2592000 => 'month',
		604800 => 'week',
		86400 => 'day',
		3600 => 'hour',
		60 => 'minute',
		1 => 'second'
	);

	foreach ($times as $seconds => $title) {
		$rounded = $elapsed / $seconds;

		if ($rounded > 1) {
			$rounded = round($rounded);
			return $rounded . ' ' . pluralise($rounded, $title) . ' ago';
		}
	}
}

function twitter_account() {
	return site_meta('twitter', $GLOBALS['atom']['twitter_user']);
}

function twitter_url() {
	return 'https://twitter.com/' . twitter_account();
}

/* =======================================================================
 * Article functions
 * ======================================================================= */
function total_articles() {
	return Post::where(Base::table('posts.status'), '=', 'published')->count();
}

function article_pager() {
	if (article_previous_url() || article_next_url()) {
		if (article_previous_url()) {
			$article_previous = '<li class="previous"><a href="' . article_previous_url() . '">' . $GLOBALS['atom']['article_prev'] . '</a></li>';
		} else {
			$article_previous = false;
		}

		if (article_next_url()) {
			$article_next_url = '<li class="next"><a href="' . article_next_url() . '">' . $GLOBALS['atom']['article_next'] . '</a></li>';
		} else {
			$article_next_url = false;
		}

		return '<ul class="pagination">' . $article_previous . $article_next_url . '</ul>';
	} else {
		return false;
	}
}

function total_article_comments() {
	return Comment::where('post', '=', article_id())->count();
}

function comment_avatar($email) {
	$hash = hash('md5', strtolower(trim($email)));

	return 'http://www.gravatar.com/avatar/' . $hash . '?r=' . $GLOBALS['atom']['gravatar_rating'] . '&d=' . $GLOBALS['atom']['gravatar_type'];
}
