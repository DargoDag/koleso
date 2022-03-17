function initFilterSticky() {
    if (window.matchMedia('(max-width: 991px)').matches) {
        return;
    }

    const filter = document.querySelector('.js-filter-sticky');
    const header = document.querySelector('.js-header-sticky');
    const helper = document.querySelector('.js-filter-sticky-helper');

    if (!filter || !header || !helper) {
        return;
    }

    const helperDefaultMargin = parseInt(getComputedStyle(helper).marginTop);

    const hiddenElements = filter.querySelectorAll('.is-hidden');
    const $hiddenElements = $(hiddenElements);

    const moreButton = filter.querySelector('.js-filter-sticky-more-btn');
    const moreButtonTitle = moreButton.querySelector('.js-filter-sticky-more-btn-title');
    const MORE_BUTTON_OPEN_CLASS = 'filter-sticky-more__button--open';

    const moreHidden = filter.querySelector('.js-filter-sticky-more-hidden');
    const moreHiddenStyle = getComputedStyle(moreHidden);
    const moreHiddenHeight = parseInt(moreHiddenStyle.marginTop) + parseInt(moreHiddenStyle.marginBottom) + moreHidden.offsetHeight;

    const top = header.offsetHeight - 4;

    filter.style.top = `${top}px`;

    gsap.registerPlugin(ScrollTrigger);

    ScrollTrigger.create({
        trigger: filter,
        start: `top ${top}`,
        onEnter: () => {
            filter.classList.add('--sticky');
            helper.style.setProperty('margin-top', `${moreHiddenHeight}px`, 'important');
        },
        onLeaveBack: () => {
            filter.classList.remove('--sticky');
            helper.style.setProperty('margin-top', `${helperDefaultMargin}px`, 'important');
        }
    });

    function fixMoreLink(isActive) {
        const link = filter.querySelector('.--js__more-filters-link');

        const ACTIVE_CLASS = 'is-active';
        const ACTIVE_TEXT = 'Свернуть';
        const DEFAULT_TEXT = 'Все параметры';

        if (!link) {
            return;
        }

        const linkTitle = link.querySelector('.filter__more-link-label');

        if (isActive) {
            link.classList.add(ACTIVE_CLASS);
            linkTitle.textContent = ACTIVE_TEXT;
        } else {
            link.classList.remove(ACTIVE_CLASS);
            linkTitle.textContent = DEFAULT_TEXT;
        }
    }

    moreButton.addEventListener('click', (evt) => {
        evt.preventDefault();//maybe link

        if (moreButton.classList.contains(MORE_BUTTON_OPEN_CLASS)) {
            moreButton.classList.remove(MORE_BUTTON_OPEN_CLASS);
            moreButtonTitle.textContent = moreButton.getAttribute('data-open-text');
            // I know that we can use gsap, but not today
            $hiddenElements.slideUp(180);
            fixMoreLink(false);
        } else {
            moreButton.classList.add(MORE_BUTTON_OPEN_CLASS);
            moreButtonTitle.textContent = moreButton.getAttribute('data-close-text');
            $hiddenElements.slideDown(180);
            fixMoreLink(true);
        }
    });

    document.addEventListener('header-catalog:state', (evt) => {
        let zIndex = getComputedStyle(header).zIndex;

        if (evt.detail.isOpen) {
            zIndex = getComputedStyle(header).zIndex - 1;
        }

        filter.style.zIndex = zIndex;
    });
}

function initMobileFilter() {
    const filter = document.querySelector('.js-filter-mobile');
    const OPEN_CLASS = '--open';

    if (!filter) {
        return false;
    }

    filter.addEventListener('click', (evt) => {
        const filterItemBtn = evt.target.closest('.js-filter-item-btn');

        if (!filterItemBtn) {
            return false;
        }

        const filterItem = filterItemBtn.closest('.js-filter-item');

        if (filterItem.classList.contains(OPEN_CLASS)) {
            filterItem.classList.remove(OPEN_CLASS);
        } else {
            filterItem.classList.add(OPEN_CLASS);
        }
    });
}

$(document).ready(function () {
    $('.js-range-slider.--diameter').ionRangeSlider({
        type: "double",
        skin: "round",
        min: 1,
        max: 25,
        postfix: " с."
    });

    $('.js-range-slider.--width').ionRangeSlider({
        type: "double",
        skin: "round",
        min: 1,
        max: 25,
        postfix: " с."
    });

    $('.js-range-slider.--weight').ionRangeSlider({
        type: "double",
        skin: "round",
        min: 1,
        max: 25,
        postfix: " кг."
    });

    $('.js-range-slider.--height').ionRangeSlider({
        type: "double",
        skin: "round",
        min: 1,
        max: 25,
        postfix: " кг."
    });

    $('.js-range-slider.--catalog').ionRangeSlider({
        type: "double",
        skin: "round",
        min: 1,
        max: 25,
        postfix: " кг.",
        grid: true
    });

    // Смена значений from и to range-slider для input

    $('.filter-tuning__rangeslide-wrap').each(function () {
        const $this = $(this);
        let from_val = $this.find('.irs-from').text();
        let to_val = $this.find('.irs-to').text();
        $this.find('.filter-tuning__input.--from').val(from_val);
        $this.find('.filter-tuning__input.--to').val(to_val);
        $this.find('.js-range-slider').on('change', function () {
            let from_val = $this.parent().find('.irs-from').text();
            let to_val = $this.parent().find('.irs-to').text();
            $this.parent().find('.filter-tuning__input.--from').val(from_val);
            $this.parent().find('.filter-tuning__input.--to').val(to_val)
        })
    });

    //

    function fixStickyMoreButton() {
        const filter = document.querySelector('.js-filter-sticky');

        if (!filter) {
            return false;
        }

        const button = filter.querySelector('.js-filter-sticky-more-btn');

        if (!button) {
            return;
        }

        const buttonTitle = button.querySelector('.js-filter-sticky-more-btn-title');
        const OPEN_CLASS = 'filter-sticky-more__button--open';

        if (button.classList.contains(OPEN_CLASS)) {
            button.classList.remove(OPEN_CLASS);
            buttonTitle.textContent = button.getAttribute('data-open-text');
        } else {
            button.classList.add(OPEN_CLASS);
            buttonTitle.textContent = button.getAttribute('data-close-text');
        }
    }

    const spoilerList = document.querySelectorAll('.js-filter-tuning-spoiler');
    const SPOILER_OPEN_CLASS = '--open';

    $('.--js__more-filters-link').on('click', function () {
        const $this = $(this);

        $this.toggleClass('is-active').find('.filter__more-link-label').text(function (a, text) {
            return text === "Все параметры" ? "Свернуть" : "Все параметры";
        });

        for (let i = 0; i < spoilerList.length; i++) {
            const spoiler = spoilerList[i];

            if (spoiler.classList.contains(SPOILER_OPEN_CLASS)) {
                spoiler.classList.remove(SPOILER_OPEN_CLASS);
            } else {
                spoiler.classList.add(SPOILER_OPEN_CLASS);
            }
        }

        $this.parents().find('.is-hidden').slideToggle(180);

        fixStickyMoreButton();
    })

    initMobileFilter();
    initFilterSticky();
});
