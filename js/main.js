/***********************
 отправка формы в php BEGIN
 ***********************/
$(function () {
	$(".ajax-form").on("submit", function (event) {
		var form = $(this);
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function () {
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
			if ($(this).is('select')) {
				if ($(this).val() === null) {
					$(this).addClass('error');
					send = false;
				}
			}
			if ($(this).is('input[type="checkbox"]')) {
				if ($(this).prop('checked') !== true) {
					$(this).addClass('error');
					send = false;
				}
			}
		});

		$(this).find("[data-req='true']").on('focus', function () {
			$(this).removeClass('error');
		});

		var form_data = new FormData(this);

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label').toString();
			form_data.append(input_label__name, input_label__value)
		});

		if (send === true) {
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data,
				success: (function (result) {
					var response = JSON.parse(result);
					console.log(response);
					$.fancybox.close();
					if (response["MAILER_ERROR"] !== undefined) {
						$.fancybox.open({src: '#modal-error'});
					} else {
						$.fancybox.open({src: '#modal-thanks'});
						setTimeout(function () {
							$.fancybox.close();
						}, 4500);
						form[0].reset();
					}
				})
			});
		}
	});
});
/***********************
 отправка формы в php END
 ***********************/


/***********************
 Input mask BEGIN
 ***********************/
$(function () {
	$("input[type='tel']").mask("+7 (999) 999-99-99");
});

/***********************
 Input mask END
 ***********************/


/***********************
 fancybox BEGIN
 ***********************/
function init_fancy() {
	$().fancybox({
		selector: '.fancy',
		buttons: ['close'],
		backFocus: false
	});
	$().fancybox({
		selector: '.fancy-modal',
		backFocus: false,
		touch: false
	});
	$('.fancy-map').fancybox({
		toolbar: false,
		smallBtn: true,
		backFocus: false
	});
}

function init_fancy__video() {
	$('.fancy-video').fancybox({
		toolbar: false,
		smallBtn: true,
		backFocus: false,
		animationEffect: "zoom-in-out",
		animationDuration: 300,
		transitionEffect: "slide",
		youtube: {
			controls: 1,
			showinfo: 0,
			autoplay: 1
		},
		onUpdate: function (instance, current) {
			var width,
				height,
				ratio = 16 / 9,
				video = current.$content;
			if (video) {
				video.hide();
				width = current.$slide.width() - 30;
				height = current.$slide.height() - 100;
				if (height * ratio > width) {
					height = width / ratio;
				} else {
					width = height * ratio;
				}
				video.css({
					width: width,
					height: height
				}).show();
			}
		}
	});
}

$(function () {
	init_fancy();
	init_fancy__video();
});
/***********************
 fancybox END
 ***********************/


/***********************
 top-menu BEGIN
 ***********************/
$(function($){

	function openSubMenu(id) {
		var self = $('[data-category='+id+']');
		self.addClass('active');
		$('#'+id).addClass('active');
		$('.header__bottom-cat-wrap').addClass('active');
	}

	function closeSubMenu() {
		$('[data-category]').removeClass('active');
		$('.header__bottom-cat-wrap').removeClass('active');
		$('.header__bottom-cat').removeClass('active');
	}

	var timer;
	var delay = 150;

	$('[data-category]').on('pointerenter touchstart',function () {
		var id = $(this).data('category');
		timer = setTimeout(function() {
			closeSubMenu();
			openSubMenu(id);
		}, delay);
	});

	$('.header__bottom').on('pointerleave',function () {
		closeSubMenu();
		clearTimeout(timer);
	});

	$('.header__bottom-links a').not('[data-category]').on('pointerenter touchstart',function () {
		closeSubMenu();
		clearTimeout(timer);
	});

	$(document).on('mouseup touchstart',function (e){
		var searchForm = $(".header__bottom");
		if (!searchForm.is(e.target) && searchForm.has(e.target).length === 0) {
			closeSubMenu();
			clearTimeout(timer);
		}
	});
});
/***********************
 top-menu END
 ***********************/


/***********************
 Mob menu BEGIN
 ***********************/
$(function(){
	$('.header__top-burger').on('click',function (e) {
		e.preventDefault();
		$(this).toggleClass('active');
		$('.mobile-menu-sec').toggleClass('active');
		if($(window).width() < 420) {
			if(!$('.header__cart-wrap--mobile').hasClass('active')) {
				$('.header__cart-wrap--mobile').toggleClass('open');
			}
		}
	});

	$(document).on('click touchstart',function (e){
		var div = $(".mobile-menu-sec,.header__top-burger");
		if (!div.is(e.target) && div.has(e.target).length === 0){
			$('.header__top-burger').removeClass('active');
			$('.mobile-menu-sec').removeClass('active');
			if($(window).width() < 420) {
				if(!$('.header__cart-wrap--mobile').hasClass('active')) {
					$('.header__cart-wrap--mobile').removeClass('open');
				}
			}
		}
	});

	$('.mobile-menu__cat .i-down').on('click',function () {
		var self = $(this);
		var thisSub = self.next('.mobile-menu__sub');

		$('.mobile-menu__sub').not(thisSub).slideUp();
		thisSub.slideToggle();

		$('.mobile-menu__cat .i-down').not(self).removeClass('active');
		self.toggleClass('active');
	});
});
/***********************
 Mob menu END
 ***********************/


