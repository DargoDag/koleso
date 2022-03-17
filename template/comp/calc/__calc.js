function initFixCalcSticky() {
    const main = document.querySelector('main');
    const calc = document.querySelector('.calc.--bottom');

    if (!calc || !main) {
        return false;
    }

    if (window.matchMedia('(max-width: 991px)').matches) {
        return false;
    }

    if (window.getComputedStyle(main).overflow !== 'visible') {
        main.style.overflow = 'visible';
    }
}

$(function () {
    // initFixCalcSticky();

    const tooltipList = document.querySelectorAll('.js-calc-tooltip');

    if (!tooltipList.length) {
        return false;
    }

    for (let i = 0; i < tooltipList.length; i++) {
        const tooltip = tooltipList[i];

        const tooltipContent = tooltip.parentElement.querySelector('.js-calc-tooltip-content');

        if (!tooltipContent) {
            continue;
        }

        tippy(tooltip, {
            content: tooltipContent.innerHTML,
            allowHTML: true,
            theme: 'calc',
            maxWidth: 400
        });
    }
});
