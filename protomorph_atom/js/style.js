/* =======================================================================
 * Protomorph Atom: Version 1.0.0
 * @ProtoMorph (http://protomorph.cf/)
 * =======================================================================
 * Copyright 2014
 * Licensed GNU General Public License, version 2 (GPL-2.0)
 * ======================================================================= */
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	var msViewportStyle = document.createElement('style');

	msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));

	document.querySelector('head').appendChild(msViewportStyle);
}

;(function ($, window, document, undefined) {
	"use strict";

	// options
	var options = {
		animate: 600,	// Animate duration.
		duration: 300,	// Fade in/out time.
		ease: 'swing',	// Ease type.
		offset: 200		// To top show/hide offset.
	};

	// DROPDOWN MENU
	// =============

	$('[data-toggle="dropdown"]').on('click touchstart', function(e) {
		$(this).parent('.dropdown')
			.toggleClass('open');

		if (!$(this).parent('.dropdown').hasClass('open')) {
			$(this).next('.dropdown-menu')
				.slideUp(options.duration, options.ease);
		} else {
			$(this).next('.dropdown-menu')
				.slideDown(options.duration, options.ease);
		}

		e.preventDefault();
	});

	$('body').on('click touchstart', function(e) {
		if (!$(e.target).is('.dropdown-menu') &&
			!$(e.target).parents().is('.dropdown')
		) {
			$('.dropdown-menu').slideUp(options.duration, options.ease);

			$('.dropdown').removeClass('open');
		}
	});

	// FLOAT LABELS
	// ============

	$('html, body').find('.float-input').each(function() {
		$(this).on('check-value', function() {
			var _label = $(this).next('.float-label');

			if (this.value !== '') {
				_label.addClass('in');
			} else {
				_label.removeClass('in');
			}
		})
		.on('keyup', function() {
			$(this).trigger('check-value');
		})
		.on('input propertychange', function() {
			$(this).trigger('check-value');
		})
		.on('textarea propertychange', function() {
			$(this).trigger('check-value');
		})
		.trigger('check-value');
	});

	// HIGHLIGHT.JS
	// ============
	hljs.configure({
		tabReplace: '	'
	});

	$('pre code, pre').each(function (i, block) {
		hljs.highlightBlock(block);
	});

	// OFF CANVAS NAVBAR
	// =================

	$('[data-toggle="off-canvas"]').on('click touchstart', function() {
		$('.page-body').toggleClass('in');
	});

	$('body').on('click touchstart', function(e) {
		if (!$(e.target).is('[data-toggle="off-canvas"]') &&
			!$(e.target).is('.navbar-off-canvas') &&
			!$(e.target).parents().is('.navbar-off-canvas')) $('.page-body').removeClass('in');
	});

	// TO TOP BUTTON
	// =============
	$(window).on('scroll', function() {
		if ($(this).scrollTop() > options.offset) {
			$('.scroll-up').stop(true, true)
				.fadeIn(options.duration, options.ease);
		} else if ($(this).scrollTop() <= options.offset) {
			$('.scroll-up').stop(true, true)
				.fadeOut(options.duration, options.ease);
		}
	});

	$('.scroll-up').on('click touchstart', function(e) {
		$('html, body').animate({scrollTop: 0},
			options.animate,
			options.ease
		);

		e.preventDefault();
	});

})(jQuery, window, document);
