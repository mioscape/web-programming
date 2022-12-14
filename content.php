<?php
    global $productList;

    $productList = [
        ['productName' => 'Produk 1', 'productLink' => 'product1.php'],
        ['productName' => 'Produk 2', 'productLink' => 'product2.php']
    ];
?>
<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="slider-container">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/profile.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/profile.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/profile.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</header>
<main class="col-12">
    <div class="col-12 p-5 d-flex bg-secondary justify-content-center" id="productList">

    </div>
</main>
<script>
    const productList = [
        {
            productName: 'Produk 1',
            productLink: 'product1.php',
            productImage: 'assets/profile.png'
        },
        {
            productName: 'Produk 2',
            productLink: 'product2.php',
            productImage: 'assets/profile.png'
        }
    ];

    function generateTheProductList() {
        const logged = localStorage.getItem('logged');
        let res = "";

        productList.forEach((data) => {
            console.log(data);
            if (logged === 'true') {
                res = res + "<div class='card m-2' style='width: 18rem;'>";
                res = res + "<img src=" + `${data.productImage}` + " class='card-img-top' alt='...'>";
                res = res + "<div class='card-body'>";
                res = res + "<h5 class='card-title'>" + `${data.productName}` + "</h5>";
                res = res + "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
                res = res + "<a href=" + `${data.productLink}` + " class='btn btn-primary'>Go somewhere</a>";
                res = res + "</div>";
                res = res + "</div>";
            } else {
                res = res + "<div class='card m-2' style='width: 18rem;'>";
                res = res + "<img src="+ `${data.productImage}` +" class='card-img-top' alt='...'>";
                res = res + "<div class='card-body'>";
                res = res + "<h5 class='card-title'>" + `${data.productName}` + "</h5>";
                res = res + "<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>";
                res = res + "<a class='btn btn-danger'>Login to Buy this Product</a>";
                res = res + "</div>";
                res = res + "</div>";
            }
        });
        // Karena pakai Javascript Native, maka harus mengubahnya menjadi DOM terlebih dahulu
        // agar bisa di append ke HTML
        querySelectorInnerHTML('#productList', res);
    }

    function checkLoginContent() {
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
    generateTheProductList();
</script>