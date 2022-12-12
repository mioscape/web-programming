<?php
    include 'function.php';
    global $navbarLink;
    $navbarLink = [
        ['link' => 'index.php', 'name' => 'Home', 'type' => 'single'],
        ['link' => '', 'name' => 'Produk', 'type' => 'dropdown', 'data' => [
            ['productName' => 'Produk 1', 'productLink' => 'product1.php'],
            ['productName' => 'Produk 2', 'productLink' => 'product2.php']
            ],
        ]
    ];

    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    $checkLogin = "<script>document.write(localStorage.getItem('logged'));</script>";
?>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid flex-row">
        <a class="navbar-brand" href="index.php">Tokopaedi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php
                    foreach ($navbarLink as $key => $value) {
                        if ($value['type'] === 'single') {
                        echo "<li class='nav-item'>";
                            if (($value['link']) == $curPageName) {
                                echo "<a class='nav-link active' aria-current='page' href='".$value['link']."'>".$value['name']."</a>";
                            } else {
                                echo "<a class='nav-link' href='".$value['link']."'>".$value['name']."</a>";
                            }
                            echo "</li>";
                        }
                        if ($value['type'] === 'dropdown')  {
                            console_log($value['data']);
                            echo "<li class='nav-item dropdown'>";
                                echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>".$value['name']."</a>";
                                echo "<ul class='dropdown-menu' aria-labelledby='navbarDropdown'>";
                                    foreach ($value['data'] as $keyDropdown => $valueDropdown) {
                                        console_log($valueDropdown);
                                        echo "<li><a class='dropdown-item' href='".$valueDropdown['productLink']."'>".$valueDropdown['productName']."</a></li>";
                                    }
                                echo "</ul>";
                            echo "</li>";
                        }
                    }
                ?>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="https://toppng.com/uploads/preview/black-and-white-stockportable-network-account-icon-11553436383dwuayhjyvo.png" width="40" height="40" alt="Profile" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu" id="dropdownMenuAccount" aria-labelledby="navbarDropdownMenuLink">

                    </ul>
                </li>
            </ul>
<!--            <form class="d-flex" role="search">-->
<!--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success" type="submit">Search</button>-->
<!--            </form>-->
        </div>
    </div>
</nav>
<a data-bs-toggle="modal" data-bs-target="#ifLogoutModal" id="alertNotLogged"></a>
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="ifLogoutModal" tabindex="-1" aria-labelledby="ifLogoutModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ifLogoutModalLabel">Alert</h1>
            </div>
            <div class="modal-body">
                Are you sure you want to log out?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="logout()">Yes</button>
            </div>
        </div>
    </div>
</div>
<script>
    function checkLogin() {
        const logged = localStorage.getItem('logged');
        let res = "";
        if (logged === 'true') {
            res = res + "<li class='dropdown-item' onclick='hrefDirect(`profile.php`)'>Profile</li>";
            res = res + "<li><hr class='dropdown-divider'></li>"
            res = res + "<li class='dropdown-item' onclick='ifLogout()'>Log Out</li>";
        } else {
            res = res + "<li class='dropdown-item' onclick='hrefDirect(`login.php`)'>Log In</li>";
        }

        // Karena pakai Javascript Native, maka harus mengubahnya menjadi DOM terlebih dahulu
        // agar bisa di append ke HTML
        querySelectorInnerHTML('#dropdownMenuAccount', res);
    }

    function ifLogout() {
        clickById('alertNotLogged');
    }

    function logout() {
        localStorage.setItem('logged', 'false');
        hrefDirect('login.php');
    }
    console.log("Logged: " + localStorage.getItem('logged'));
    checkLogin();
</script>