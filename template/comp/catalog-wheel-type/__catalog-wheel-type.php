<div class="catalog-wheel-type">
    <div class="mt-56 catalog-wheel-type__tabs">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-tabs.php'); ?>
    </div>
    <div class="catalog-wheel-type__sorting flex --just-space">
        <ul class="catalog-wheel-type__list flex">
            <li class="mr-32">
                <a class="catalog-wheel-type__link link" href="#nonrotative">Неповоротные</a>
            </li>
            <li class="mr-32">
                <a class="catalog-wheel-type__link link" href="#underneath">Под ось</a>
            </li>
            <li class="mr-32">
                <a class="catalog-wheel-type__link link" href="#braked">С тормозом</a>
            </li>
            <li class="mr-32">
                <a class="catalog-wheel-type__link link" href="#rotative">Поворотные</a>
            </li>
        </ul>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sorting/__sorting-order.php'); ?>
    </div>
    <div class="mt-40" id="nonrotative">
        <?php $productTypeTitle = 'Неповоротные'; ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-types.php'); ?>
    </div>
    <div class="mt-64" id="underneath">
        <?php $productTypeTitle = 'Под ось'; ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-types.php'); ?>
    </div>
    <div class="mt-64" id="braked">
        <?php $productTypeTitle = 'С тормозом'; ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-types.php'); ?>
    </div>
    <div class="mt-64" id="rotative">
        <?php $productTypeTitle = 'Поворотные'; ?>
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-types.php'); ?>
    </div>
</div>