/***********************
 Прокрутка к секциям BEGIN
 ***********************/
$(function () {
	$('.scrollto').on('click', function () {
		var elementClick = $(this).attr("href");
		var destination = $(elementClick).offset().top;
		$('html,body').stop().animate({scrollTop: destination}, 1000);
		return false;
	});
});
/***********************
 Прокрутка к секциям END
 ***********************/


/***********************
 Waypoints BEGIN
 ***********************/
$(function () {
	$('.anim').waypoint(function () {
		$(this.element).toggleClass('animated');
	}, {
		offset: '85%'
	});

	if($(window).width() < 1025) {
		$('.header__middle-wrap').waypoint(function () {
			$('.header__cart-wrap--mobile').toggleClass('active');
		}, {
			offset: '-40'
		});
	}
});
/***********************
 Waypoints END
 ***********************/


/***********************
Waves btns BEGIN
***********************/
$(function($){
	$('.btn').ripple();
	$.ripple.config({
		rippleOpacity: .1,
		rippleDelay: 100
	});
});
/***********************
Waves btns END
***********************/


/***********************
Banner slider BEGIN
***********************/
$(function($){
	$('.banner-slider').flickity({
		adaptiveHeight: true,
		dragThreshold: 6,
		imagesLoaded: true,
		pageDots: false,
		arrowShape: 'M28.6,49c-0.5,0.5-0.5,1.4,0,2L74,96.4l-2.1,2.2c-0.5,0.5-1.4,0.5-1.9,0L22.4,51c-0.5-0.5-0.5-1.4,0-2L70,1.5 c0.5-0.5,1.4-0.5,1.9,0l0,0L74,3.7'
	});
});
/***********************
Banner slider END
***********************/


/***********************
Logos slider BEGIN
***********************/
$(function($){
	var logosSlider = $('.logos-slider').flickity({
		cellSelector: '.logos-slider__item',
		wrapAround: true,
		cellAlign: 'left',
		dragThreshold: 6,
		imagesLoaded: true,
		pageDots: false,
		prevNextButtons: false
	});

	$('.logos-slider__prev').on('click',function () {
		logosSlider.flickity('previous');
	});
	$('.logos-slider__next').on('click',function () {
		logosSlider.flickity('next');
	})
});
/***********************
Logos slider END
***********************/


/***********************
Nice select BEGIN
***********************/
$(function($){
	$('.select-style').niceSelect();
});
/***********************
Nice select END
***********************/


/***********************
Catalog interactions BEGIN
***********************/
$(function($){
	var btnSortOpen = $('.mob-open-sort');
	var sortPanel = $('.s-sort');
	btnSortOpen.on('click',function (e) {
		e.preventDefault();
		sortPanel.toggleClass('active');
		btnSortOpen.toggleClass('active');
	});

	var btnFilterOpen = $('.mob-open-filter');
	var filterPanel = $('.filter-block');
	var filterPanelClose = $('.filter-block-close');

	function closeMobFilter() {
		filterPanel.removeClass('active');
		btnFilterOpen.removeClass('active');
		filterPanelClose.removeClass('visible');
	}
	function openMobFilter() {
		filterPanel.addClass('active');
		btnFilterOpen.addClass('active');
		filterPanelClose.addClass('visible');
	}

	btnFilterOpen.on('click',function () {
		openMobFilter();
	});

	filterPanelClose.on('click',function () {
		closeMobFilter();
	});

	$(document).on('click touchstart',function (e){
		var div = $(".mob-open-filter,.filter-block,.filter-block-close");
		if (!div.is(e.target) && div.has(e.target).length === 0){
			closeMobFilter();
		}
	});


	$('.filter__title').on('click',function (e) {
		e.preventDefault();
		var thisTitle = $(this);
		var thisFilter = thisTitle.parents('.filter');
		var thisValues = thisFilter.find('.filter__values');
		if (thisFilter.hasClass('opened')){
			thisValues.slideUp(function () {
				thisFilter.removeClass('opened');
			});
		} else {
			thisValues.slideDown(function () {
				thisFilter.addClass('opened');
			});
		}
	});


	// price-slider
	var price_slider = $(".price_range");

	price_slider.ionRangeSlider({
		type: "double",
		hide_min_max: true,
		hide_from_to: true,
		grid: false,
		step: 100
	});

	price_slider.on('change', function () {
		var from = $(this).data("from");
		var to = $(this).data("to");
		$('.price-filter--from').val(from);
		$('.price-filter--to').val(to);
	});

	var price_slider_data = price_slider.data("ionRangeSlider");
	$('.price-filter--from').on('change', function () {
		price_slider_data.update({
			from: $(this).val()
		});
	});
	$('.price-filter--to').on('change', function () {
		price_slider_data.update({
			to: $(this).val()
		});
	})
	// price-slider
});
/***********************
Catalog interactions END
***********************/