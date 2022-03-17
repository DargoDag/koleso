function initDeliveryPaymentSlider() {
    const slider = document.querySelector('.js-delivery-payment-slider');

    if (!slider) {
        return false;
    }

    if (!window.matchMedia('(max-width: 991px)').matches) {
        return false;
    }

    const swiper = new Swiper(slider, {
        slidesPerView: 'auto'
    });
}

$(() => {
    initDeliveryPaymentSlider();
});
