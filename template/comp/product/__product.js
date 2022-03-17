function initProductSlider() {
	const productSliderWrapperList = document.querySelectorAll('.js-product-slider-wrapper');

	if (!productSliderWrapperList.length) {
		return false;
	}

	for (let i = 0; i < productSliderWrapperList.length; i++) {
		const wrapper = productSliderWrapperList[i];
		const slider = wrapper.querySelector('.js-product-slider');
		const prev = wrapper.querySelector('.js-product-slider-btn-prev');
		const next = wrapper.querySelector('.js-product-slider-btn-next');
		const pagination = wrapper.querySelector('.js-product-slider-pagination');

		const sliderSwiper = new Swiper(slider, {
			slidesPerView: 2,
			slidesPerGroup: 1,
			spaceBetween: 8,
			pagination: {
				el: pagination,
				clickable: true,
				type: 'bullets'
			},
			navigation: {
				prevEl: prev,
				nextEl: next
			},
			breakpoints: {
				990: {
					slidesPerView: 4,
					spaceBetween: 24,
					pagination: {
						type: 'fraction'
					},
				},
				640: {
					slidesPerView: 3,
					spaceBetween: 16
				}
			}
		});

		sliderSwiper.on('slideChange', function () {
			const observer = lozad('.lazy');
			observer.observe()
		});
	}
}

$(window).load(function () {

	var product_thumb = new Swiper(".js__product-thumb", {
		// loop: true,
		spaceBetween: 8,
		slidesPerView: 5,
		freeMode: true,
		watchSlidesProgress: true,
		direction: 'vertical',
		navigation: {
			nextEl: ".product-item__swiper-wrap.--thumb .swiper-button-next",
			prevEl: ".product-item__swiper-wrap.--thumb .swiper-button-prev"
		}
	});

	var product_full = new Swiper(".js__product-full", {
		// loop: true,
		spaceBetween: 0,
		slidesPerView: 1,
		pagination: {
			el: '.js__product-full-pagination',
			clickable: true,
			type: 'bullets'
		},
		navigation: {
			nextEl: ".product-item__swiper-wrap.--full .swiper-button-next",
			prevEl: ".product-item__swiper-wrap.--full .swiper-button-prev"
		},
		thumbs: {
			swiper: product_thumb
		}
	});

	product_full.on('slideChange', function () {
		const observer = lozad('.lazy');
		observer.observe()
	});

	product_thumb.on('slideChange', function () {
		const observer = lozad('.lazy');
		observer.observe()
	});

	var products_carousel = new Swiper('.js-swiper__products .swiper-container', {
		slidesPerView: 2,
		slidesPerColumn: 1,
		spaceBetween: 8,
		slidesPerGroup: 1,
		pagination: {
			el: '.js-swiper__products .swiper-pagination',
			clickable: true,
			type: 'bullets'
		},
		navigation: {
			nextEl: '.js-swiper__products .swiper-button-next',
			prevEl: '.js-swiper__products .swiper-button-prev'
		},
		breakpoints: {
			990: {
				slidesPerView: 4,
				spaceBetween: 24,
				pagination: {
					type: 'fraction'
				},
			},
			640: {
				slidesPerView: 3,
				spaceBetween: 16
			}
		}
	});

	var popular_carousel = new Swiper('.js-swiper__popular .swiper-container', {
		slidesPerView: 2,
		slidesPerColumn: 1,
		spaceBetween: 8,
		slidesPerGroup: 1,
		pagination: {
			el: '.js-swiper__popular .swiper-pagination',
			clickable: true,
			type: 'bullets'
		},
		navigation: {
			nextEl: '.js-swiper__popular .swiper-button-next',
			prevEl: '.js-swiper__popular .swiper-button-prev'
		},
		breakpoints: {
			990: {
				slidesPerView: 4,
				spaceBetween: 24,
				pagination: {
					type: 'fraction'
				},
			},
			640: {
				slidesPerView: 3,
				spaceBetween: 16
			}
		}
	});

	var sales_carousel = new Swiper('.js-swiper__sales .swiper-container', {
		slidesPerView: 2,
		slidesPerColumn: 1,
		spaceBetween: 16,
		slidesPerGroup: 1,
		pagination: {
			el: '.js-swiper__sales .swiper-pagination',
			clickable: true,
			type: 'bullets'
		},
		navigation: {
			nextEl: '.js-swiper__sales .swiper-button-next',
			prevEl: '.js-swiper__sales .swiper-button-prev'
		},
		breakpoints: {
			990: {
				slidesPerView: 4,
				spaceBetween: 24,
				pagination: {
					type: 'fraction'
				},
			},
			640: {
				slidesPerView: 3,
				spaceBetween: 16
			}
		}
	});

	var top_carousel = new Swiper('.js-swiper__top .swiper-container', {
		slidesPerView: 2,
		slidesPerColumn: 1,
		spaceBetween: 16,
		slidesPerGroup: 1,
		pagination: {
			el: '.js-swiper__top .swiper-pagination',
			clickable: true,
			type: 'bullets'
		},
		navigation: {
			nextEl: '.js-swiper__top .swiper-button-next',
			prevEl: '.js-swiper__top .swiper-button-prev'
		},
		breakpoints: {
			990: {
				slidesPerView: 4,
				spaceBetween: 24,
				pagination: {
					type: 'fraction'
				},
			},
			640: {
				slidesPerView: 3,
				spaceBetween: 16
			}
		}
	});

	initProductSlider();
});
