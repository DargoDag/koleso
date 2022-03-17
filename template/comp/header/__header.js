function initHeaderSticky() {
    if (window.matchMedia('(max-width: 991px)').matches) {
        return;
    }

    const sticky = document.querySelector('.js-header-sticky');

    if (!sticky) {
        return;
    }

    const observer = new IntersectionObserver(
        ([e]) => {
            e.target.classList.toggle('--sticky', e.intersectionRatio < 1)
        },
        {
            threshold: [1],
            rootMargin: '-1px 0px 0px 0px'
        }
    );

    observer.observe(sticky);
}

function initFixHeaderCatalogOffset() {
    if (window.matchMedia('(max-width: 991px)').matches) {
        return;
    }

    const header = document.querySelector('.js-header-sticky');
    const menu = document.querySelector('.js-header-catalog-menu');

    if (!header || !menu) {
        return;
    }

    menu.style.top = `${header.offsetHeight}px`;
}

$(document).ready(function () {
    initHeaderSticky();
    initFixHeaderCatalogOffset();

    $('.--js__catalog-btn').on('click', function () {
        const $this = $(this);

        $this.toggleClass('is-active');
        $('.menu').slideToggle(180);
        $('body').toggleClass('js-no-scroll');

        document.dispatchEvent(
            new CustomEvent('header-catalog:state',
                {
                    detail: {isOpen: $this.hasClass('is-active')}
                }
            )
        );
    });

    /*    $(window).scroll(function() {
            $(window).scroll(function () {
                height = $(this).scrollTop();
                top_height = $('.header-top').innerHeight();
                $('.header')[height >= top_height ? 'addClass' : 'removeClass']('is-fixed')
            })
        });*/

    // $('.menu-item').mouseenter(function() {
    //     let menu_id = $(this).data('id');
    //     $(this).parent().find('.menu-item').removeClass('is-active');
    //     $(this).parents('.menu').find('.sub-menu').hide();
    //     $(this).addClass('is-active');
    //     $(this).parents('.menu').find('.sub-menu.--' +menu_id).show()
    // })

});
