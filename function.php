<?php
function console_log() {
    $args = func_get_args();
    echo '<script>';
    echo 'console.log('.json_encode($args).')';
    echo '</script>';
}
?>
<script>
    // Function ini berfungsi untuk direct link ke halaman yang
    // berdasarkan dengan parameter yang dikirimkan
    function hrefDirect(link) {
        location.href = `${link}`;
    }

    // Function ini berfungsi untuk men-click element
    // berdasarkan dengan parameter yang dikirimkan
    function clickById(tagId) {
        document.getElementById(`${tagId}`).click();
    }

    function querySelectorInnerHTML(selector, innerHTML) {
        let resQuerySelector = document.querySelectorAll(`${selector}`);
        let receiver = Array.from(resQuerySelector);
        receiver[0].innerHTML = innerHTML;

        return innerHTML;
    }
</script>
