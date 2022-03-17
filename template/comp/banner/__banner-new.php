<?php
    if (empty($bannerNewTitle)) {
        $bannerNewTitle = 'Полиуретановые колеса <br> для тележек';
    }
    if (empty($bannerNewBg)) {
        $bannerNewBg = 'var(--color__gray-3)';
    }
    if (empty($bannerNewMod)) {
        $bannerNewMod = '';
    }
?>

<div class="banner-new <?php echo $bannerNewMod ?>" style="--bg-color: <?php echo $bannerNewBg ?>;">
    <div class="banner-new__bg">
        <div class="banner-new__inner">
            <div class="banner-new__content">
                <div class="banner-new__title"><?php echo $bannerNewTitle ?></div>
                <div class="banner-new__desc">
                    <div class="banner-new__desc-item">
                        <span class="banner-new__desc-icon --wheel --svg__wheel-icon"></span>
                        <span class="banner-new__desc-title">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру</span>
                    </div>
                    <div class="banner-new__desc-item">
                        <span class="banner-new__desc-icon --weight --svg__weight-icon"></span>
                        <span class="banner-new__desc-title">Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру</span>
                    </div>
                </div>
                <a href="#" class="banner-new__button btn --fill-1">Получить консультацию</a>
            </div>
            <?php if (!empty($bannerNewImgName)) { ?>
                <div class="banner-new__img-wrapper">
                    <picture class="lazy">
                        <source srcset="/template/dist/img/<?php echo $bannerNewImgName ?>.webp" type="image/webp">
                        <source srcset="/template/dist/img/<?php echo $bannerNewImgName ?>.png" type="image/png">
                    </picture>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
