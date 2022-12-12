<?php
function console_log() {
    $args = func_get_args();
    echo '<script>';
    echo 'console.log('.json_encode($args).')';
    echo '</script>';
}
?>
<script>
    /**
    * Function ini berfungsi untuk direct link ke halaman yang
    * berdasarkan dengan parameter yang dikirimkan
    *
    * @param {string} link - Link yang akan di direct
    */
    function hrefDirect(link) {
        location.href = `${link}`;
    }

    /**
    * Function ini berfungsi untuk men-click element
    * berdasarkan dengan parameter yang dikirimkan
    *
    * @param {string} tagId - ID dari element yang ingin di-click
    */
    function clickById(tagId) {
        document.getElementById(`${tagId}`).click();
    }

    /**
    * Function ini berfungsi untuk memilih element dan men-input kan nya ke element tersebut
    * berdasarkan dengan parameter yang dikirimkan
    *
    * @param {string} selector - Selector dari element yang ingin di-input
    * @param {string} innerHTML - Isi dari element yang ingin di-input
    */
    function querySelectorInnerHTML(selector, innerHTML) {
        /*
         Karena pakai Javascript Native, maka harus mengubahnya menjadi DOM terlebih dahulu
         agar bisa di append ke HTML
        */

        let resQuerySelector = document.querySelectorAll(`${selector}`);
        resQuerySelector.forEach((element) => {
            element.innerHTML = `${innerHTML}`;
        });

        return innerHTML;
    }
</script>
