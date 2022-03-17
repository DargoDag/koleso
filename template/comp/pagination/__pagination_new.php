<?php
    if (empty($moreBtnText)) {
        $moreBtnText = 'Показать еще';
    }
?>

<div class="pagination --new">
    <div class="center-wrap">
        <div class="pagination__wrap flex --direction-column --align-center">
            <?php if (empty($isNotShowMoreBtn)) { ?>
                <a href="#" class="pagination__loadmore btn --border-5">
                    <svg class="mr-16" width="24" height="22" viewBox="0 0 24 22" fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.34.138C8.153.138 3.822 3.863 2.872 8.78H0l4.478 7.818L8.957 8.78h-2.63c.88-3.046 3.69-5.28 7.012-5.28 4.027 0 7.302 3.279 7.302 7.31 0 4.03-3.275 7.309-7.301 7.309a7.231 7.231 0 0 1-3.1-.69l-1.428 3.044a10.561 10.561 0 0 0 4.527 1.008C19.218 21.48 24 16.693 24 10.809S19.218.138 13.34.138Z"
                              fill="currentColor"/>
                    </svg>
                    <?php echo $moreBtnText ?>
                </a>
            <?php } ?>
            <div class="pagination__sub-wrap flex --just-center --align-center col --6 mt-24">
                <div class="pagination__arrows flex --align-center">
                    <a href="#" class="pagination__arrow --goto-start">
                        <svg viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M7.93957 0.93934C8.52535 0.353553 9.4751 0.353553 10.0609 0.93934C10.6467 1.52513 10.6467 2.47487 10.0609 3.06066L5.12155 8L10.0609 12.9393C10.6467 13.5251 10.6467 14.4749 10.0609 15.0607C9.4751 15.6464 8.52535 15.6464 7.93957 15.0607L0.878906 8L7.93957 0.93934ZM21.9396 0.93934C22.5254 0.353553 23.4751 0.353553 24.0609 0.93934C24.6467 1.52513 24.6467 2.47487 24.0609 3.06066L19.1215 8L24.0609 12.9393C24.6467 13.5251 24.6467 14.4749 24.0609 15.0607C23.4751 15.6464 22.5254 15.6464 21.9396 15.0607L14.8789 8L21.9396 0.93934Z"
                                  fill="#000"/>
                        </svg>
                    </a>
                    <a href="#" class="pagination__arrow --goto-back ml-24">
                        <svg viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10.0607 0.93934C9.47487 0.353553 8.52513 0.353553 7.93934 0.93934L0.878679 8L7.93934 15.0607C8.52513 15.6464 9.47487 15.6464 10.0607 15.0607C10.6464 14.4749 10.6464 13.5251 10.0607 12.9393L5.12132 8L10.0607 3.06066C10.6464 2.47487 10.6464 1.52513 10.0607 0.93934Z"
                                  fill="#000"/>
                        </svg>
                    </a>
                </div>
                <div class="pagination__numbs flex --align-center">
                    <a href="#" class="pagination__numb btn --fill is-active"><span class="p --xl">1</span></a>
                    <a href="#" class="pagination__numb btn"><span class="p --xl">2</span></a>
                    <a href="#" class="pagination__numb btn"><span class="p --xl">3</span></a>
                    <a href="#" class="pagination__numb btn"><span class="p --xl">4</span></a>
                    <a href="#" class="pagination__numb btn"><span class="p --xl">5</span></a>
                    <a href="#" class="pagination__numb btn"><span class="p --xl">6</span></a>
                </div>
                <div class="pagination__arrows flex --align-center">
                    <a href="#" class="pagination__arrow --goto-next mr-24">
                        <svg viewBox="0 0 11 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M0.93934 0.93934C1.52513 0.353553 2.47487 0.353553 3.06066 0.93934L10.1213 8L3.06066 15.0607C2.47487 15.6464 1.52513 15.6464 0.93934 15.0607C0.353553 14.4749 0.353553 13.5251 0.93934 12.9393L5.87868 8L0.93934 3.06066C0.353553 2.47487 0.353553 1.52513 0.93934 0.93934Z"
                                  fill="#000"/>
                        </svg>
                    </a>
                    <a href="#" class="pagination__arrow --goto-end">
                        <svg viewBox="0 0 25 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M3.06066 0.93934C2.47487 0.353553 1.52513 0.353553 0.93934 0.93934C0.353553 1.52513 0.353553 2.47487 0.93934 3.06066L5.87868 8L0.93934 12.9393C0.353553 13.5251 0.353553 14.4749 0.93934 15.0607C1.52513 15.6464 2.47487 15.6464 3.06066 15.0607L10.1213 8L3.06066 0.93934ZM17.0607 0.93934C16.4749 0.353553 15.5251 0.353553 14.9393 0.93934C14.3536 1.52513 14.3536 2.47487 14.9393 3.06066L19.8787 8L14.9393 12.9393C14.3536 13.5251 14.3536 14.4749 14.9393 15.0607C15.5251 15.6464 16.4749 15.6464 17.0607 15.0607L24.1213 8L17.0607 0.93934Z"
                                  fill="#000"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
