<?php
// Berfungsi untuk mengeksekusi console.log() pada PHP menggunakan JavaScript di browser
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

    // Function ini berfungsi untuk mengambil parameter yang dikirimkan melalui URL
    function filterBrand() {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const brand = urlParams.get('brand')

        return brand;
    }

    /**
     * Function ini berfungsi untuk mengacak banyak array berdasarkan parameter yang dikirimkan
     *
     * @param {[{productDesc: string, productImage: string, productLink: string, productName: string, productPrice: string}][]} arrays - Banyak array yang ingin diacak
     */
    function shuffleArray(...arrays) {
        arrays.forEach(array => {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        });
    }

    /**
     * Function ini berfungsi untuk mangacak satu array berdasarkan parameter yang dikirimkan
     *
     * @param {{productDesc: string, productImage: string, productLink: string, productName: string, productPrice: string}[]} array - Satu array yang ingin diacak
     */
    function randomizeArray(array) {
        for (let i = array.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [array[i], array[j]] = [array[j], array[i]];
        }
    }

    function ajaxCheckout() {
        jQuery.ajax({
            method: "GET",
            url: "test.js",
            dataType: "script",
            data: ""
        });
    }
</script>
