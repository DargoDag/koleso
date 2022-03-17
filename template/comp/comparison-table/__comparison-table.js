function initComparisonTable() {
    const TABLE_SELECTOR = '.js-comparison-table';
    const PARENT_SELECTOR = '.js-comparison-table-parent';
    const ITEM_SELECTOR = '.js-comparison-table-item';
    const HIGHLIGHT_CLASS = 'comparison-table__highlight';

    const table = document.querySelector(TABLE_SELECTOR);

    if (!table) return;

    const parentList = table.querySelectorAll(PARENT_SELECTOR);

    table.addEventListener('mouseover', (evt) => {
        const curItem = evt.target.closest(ITEM_SELECTOR);
        let curIndex = null;

        if (!curItem) return;

        const curParent = curItem.closest(PARENT_SELECTOR);

        if (!curParent) return;

        const curItemList = curParent.querySelectorAll(ITEM_SELECTOR);

        for (let i = 0; i < curItemList.length; i++) {
            const item = curItemList[i];

            if (item === curItem) {
                item.classList.add(HIGHLIGHT_CLASS);
                curIndex = i;
            } else {
                item.classList.remove(HIGHLIGHT_CLASS);
            }
        }

        if (curIndex === null) return;

        for (let i = 0; i < parentList.length; i++) {
            const parent = parentList[i];

            if (parent === curParent) continue;

            const itemList = parent.querySelectorAll(ITEM_SELECTOR);

            for (let j = 0; j < itemList.length; j++) {
                const item = itemList[j];

                if (j === curIndex) {
                    item.classList.add(HIGHLIGHT_CLASS);
                } else {
                    item.classList.remove(HIGHLIGHT_CLASS);
                }
            }
        }
    });
}

$(() => {
    initComparisonTable();
});
