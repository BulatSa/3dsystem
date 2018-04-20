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
	//$("input[type='tel']").mask("+7 (999) 999-99-99");
});

$("input.error").on('focus', function () {
	$(this).removeClass('error');
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
	$().fancybox({
		selector: '.fancy-map',
		toolbar: false,
		smallBtn: true,
		backFocus: false
	});
}

function init_fancy__video() {
	$().fancybox({
		selector: '.fancy-video',
		toolbar: false,
		smallBtn: true,
		backFocus: false
	});
}

$(function () {
	init_fancy();
	init_fancy__video();
});

/* Add to cart modal open
$.fancybox.open({
	src  : '#modal-addtocart'
});
*/
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
Mails BEGIN
***********************/
$(function($){
	var mailsSlider = $('.mails__list').flickity({
		wrapAround: false,
		contain: true,
		percentPosition: true,
		groupCells: true,
		dragThreshold: 6,
		adaptiveHeight: true,
		imagesLoaded: true,
		pageDots: false,
		prevNextButtons: false
	});

	$('.mails__nav-prev').on('click',function () {
		mailsSlider.flickity('previous');
	});
	$('.mails__nav-next').on('click',function () {
		mailsSlider.flickity('next');
	})

});
/***********************
Mails END
***********************/


/***********************
Team about BEGIN
***********************/
$(function($){
	var mailsSlider = $('.team-slider').flickity({
		wrapAround: false,
		contain: true,
		percentPosition: true,
		groupCells: true,
		dragThreshold: 6,
		adaptiveHeight: true,
		imagesLoaded: true,
		pageDots: false,
		prevNextButtons: false
	});

	$('.team-slider__nav-prev').on('click',function () {
		mailsSlider.flickity('previous');
	});
	$('.team-slider__nav-next').on('click',function () {
		mailsSlider.flickity('next');
	})

});
/***********************
Team about END
***********************/


/***********************
Masonry BEGIN
***********************/
$(function($){
	if ($('.reviews__list').length){
		$('.reviews__list').masonry({
			percentPosition: true
		})
	}
});
/***********************
Masonry END
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
		step: 100,
		onFinish: function (data) {
			$("input.price-filter--to").change();
		}
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


/***********************
Range filter BEGIN
***********************/
$(function($){
	var range_slider = $(".range-filter__slider");

	function updateRangeFilter(filter,whatChange) {
		var fromInput = filter.find('.range-filter--from');
		var toInput = filter.find('.range-filter--to');
		var fromInputVal = fromInput.val();
		var toInputVal = toInput.val();
		var slider = filter.find('.range-filter__slider');
		var sliderData = slider.data("ionRangeSlider");
		var fromSlider = slider.data("from");
		var toSlider = slider.data("to");

		if (whatChange === "slider"){
			fromInput.val(fromSlider);
			toInput.val(toSlider);
		} else {
			sliderData.update({
				from: fromInputVal,
				to: toInputVal
			});
		}

		return false;
	}

	range_slider.ionRangeSlider({
		type: "double",
		hide_min_max: true,
		hide_from_to: true,
		grid: false,
		step: 1,
		onFinish: function (data) {
			var thisFilter = data.input[0].parentNode;
			$(thisFilter).find('.range-filter--to').change();
		}
	});

	range_slider.on('change', function () {
		var thisFilter = $(this).parents('.filter');
		updateRangeFilter(thisFilter,"slider");
	});

	$('.range-filter--from,.range-filter--to').on('change', function () {
		var thisFilter = $(this).parents('.filter');
		updateRangeFilter(thisFilter,"input");
	});

});
/***********************
Range filter END
***********************/


/***********************
Product Details BEGIN
***********************/
$(function($){
	$('.product-slider').flickity({
		adaptiveHeight: true,
		dragThreshold: 6,
		imagesLoaded: true,
		pageDots: false,
		lazyLoad: true,
		arrowShape: 'M28.6,49c-0.5,0.5-0.5,1.4,0,2L74,96.4l-2.1,2.2c-0.5,0.5-1.4,0.5-1.9,0L22.4,51c-0.5-0.5-0.5-1.4,0-2L70,1.5 c0.5-0.5,1.4-0.5,1.9,0l0,0L74,3.7'
	});
});
/***********************
Product Details END
***********************/


/***********************
Product Tabs BEGIN
***********************/
$(function ($) {
	function selectProductTab(tabId) {
		$('.detail-info__nav button').removeClass('active');
		$('.detail-info__nav [data-link=' + tabId + ']').addClass('active');
		$('.detail-info__item').removeClass('active');
		$('#' + tabId).addClass('active');
	}

	$('[data-link]').on('click',function (e) {
		e.preventDefault();
		var tabId = $(this).data('link');
		selectProductTab(tabId);
		var dataScroll = $(this).data('scroll');
		if (dataScroll !== undefined){
			var destination = $(dataScroll).offset().top;
			$('html,body').stop().animate({scrollTop: destination}, 500);
		}
	});

	selectProductTab('descr');
});
/***********************
Product Tabs END
***********************/


/***********************
 Pay Methods Tabs BEGIN
***********************/
$(function ($) {
	function selectPayTab(tabId) {
		$('.pay-methods__nav button').removeClass('active');
		$('.pay-methods__nav [data-link=' + tabId + ']').addClass('active');
		$('.pay-methods__item').removeClass('active');
		$('#' + tabId).addClass('active');
	}

	$('[data-link]').on('click',function (e) {
		e.preventDefault();
		var tabId = $(this).data('link');
		selectPayTab(tabId);
		var dataScroll = $(this).data('scroll');
		if (dataScroll !== undefined){
			var destination = $(dataScroll).offset().top;
			$('html,body').stop().animate({scrollTop: destination}, 500);
		}
	});

	selectPayTab('cash');
});
/***********************
 Pay Methods Tabs END
***********************/


/***********************
Product Descr Open BEGIN
***********************/
$(function($){
	var $detailInfoBtn = $('.detail-info__item-more');
	var $detailInfoDescr = $detailInfoBtn.siblings('.detail-info__item-descr');

	if ($detailInfoDescr.height() > 400) {
		$detailInfoDescr.addClass('closed');
	} else {
		$detailInfoBtn.hide();
	}

	$detailInfoBtn.on('click', function (e) {
		e.preventDefault();
		var $thisBtn = $(this);

		if(!($thisBtn.hasClass('open'))) {
			$detailInfoDescr.removeClass('closed');
			$thisBtn.text('Свернуть');
		} else {
			$thisBtn.text('Далее');
			$detailInfoDescr.addClass('closed');
		}

		$thisBtn.toggleClass('open');
	});
});
/***********************
Product Descr Open END
***********************/


/***********************
User-content BEGIN
***********************/
$(function($){
	$('.user-content img').each(function () {
		var self = $(this);
		var selfAlt = self.attr('title');
		if (selfAlt !== undefined){
			$('<div class="img-descr">'+selfAlt+'</div>').insertAfter(self);
		}
	});

	$(".user-content").fitVids();
});
/***********************
User-content END
***********************/


/***********************
 Password Open BEGIN
 ***********************/
$(function($){
	$('.pass-wrap .i-eye').on('click', function () {
		var passInput = $(this).siblings('input')[0];
		$(this).toggleClass('active');
		if (passInput.type === 'password') {
			passInput.type = 'text';
		} else {
			passInput.type = 'password';
		}
	})
});
/***********************
 Password Open END
 ***********************/


/***********************
 To top btn BEGIN
 ***********************/
$(function($){
	var to_top_btn = $('.to-top-btn');

	window.onscroll = function() {
		var doc = document.documentElement;
		var scrolltop = window.pageYOffset || doc.scrollTop;
		var windowHeight = doc.clientHeight;
		var documentHeight = doc.offsetHeight;

		if (scrolltop > 200){
			to_top_btn.addClass('visible');
		} else {
			to_top_btn.removeClass('visible');
		}

		if(scrolltop + windowHeight + 50 >= documentHeight){
			to_top_btn.addClass('ended');
		} else {
			to_top_btn.removeClass('ended');
		}
	};

	to_top_btn.on('click', function () {
		$('html,body').stop().animate({scrollTop: 0}, 1000);
		return false;
	});
});
/***********************
 To top btn END
 ***********************/


/***********************
Services BEGIN
***********************/
$(function($){
	//выбираем все айтемы для анимации
	var services = document.querySelectorAll('.service');

	// и для каждого инициализируем анимацию
	for (var i = 0; i < services.length; ++i) {
		initPixi(services[i]);
		services[i].classList.add('ready');
	}

	function initPixi(service) {
		var canvas = service.querySelector(".service__canvas");
		var imgSrc = service.dataset.img;
		var bg = PIXI.Sprite.fromImage(imgSrc);

		var displacementSprite = PIXI.Sprite.fromImage('/img/services/map7.jpg');

		var app = new PIXI.Application({
			view: canvas,
			width: 1600,
			height: 500,
			backgroundColor : 0x0c1426
		});

		//работаем в контейнере, хотя можно и без него
		var container = new PIXI.Container();
		app.stage.addChild(container);

		//делаем контейнер интерактивным для функций типа mousemove
		app.interactive = true;
		container.interactive = true;

		//позиционирование изображний
		bg.anchor.set(0.5);
		bg.x = app.screen.width / 2;
		bg.y = app.screen.height / 2;

		displacementSprite.anchor.set(0.55,0.5);
		displacementSprite.x = app.screen.width / 2;
		displacementSprite.y = app.screen.height / 2;
		//позиционирование изображний

		// создание фильтра
		var displacementFilter = new PIXI.filters.DisplacementFilter(displacementSprite);
		displacementFilter.scale.x = 0;
		displacementFilter.scale.y = 0;
		container.filters = [displacementFilter];
		// создание фильтра

		//добавляем изображения в контейнер
		container.addChild(bg,displacementSprite);

		//При наведении делаем магию
		function onPointerMove(eventData){
			var filter = displacementFilter.scale;
			if (eventData.data.global.x > 0 &&
				eventData.data.global.x < app.screen.width &&
				eventData.data.global.y > 0 &&
				eventData.data.global.y < app.screen.height)
			{
				TweenMax.to(filter, 0.2, {
					x: -(eventData.data.global.x - app.screen.width / 2) / 25,
					y: -(eventData.data.global.y - app.screen.height / 2) / 15,
					ease: Power0.easeInOut
				});
				displacementSprite.position.set(
					(app.screen.width / 2 + eventData.data.global.x / 20),
					(app.screen.height / 2 + eventData.data.global.y / 20)
				);
			} else {
				setTimeout(function () {
					if (!TweenMax.isTweening(filter)){
						TweenMax.to(filter, 0.5, {
							x: 0,
							y: 0,
							ease: Power2.easeInOut
						});
					}
				},200);
			}
		}

		container.on('pointermove', onPointerMove);

		//при ресайзе окна центрируем содержимое контенейра
		window.addEventListener("resize", onResize);

		function onResize() {
			app.renderer.resize(canvas.clientWidth,canvas.clientHeight);
			bg.x = app.screen.width / 2;
			bg.y = app.screen.height / 2;
			displacementSprite.x = app.screen.width / 2;
			displacementSprite.y = app.screen.height / 2;
		}

		onResize();
	}
});
/***********************
Services END
***********************/


/***********************
Particles BEGIN
***********************/
$(function($){
	if ($('#particles-js').length){
		particlesJS.load('particles-js', '/img/particles.json');
	}
});
/***********************
Particles END
***********************/