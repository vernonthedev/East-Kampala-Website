(function($) {
	'use strict';
	jQuery(document).on('ready', function() {
		jQuery('.mean-menu').meanmenu({
			meanScreenWidth: "991"
		});
		jQuery(window).on('load', function() {
			$('.preloader').fadeOut();
		});
		$('.default-btn').on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
				relX = e.pageX - parentOffset.left,
				relY = e.pageY - parentOffset.top;
			$(this).find('span').css({
				top: relY,
				left: relX
			})
		}).on('mouseout', function(e) {
			var parentOffset = $(this).offset(),
				relX = e.pageX - parentOffset.left,
				relY = e.pageY - parentOffset.top;
			$(this).find('span').css({
				top: relY,
				left: relX
			})
		});

		$('.banner_slider').owlCarousel({
			loop: true,
			nav: true,
			margin:5,
			dots: true,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			animateOut: "fadeOut",
			animateIn: "fadeIn",
			items: 1,
			navText: ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"],

		});

		$('.home-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			animateOut: "slideOutDown",
			animateIn: "slideInDown",
			items: 1,
			navText: ["<i class='flaticon-left-chevron'></i>", "<i class='flaticon-right-chevron'></i>"]
		});
		$('.home-slides-four').owlCarousel({
			loop: true,
			nav: true,
			dots: true,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			animateOut: "fadeOut",
			items: 1,
			navText: ["<i class='flaticon-left-chevron'></i>", "<i class='flaticon-right-chevron'></i>"]
		});
		$(".home-slides").on("translate.owl.carousel", function() {
			$(".main-banner-content span").removeClass("animated fadeInUp").css("opacity", "0");
			$(".main-banner-content p").removeClass("animated fadeInUp").css("opacity", "0");
			$(".main-banner-content h1").removeClass("animated fadeInUp").css("opacity", "0");
			$(".main-banner-content .banner-btn").removeClass("animated fadeInUp").css("opacity", "0");
		});
		$(".home-slides").on("translated.owl.carousel", function() {
			$(".main-banner-content span").addClass("animated fadeInUp").css("opacity", "1");
			$(".main-banner-content p").addClass("animated fadeInUp").css("opacity", "1");
			$(".main-banner-content h1").addClass("animated fadeInUp").css("opacity", "1");
			$(".main-banner-content .banner-btn").addClass("animated fadeInUp").css("opacity", "1");
		});
		$(".home-slides-four").on("translate.owl.carousel", function() {
			$(".main-banner-content span").removeClass("animated fadeInUp").css("opacity", "0");
			$(".main-banner-content p").removeClass("animated fadeInUp").css("opacity", "0");
			$(".main-banner-content h1").removeClass("animated fadeInUp").css("opacity", "0");
			$(".main-banner-content .banner-btn").removeClass("animated fadeInUp").css("opacity", "0");
		});
		$(".home-slides-four").on("translated.owl.carousel", function() {
			$(".main-banner-content span").addClass("animated fadeInUp").css("opacity", "1");
			$(".main-banner-content p").addClass("animated fadeInUp").css("opacity", "1");
			$(".main-banner-content h1").addClass("animated fadeInUp").css("opacity", "1");
			$(".main-banner-content .banner-btn").addClass("animated fadeInUp").css("opacity", "1");
		});
		$('select').niceSelect();
		$(window).on('scroll', function() {
			if ($(this).scrollTop() > 150) {
				$('.navbar-area').addClass("is-sticky");
			} else {
				$('.navbar-area').removeClass("is-sticky");
			}
		});
		$('.banner-image-slider').owlCarousel({
			loop: true,
			nav: true,
			dots: false,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 1
				},
				1200: {
					items: 1
				}
			}
		});
		$(".burger-menu").on('click', function() {
			$('.sidebar-modal').toggleClass('active');
		});
		$(".sidebar-modal-close-btn").on('click', function() {
			$('.sidebar-modal').removeClass('active');
		});
		$('.close-btn').on('click', function() {
			$('.search-overlay').fadeOut();
			$('.search-btn').show();
			$('.close-btn').removeClass('active');
		});
		$('.search-btn').on('click', function() {
			$(this).hide();
			$('.search-overlay').fadeIn();
			$('.close-btn').addClass('active');
		});
		$('.popup-youtube').magnificPopup({
			disableOn: 320,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});
		$('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});
		$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
		$('.tab ul.tabs li a').on('click', function(g) {
			var tab = $(this).closest('.tab'),
				index = $(this).closest('li').index();
			tab.find('ul.tabs > li').removeClass('current');
			$(this).closest('li').addClass('current');
			tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
			g.preventDefault();
		});
		$('.news_slider').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			autoplayHoverPause: true,
			autoplay: false,
			smartSpeed: 500,
			margin: 10,
			navText: ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				800: {
					items: 1
				},
				1000: {
					items: 2
				},
				1400: {
					items: 2
				}
			}
		});

		$('.team_slider').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 500,
			margin: 30,
			navText: ["<i class='bx bx-chevron-left'></i>", "<i class='bx bx-chevron-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				900: {
					items: 3
				},
				1200: {
					items: 4
				},
				1400: {
					items: 5
				}
			}
		});

		$('.testimonials-slider').owlCarousel({
			loop: true,
			nav: true,
			dots: false,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			margin: 30,
			navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				991: {
					items: 1
				},
				1200: {
					items: 1
				}
			}
		});
		$('.testimonials-slider-two').owlCarousel({
			loop: true,
			nav: false,
			dots: false,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			margin: 30,
			navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 2
				}
			}
		});
		$('.feature-slider').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			margin: 30,
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 3
				}
			}
		});
		$(function() {
			$(window).on('scroll', function() {
				var scrolled = $(window).scrollTop();
				if (scrolled > 600) $('.go-top').addClass('active');
				if (scrolled < 600) $('.go-top').removeClass('active');
			});
			$('.go-top').on('click', function() {
				$("html, body").animate({
					scrollTop: "0"
				}, 500);
			});
		});
		jQuery('.skill-bar').each(function() {
			jQuery(this).find('.progress-content, .progress-content-two, .progress-content-three').animate({
				width: jQuery(this).attr('data-percentage')
			}, 2000);
			jQuery(this).find('.progress-number-mark').animate({
				left: jQuery(this).attr('data-percentage')
			}, {
				duration: 2000,
				step: function(now, fx) {
					var data = Math.round(now);
					jQuery(this).find('.percent').html(data + '%');
				}
			});
		});
		$('.feedback-slider').owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			autoplayHoverPause: true,
			autoplay: true,
			smartSpeed: 1000,
			margin: 30,
			navText: ["<i class='flaticon-left'></i>", "<i class='flaticon-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				1200: {
					items: 2
				}
			}
		});
		$('.instagram-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: false,
			autoplayHoverPause: true,
			smartSpeed: 750,
			autoplay: true,
			navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
			responsive: {
				0: {
					items: 2,
				},
				768: {
					items: 6,
				},
				1200: {
					items: 5,
				}
			}
		});
		$(".newsletter-form").validator().on("submit", function(event) {
			if (event.isDefaultPrevented()) {
				formErrorSub();
				submitMSGSub(false, "Please enter your email correctly.");
			} else {
				event.preventDefault();
			}
		});

		function callbackFunction(resp) {
			if (resp.result === "success") {
				formSuccessSub();
			} else {
				formErrorSub();
			}
		}

		function formSuccessSub() {
			$(".newsletter-form")[0].reset();
			submitMSGSub(true, "Thank you for subscribing!");
			setTimeout(function() {
				$("#validator-newsletter").addClass('hide');
			}, 4000)
		}

		function formErrorSub() {
			$(".newsletter-form").addClass("animated shake");
			setTimeout(function() {
				$(".newsletter-form").removeClass("animated shake");
			}, 1000)
		}

		function submitMSGSub(valid, msg) {
			if (valid) {
				var msgClasses = "validation-success";
			} else {
				var msgClasses = "validation-danger";
			}
			$("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
		}
		$(".newsletter-form").ajaxChimp({
			url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9",
			callback: callbackFunction
		});
		$('a[data-imagelightbox="popup-btn"]').imageLightbox({
			activity: true,
			overlay: true,
			button: true,
			arrows: true
		});
		$(function() {
			$('.accordion').find('.accordion-title').on('click', function() {
				$(this).toggleClass('active');
				$(this).next().slideToggle('fast');
				$('.accordion-content').not($(this).next()).slideUp('fast');
				$('.accordion-title').not($(this)).removeClass('active');
			});
		});
		jQuery(window).on('load', function() {
			$('#preloader').fadeOut()
		})
	});
})(jQuery);
