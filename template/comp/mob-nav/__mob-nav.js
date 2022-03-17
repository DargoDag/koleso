$(document).ready(function () {

	$('.js-mob-catalog-menu').on('click', function () {
		$('.menu-tems').show();
        $(this).toggleClass('is-active');
		$(this).parents('.bottom-nav').find('.bottom-nav__catalog-menu').fadeToggle(180);
		$(this).parents('.bottom-nav').find('.menu').show();
		$('body').toggleClass('js-no-scroll');
		$('.menu').find('.sub-menu-wrap').hide();
		$('.menu').find('.sub-menu').hide();
	});

	$('.js-toggle-full-menu').on('click', function() {
		$('body').toggleClass('open-mob-menu');
		$('body').toggleClass('js-no-scroll');
		$('.mob-nav__full-menu').toggleClass('is-open');
	});

	$('.mob-catalog-menu__toggle-btn').on('click', function() {
        $(this).parents('.mob-catalog-menu__section').toggleClass('is-open');
        $(this).parents('.mob-catalog-menu__section').find('.mob-catalog-menu__subsections').slideToggle(180);
    });

	$('.menu-item').on('click', function () {
		const $this = $(this);

		let menu_id = $this.data('id');
		$('.menu-items').hide();
		$('.mob-catalog-menu__close-btn').hide();
		$this.closest('.mob-catalog-menu').find('.mob-catalog-menu__label').hide();
		$this.parents('.menu').find('.sub-menu-wrap').show();
        $this.parents('.menu').find('.sub-menu').hide();
        $this.parents('.menu').find('.sub-menu.--' +menu_id).show()
	})

	$('.--svg__menu-back').on('click', function () {
		const $this = $(this);

		$('.menu-items').show();
		$('.mob-catalog-menu__close-btn').show();
		$this.closest('.mob-catalog-menu').find('.mob-catalog-menu__label').show();
		$this.parents('.menu').find('.sub-menu-wrap').hide();
		$this.parents('.menu').find('.sub-menu').hide();
	})
});
