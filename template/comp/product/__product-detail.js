function initProductDetailSpoiler() {
    const spoiler = document.querySelector('.js-parameters-sub-items');
    const button = document.querySelector('.js-parameters-sub-items-button');

    const SPOILER_OPEN_CLASS = '--open';

    if (!spoiler || !button) {
        return false;
    }

    button.addEventListener('click', (evt) => {
        evt.preventDefault();//maybe link

        const buttonText = button.querySelector('.js-parameters-sub-items-button-text');

        if (spoiler.classList.contains(SPOILER_OPEN_CLASS)) {
            spoiler.classList.remove(SPOILER_OPEN_CLASS);
            buttonText.textContent = button.getAttribute('data-open-text');
        } else {
            spoiler.classList.add(SPOILER_OPEN_CLASS);
            buttonText.textContent = button.getAttribute('data-close-text');
        }
    });
}

$(() => {
    initProductDetailSpoiler();
});
