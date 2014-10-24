/* =======================================================================
 * Protomorph Atom: Version 1.0.0
 * @ProtoMorph (http://protomorph.tk/)
 * =======================================================================
 * Copyright 2014
 * Licensed GNU General Public License, version 2 (GPL-2.0)
 * ======================================================================= */

;(function ($, window, document, undefined) {
	"use strict";

	// DROPDOWN MENU
	// =============

	$('[data-toggle="dropdown"]').on('click touchstart', function(e) {
		$(this).parent('.dropdown')
			.toggleClass('open');

		if (!$(this).parent('.dropdown').hasClass('open')) {
			$(this).next('.dropdown-menu')
				.slideUp(300);
		} else {
			$(this).next('.dropdown-menu')
				.slideDown(300);
		}

		e.preventDefault();
	});

	$('body').on('click touchstart', function(e) {
		if (!$(e.target).is('.dropdown-menu') &&
			!$(e.target).parents().is('.dropdown')
		) {
			$('.dropdown-menu').slideUp(300);

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
		if ($(this).scrollTop() > 200) {
			$('.scroll-up').stop(true, true)
				.fadeIn(300);
		} else if ($(this).scrollTop() <= 200) {
			$('.scroll-up').stop(true, true)
				.fadeOut(300);
		}
	});

	$('.scroll-up').on('click touchstart', function(e) {
		$('html, body').animate({scrollTop: 0},
			600,
			'swing'
		);

		e.preventDefault();
	});

})(jQuery, window, document);
