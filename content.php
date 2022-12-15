<?php
    global $sliderCarousel;

    $sliderCarousel = [
        ['img' => 'assets/carousel/iphone.png', 'alt' => 'iPhone 14 Series Picture', 'caption' => 'iPhone 14 Series', 'captionDesc' => 'Think Different'],
        ['img' => 'assets/carousel/samsung.png', 'alt' => 'Samsung Galaxy S22 Series Picture', 'caption' => 'Samsung Galaxy S22 Series', 'captionDesc' => 'Do what You Can`t'],
        ['img' => 'assets/carousel/xiaomi.png', 'alt' => 'Xiaomi 12 Series Picture', 'caption' => 'Xiaomi 12 Series', 'captionDesc' => 'Just for fans'],
        ['img' => 'assets/carousel/oppo.png', 'alt' => 'Oppo Find X5 Series Picture', 'caption' => 'Oppo Find X5 Series', 'captionDesc' => 'Briliant Potrait'],
    ];
?>
<header>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="slider-container">
            <div class="carousel-indicators">
                <?php
                    $i = 0;
                    foreach ($sliderCarousel as $key => $value) {
                        if ($i === 0) {
                            echo "<button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='".$i."' class='active' aria-current='true' aria-label='Slide ".$i."'></button>";
                        } else {
                            echo "<button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='".$i."' aria-label='Slide ".$i."'></button>";
                        }
                        $i++;
                    }
                ?>
            </div>
            <div class="carousel-inner">
                <?php
                    $i = 0;
                    foreach ($sliderCarousel as $key => $value) {
                        console_log($value);
                        if ($i === 0) {
                            echo "<div class='carousel-item active'>";
                        } else {
                            echo "<div class='carousel-item'>";
                        }
                            echo "<div><a href='buy.php'><img src='".$value['img']."' class='d-block w-100' alt='".$value['alt']."'></a></div>";
                                echo "<div class='carousel-caption d-none d-md-block'>";
                                    echo "<h5>".$value['caption']."</h5>";
                                    echo "<p>".$value['captionDesc']."</p>";
                                echo "</div>";
                        echo "</div>";
                        $i++;
                    }
                ?>
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
    <div class="col-12 p-5 d-flex bg-secondary justify-content-center flex-wrap" id="productList">
        <!-- productList will dynamically generate here by JavaScript -->
    </div>
</main>
<script>
    let filteredBrand = filterBrand();

    const iphoneList = [
        {
            productName: 'iPhone 14',
            productLink: 'product1.php',
            productImage: 'assets/brand/iphone/14.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 1.000.000'
        },
        {
            productName: 'iPhone 14 Plus',
            productLink: 'product2.php',
            productImage: 'assets/brand/iphone/14-plus.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 2.000.000'
        },
        {
            productName: 'iPhone 14 Pro',
            productLink: 'product3.php',
            productImage: 'assets/brand/iphone/14-pro.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 3.000.000'
        },
        {
            productName: 'iPhone 14 Pro Max',
            productLink: 'product4.php',
            productImage: 'assets/brand/iphone/14-pro-max.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 4.000.000'
        },
    ];

    const samsungList = [
        {
            productName: 'Samsung Galaxy S22 5G',
            productLink: 'product1.php',
            productImage: 'assets/brand/samsung/s22.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 1.000.000'
        },
        {
            productName: 'Samsung Galaxy S22+ 5G',
            productLink: 'product2.php',
            productImage: 'assets/brand/samsung/s22-plus.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 2.000.000'
        },
        {
            productName: 'Samsung Galaxy S22 Ultra 5G',
            productLink: 'product3.php',
            productImage: 'assets/brand/samsung/s22-ultra.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 3.000.000'
        },
    ];

    const xiaomiList = [
        {
            productName: 'Xiaomi 12 Lite',
            productLink: 'product1.php',
            productImage: 'assets/brand/xiaomi/12-lite.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 1.000.000'
        },
        {
            productName: 'Xiaomi 12',
            productLink: 'product2.php',
            productImage: 'assets/brand/xiaomi/12.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 2.000.000'
        },
        {
            productName: 'Xiaomi 12 Pro',
            productLink: 'product3.php',
            productImage: 'assets/brand/xiaomi/12-pro.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 3.000.000'
        },
        {
            productName: 'Xiaomi 12S Ultra',
            productLink: 'product4.php',
            productImage: 'assets/brand/xiaomi/12s-ultra.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 4.000.000'
        },
    ];

    const oppoList = [
        {
            productName: 'Oppo Find X5 Lite',
            productLink: 'product1.php',
            productImage: 'assets/brand/oppo/find-x5-lite.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 1.000.000'
        },
        {
            productName: 'Oppo Find X5',
            productLink: 'product2.php',
            productImage: 'assets/brand/oppo/find-x5.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 2.000.000'
        },
        {
            productName: 'Oppo Find X5 Pro',
            productLink: 'product3.php',
            productImage: 'assets/brand/oppo/find-x5-pro.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productPrice: 'Rp. 3.000.000'
        },
    ];

    function generateTheProductList() {
        const logged = localStorage.getItem('logged');
        let res = "";
        let randomizedBrand = [];

        if (filteredBrand !== null || "") {
            if (filteredBrand === "iphone") {
                randomizedBrand = iphoneList;
            } else if (filteredBrand === "samsung") {
                randomizedBrand = samsungList;
            } else if (filteredBrand === "xiaomi") {
                randomizedBrand = xiaomiList;
            } else if (filteredBrand === "oppo") {
                randomizedBrand = oppoList;
            }
        } else {
            shuffleArray(iphoneList, samsungList, xiaomiList, oppoList);
            randomizedBrand = [...iphoneList, ...samsungList, ...xiaomiList, ...oppoList];
            randomizeArray(randomizedBrand);
        }

        randomizedBrand.forEach((data) => {
            console.log(data);
            if (logged === 'true') {
                res = res + "<div class='card m-2' style='width: 18rem;'>";
                    res = res + "<img src=" + `${data.productImage}` + " class='card-img-top p-2' alt=''>";
                    res = res + "<div class='card-body'>";
                        res = res + "<h5 class='card-title'>" + `${data.productName}` + "</h5>";
                        res = res + "<p class='card-text'>" + `${data.productDesc}` + "</p>";
                        res = res + "<a href=" + `${data.productLink}` + " class='btn btn-primary'>Go somewhere</a>";
                    res = res + "</div>";
                res = res + "</div>";
            } else {
                res = res + "<div class='card m-2' style='width: 18rem;'>";
                    res = res + "<img src="+ `${data.productImage}` +" class='card-img-top p-2' alt=''>";
                    res = res + "<div class='card-body'>";
                        res = res + "<h5 class='card-title'>" + `${data.productName} | ${data.productPrice}` + "</h5>";
                        res = res + "<p class='card-text'>" + `${data.productDesc}` + "</p>";
                        res = res + "<a href='login.php' class='btn btn-danger'>Login to buy this Product</a>";
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