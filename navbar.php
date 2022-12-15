<?php
    require 'function.php';

    global $navbarLink;

    $navbarLink = [
        ['link' => 'index.php', 'name' => 'Home', 'type' => 'single'],
        ['link' => '', 'name' => 'Brand', 'type' => 'dropdown', 'data' => [
                ['productName' => 'iPhone', 'productLink' => 'index.php?brand=iphone'],
                ['productName' => 'Samsung', 'productLink' => 'index.php?brand=samsung'],
                ['productName' => 'Xiaomi', 'productLink' => 'index.php?brand=xiaomi'],
                ['productName' => 'Oppo', 'productLink' => 'index.php?brand=oppo'],
            ],
        ]
    ];

    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
    $checkLogin = "<script>document.write(localStorage.getItem('logged'));</script>";
?>
<nav class="navbar navbar-expand-lg bg-light border-bottom col-12 sticky-top">
    <div class="container-fluid flex-row">
        <a class="navbar-brand" href="index.php">Tokopaedi</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto p-0">
                <?php
                    foreach ($navbarLink as $key => $value) {
                        if ($value['type'] === 'single') {
                        echo "<li class='btn btn-light nav-item'>";
                            if (($value['link']) == $curPageName) {
                                echo "<a class='nav-link active' aria-current='page' href='".$value['link']."'>".$value['name']."</a>";
                            } else {
                                echo "<a class='nav-link' href='".$value['link']."'>".$value['name']."</a>";
                            }
                            echo "</li>";
                        }
                        if ($value['type'] === 'dropdown')  {
                            echo "<li class='btn btn-light nav-item dropdown'>";
                                echo "<a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-bs-toggle='dropdown' aria-expanded='false'>".$value['name']."</a>";
                                echo "<ul class='dropdown-menu' aria-labelledby='navbarDropdown'>";
                                    foreach ($value['data'] as $keyDropdown => $valueDropdown) {
                                        echo "<li><a class='dropdown-item' href='".$valueDropdown['productLink']."'>".$valueDropdown['productName']."</a></li>";
                                    }
                                echo "</ul>";
                            echo "</li>";
                        }
                    }
                ?>
            </ul>
            <ul class="navbar-nav">
                <li class="btn btn-light nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/profile.png" width="25" height="25" alt="Profile" class="rounded-circle">
                    </a>
                    <ul style='right: 0;' class="dropdown-menu" id="dropdownMenuAccount" aria-labelledby="navbarDropdownMenuLink">

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