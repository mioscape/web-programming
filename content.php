<?php
    global $sliderCarousel;

    $sliderCarousel = [
        ['img' => 'assets/carousel/iphone.png', 'alt' => 'iPhone 14 Series Picture', 'caption' => 'iPhone 14 Series', 'captionDesc' => 'Think Different'],
        ['img' => 'assets/carousel/samsung.png', 'alt' => 'Samsung Galaxy S22 Series Picture', 'caption' => 'Samsung Galaxy S22 Series', 'captionDesc' => 'Do what You Can`t'],
        ['img' => 'assets/carousel/xiaomi.png', 'alt' => 'Xiaomi 12 Series Picture', 'caption' => 'Xiaomi 12 Series', 'captionDesc' => 'Just for fans'],
        ['img' => 'assets/carousel/oppo.png', 'alt' => 'Oppo Find X5 Series Picture', 'caption' => 'Oppo Find X5 Series', 'captionDesc' => 'Briliant Potrait'],
    ];

    console_log($sliderCarousel);
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
    <div class="col-12 p-5 d-flex bg-light justify-content-center flex-wrap" id="productList">
        <!-- productList will dynamically generate here by JavaScript -->
    </div>
</main>
<script>
    let filteredBrand = filterBrand();

    const iphoneList = [
        {
            productName: 'iPhone 14',
            productImage: 'assets/brand/iphone/14.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productLongDesc: {
                Body: '146.7 x 71.5 x 7.8 mm (5.78 x 2.81 x 0.31 in); 172 g (6.07 oz); Glass front (Corning-made glass), glass back (Corning-made glass), aluminum frame',
                Display: 'Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak); 6.1 inches, 90.2 cm2 (~86.0% screen-to-body ratio); 1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)',
                Chipset: 'Apple A15 Bionic (5 nm)',
                Memory: '128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM',
                OS: 'iOS 16, upgradable to iOS 16.2',
                RearCamera: '12 MP, f/1.5, 26mm (wide), 1/1.7", 1.9µm, dual pixel PDAF, sensor-shift OIS 12 MP, f/2.4, 13mm, 120˚ (ultrawide)',
                FrontCamera: '12 MP, f/1.9, 23mm (wide), 1/3.6", PDAF SL 3D, (depth/biometrics sensor)',
                VideoCapture: '4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS',
                Battery: 'Li-Ion 3279 mAh, non-removable (12.68 Wh)',
                Misc: 'Face ID, accelerometer, gyro, proximity, compass, barometer',
            },
            productPrice: 12425214.00,
        },
        {
            productName: 'iPhone 14 Plus',
            productImage: 'assets/brand/iphone/14-plus.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productLongDesc: {
                Body: '146.7 x 71.5 x 7.8 mm (5.78 x 2.81 x 0.31 in); 172 g (6.07 oz); Glass front (Corning-made glass), glass back (Corning-made glass), aluminum frame',
                Display: 'Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak); 6.1 inches, 90.2 cm2 (~86.0% screen-to-body ratio); 1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)',
                Chipset: 'Apple A15 Bionic (5 nm)',
                Memory: '128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM',
                OS: 'iOS 16, upgradable to iOS 16.2',
                RearCamera: '12 MP, f/1.5, 26mm (wide), 1/1.7", 1.9µm, dual pixel PDAF, sensor-shift OIS 12 MP, f/2.4, 13mm, 120˚ (ultrawide)',
                FrontCamera: '12 MP, f/1.9, 23mm (wide), 1/3.6", PDAF SL 3D, (depth/biometrics sensor)',
                VideoCapture: '4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS',
                Battery: 'Li-Ion 3279 mAh, non-removable (12.68 Wh)',
                Misc: 'Face ID, accelerometer, gyro, proximity, compass, barometer',
            },
            productPrice: 14066123.71,
        },
        {
            productName: 'iPhone 14 Pro',
            productImage: 'assets/brand/iphone/14-pro.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productLongDesc: {
                Body: '146.7 x 71.5 x 7.8 mm (5.78 x 2.81 x 0.31 in); 172 g (6.07 oz); Glass front (Corning-made glass), glass back (Corning-made glass), aluminum frame',
                Display: 'Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak); 6.1 inches, 90.2 cm2 (~86.0% screen-to-body ratio); 1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)',
                Chipset: 'Apple A15 Bionic (5 nm)',
                Memory: '128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM',
                OS: 'iOS 16, upgradable to iOS 16.2',
                RearCamera: '12 MP, f/1.5, 26mm (wide), 1/1.7", 1.9µm, dual pixel PDAF, sensor-shift OIS 12 MP, f/2.4, 13mm, 120˚ (ultrawide)',
                FrontCamera: '12 MP, f/1.9, 23mm (wide), 1/3.6", PDAF SL 3D, (depth/biometrics sensor)',
                VideoCapture: '4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS',
                Battery: 'Li-Ion 3279 mAh, non-removable (12.68 Wh)',
                Misc: 'Face ID, accelerometer, gyro, proximity, compass, barometer',
            },
            productPrice: 15629043.71,
        },
        {
            productName: 'iPhone 14 Pro Max',
            productImage: 'assets/brand/iphone/14-pro-max.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productLongDesc: {
                Body: '146.7 x 71.5 x 7.8 mm (5.78 x 2.81 x 0.31 in); 172 g (6.07 oz); Glass front (Corning-made glass), glass back (Corning-made glass), aluminum frame',
                Display: 'Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak); 6.1 inches, 90.2 cm2 (~86.0% screen-to-body ratio); 1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)',
                Chipset: 'Apple A15 Bionic (5 nm)',
                Memory: '128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM',
                OS: 'iOS 16, upgradable to iOS 16.2',
                RearCamera: '12 MP, f/1.5, 26mm (wide), 1/1.7", 1.9µm, dual pixel PDAF, sensor-shift OIS 12 MP, f/2.4, 13mm, 120˚ (ultrawide)',
                FrontCamera: '12 MP, f/1.9, 23mm (wide), 1/3.6", PDAF SL 3D, (depth/biometrics sensor)',
                VideoCapture: '4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS',
                Battery: 'Li-Ion 3279 mAh, non-removable (12.68 Wh)',
                Misc: 'Face ID, accelerometer, gyro, proximity, compass, barometer',
            },
            productPrice: 17191963.71,
        },
    ];

    const samsungList = [
        {
            productName: 'Samsung Galaxy S22 5G',
            productImage: 'assets/brand/samsung/s22.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productLongDesc: {
                Body: '146.7 x 71.5 x 7.8 mm (5.78 x 2.81 x 0.31 in); 172 g (6.07 oz); Glass front (Corning-made glass), glass back (Corning-made glass), aluminum frame',
                Display: 'Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak); 6.1 inches, 90.2 cm2 (~86.0% screen-to-body ratio); 1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)',
                Chipset: 'Apple A15 Bionic (5 nm)',
                Memory: '128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM',
                OS: 'iOS 16, upgradable to iOS 16.2',
                RearCamera: '12 MP, f/1.5, 26mm (wide), 1/1.7", 1.9µm, dual pixel PDAF, sensor-shift OIS 12 MP, f/2.4, 13mm, 120˚ (ultrawide)',
                FrontCamera: '12 MP, f/1.9, 23mm (wide), 1/3.6", PDAF SL 3D, (depth/biometrics sensor)',
                VideoCapture: '4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS',
                Battery: 'Li-Ion 3279 mAh, non-removable (12.68 Wh)',
                Misc: 'Face ID, accelerometer, gyro, proximity, compass, barometer',
            },
            productPrice: 4813637.31,
        },
        {
            productName: 'Samsung Galaxy S22+ 5G',
            productImage: 'assets/brand/samsung/s22-plus.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productLongDesc: {
                Body: '146.7 x 71.5 x 7.8 mm (5.78 x 2.81 x 0.31 in); 172 g (6.07 oz); Glass front (Corning-made glass), glass back (Corning-made glass), aluminum frame',
                Display: 'Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak); 6.1 inches, 90.2 cm2 (~86.0% screen-to-body ratio); 1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)',
                Chipset: 'Apple A15 Bionic (5 nm)',
                Memory: '128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM',
                OS: 'iOS 16, upgradable to iOS 16.2',
                RearCamera: '12 MP, f/1.5, 26mm (wide), 1/1.7", 1.9µm, dual pixel PDAF, sensor-shift OIS 12 MP, f/2.4, 13mm, 120˚ (ultrawide)',
                FrontCamera: '12 MP, f/1.9, 23mm (wide), 1/3.6", PDAF SL 3D, (depth/biometrics sensor)',
                VideoCapture: '4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS',
                Battery: 'Li-Ion 3279 mAh, non-removable (12.68 Wh)',
                Misc: 'Face ID, accelerometer, gyro, proximity, compass, barometer',
            },
            productPrice: 6078821.05
        },
        {
            productName: 'Samsung Galaxy S22 Ultra 5G',
            productImage: 'assets/brand/samsung/s22-ultra.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productLongDesc: {
                Body: '146.7 x 71.5 x 7.8 mm (5.78 x 2.81 x 0.31 in); 172 g (6.07 oz); Glass front (Corning-made glass), glass back (Corning-made glass), aluminum frame',
                Display: 'Super Retina XDR OLED, HDR10, Dolby Vision, 800 nits (HBM), 1200 nits (peak); 6.1 inches, 90.2 cm2 (~86.0% screen-to-body ratio); 1170 x 2532 pixels, 19.5:9 ratio (~460 ppi density)',
                Chipset: 'Apple A15 Bionic (5 nm)',
                Memory: '128GB 6GB RAM, 256GB 6GB RAM, 512GB 6GB RAM',
                OS: 'iOS 16, upgradable to iOS 16.2',
                RearCamera: '12 MP, f/1.5, 26mm (wide), 1/1.7", 1.9µm, dual pixel PDAF, sensor-shift OIS 12 MP, f/2.4, 13mm, 120˚ (ultrawide)',
                FrontCamera: '12 MP, f/1.9, 23mm (wide), 1/3.6", PDAF SL 3D, (depth/biometrics sensor)',
                VideoCapture: '4K@24/25/30/60fps, 1080p@25/30/60/120fps, gyro-EIS',
                Battery: 'Li-Ion 3279 mAh, non-removable (12.68 Wh)',
                Misc: 'Face ID, accelerometer, gyro, proximity, compass, barometer',
            },
            productPrice: 11096575.71
        },
    ];

    const xiaomiList = [
        {
            productName: 'Xiaomi 12 Lite',
            productImage: 'assets/brand/xiaomi/12-lite.jpg',
            productDesc: 'Xiaomi 12 Lite 5G GSM Unlocked International Version (New) ',
            productLongDesc: {
                Body: '159.3x73.7x7.29mm, 173g; Gorilla Glass 5 front, glass back, plastic frame.',
                Display: '6.55" AMOLED, 68B colors, HDR10+, Dolby Vision, 120Hz, 500 nits (typ), 800 nits, 1080x2400px resolution, 20:9 aspect ratio, 402ppi.',
                Chipset: 'Qualcomm SM7325 Snapdragon 778G 5G (6 nm): Octa-core (4x2.4 GHz Kryo 670 & 4x1.8 GHz Kryo 670); Adreno 642L.',
                Memory: '128GB 6GB RAM, 128GB 8GB RAM, 256GB 8GB RAM; UFS 2.2.',
                OS: 'Android 12, MIUI 13.',
                RearCamera: 'Wide (main): 108 MP, f/1.9, 26mm, 1/1.52", 0.7µm, PDAF; Ultra wide angle: 8 MP, f/2.2, 120˚, 1/4.0", 1.12µm; Macro: 2 MP, f/2.4, 1/5.0", 1.75µm.',
                FrontCamera: '32 MP, f/2.45, 1/2.8", AF.',
                VideoCapture: 'Rear camera: 4K@30fps, 1080p@30/60/120fps; gyro-EIS; Front camera: 1080p@30/60fps, 720p@120fps.',
                Battery: '4500mAh; Fast charging 67W, Quick Charge 4+, Power Delivery 3.0.',
                Misc: 'Fingerprint reader (under display, optical); Infrared port; dual speakers; Virtual proximity sensing.',
            },
            productPrice: 5610882.8
        },
        {
            productName: 'Xiaomi 12',
            productImage: 'assets/brand/xiaomi/12.jpg',
            productDesc: 'Xiaomi 12 5G GSM Unlocked International Version (New) ',
            productLongDesc: {
                Body: '152.7x69.9x8.2mm, 179g; Glass front (Gorilla Glass Victus), glass back (Gorilla Glass 5), metal frame.',
                Display: '6.28" OLED, 12-bit (68B colors), 120Hz, Dolby Vision, HDR10+, 1100 nits (peak), 1080x2400px resolution, 20:9 aspect ratio, 419ppi.',
                Chipset: 'Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm): Octa-core (1x3.00 GHz Cortex-X2 & 3x2.50 GHz Cortex-A710 & 4x1.80 GHz Cortex-A510); Adreno 730.',
                Memory: '128GB 8GB RAM, 256GB 8GB RAM, 256GB 12GB RAM; UFS 3.1.',
                OS: 'Android 12, MIUI 13.',
                RearCamera: 'Wide (main): 50 MP, f/1.9, 26mm, 1/1.56", 1.0µm, PDAF, OIS; Ultra wide angle: 13 MP, f/2.4, 12mm, 123˚, 1/3.06", 1.12µm; Macro: 5 MP, 50mm, AF.',
                FrontCamera: '32 MP, f/2.5, 26mm (wide), 0.7µm.',
                VideoCapture: 'Rear camera: 8K@24fps (HDR10), 4K@30fps (HDR10+), 1080p@30/120/240/960fps, 720p@1920fps, gyro-EIS; Front camera: 4K@30fps (HDR10+), 1080p@30/60fps, 720p@120fps.',
                Battery: '4500mAh; Fast charging 67W, 100% in 39 min (advertised), Fast wireless charging 50W, 100% in 53 min (advertised), Reverse wireless charging 10W, Power Delivery 3.0, Quick Charge 4+.',
                Misc: 'Fingerprint reader (under display, optical); Infrared port; Virtual proximity sensing.',
            },
            productPrice: 7970892.00
        },
        {
            productName: 'Xiaomi 12 Pro',
            productImage: 'assets/brand/xiaomi/12-pro.jpg',
            productDesc: 'Xiaomi 12 Pro 5G Global Version (New) ',
            productLongDesc: {
                Body: '163.6x74.6x8.2mm, 204g; glass back, aluminum frame.',
                Display: '6.73" LTPO AMOLED, 1B colors, 120Hz, Dolby Vision, HDR10+, 1000 nits (HBM), 1500 nits (peak), 1440x3200px resolution, 20:9 aspect ratio, 521ppi.',
                Chipset: 'Qualcomm SM8450 Snapdragon 8 Gen 1 (4 nm): Octa-core (1x3.00 GHz Cortex-X2 & 3x2.50 GHz Cortex-A710 & 4x1.80 GHz Cortex-A510); Adreno 730.',
                Memory: '128GB 8GB RAM, 256GB 8GB RAM, 256GB 12GB RAM; UFS 3.1.',
                OS: 'Android 12, MIUI 13.',
                RearCamera: 'Wide (main): 50 MP, f/1.9, 24mm, 1/1.28", 1.22µm, Dual Pixel PDAF, OIS; Ultra wide angle: 50 MP, f/2.2, 115˚; Telephoto: 50 MP, f/1.9, 48mm, PDAF, 2x optical zoom.',
                FrontCamera: '32 MP, f/2.5, 26mm (wide), 0.7µm.',
                VideoCapture: 'Rear camera: 8K@24fps, 4K@30/60fps, 1080p@30/60/120/240/960fps, gyro-EIS; Front camera: 1080p@30/60fps, 720p@120fps.',
                Battery: '4600mAh; Fast charging 120W, 100% in 18 min (advertised), Fast wireless charging 50W, 100% in 42 min (advertised), Reverse wireless charging 10W, Power Delivery 3.0, Quick Charge 4+.',
                Misc: 'Fingerprint reader (under display, optical); Infrared port; Virtual proximity sensing.',
            },
            productPrice: 8377251.2
        },
        {
            productName: 'Xiaomi 12S Ultra',
            productImage: 'assets/brand/xiaomi/12s-ultra.jpg',
            productDesc: 'Xiaomi 12S Ultra 5G GSM Unlocked International Version (New)',
            productLongDesc: {
                Body: '163.2x75.0x9.1mm, 225g; Glass front (Gorilla Glass Victus), eco leather back, aluminum frame; IP68 dust/water resistant (up to 1.5m for 30 mins).',
                Display: '6.73" LTPO2 AMOLED, 1B colors, 120Hz, Dolby Vision, HDR10+, 1000 nits (HBM), 1500 nits (peak), 1440x3200px resolution, 20:9 aspect ratio, 522ppi.',
                Chipset: 'Qualcomm SM8475 Snapdragon 8+ Gen 1 (4 nm): Octa-core (1x3.19 GHz Cortex-X2 & 3x2.75 GHz Cortex-A710 & 4x1.80 GHz Cortex-A510); Adreno 730.',
                Memory: '256GB 8GB RAM, 256GB 12GB RAM, 512GB 12GB RAM; UFS 3.1.',
                OS: 'Android 12, MIUI 13.',
                RearCamera: 'Wide (main): 50.3 MP, f/1.9, 23mm, 1.0", 1.6µm, multi-directional PDAF, Laser AF, OIS; Ultra wide angle: 48 MP, f/2.2, 13mm, 1/2.0", 0.8µm, Dual-Pixel PDAF; Telephoto: 48 MP, f/4.1, 120mm, 1/2.0", 0.8µm, PDAF, OIS, 5x optical zoom; Depth: TOF 3D.',
                FrontCamera: '32 MP, f/2.4, 25mm (wide), 0.7µm.',
                VideoCapture: 'Rear camera: 8K@24fps, 4K@30/60fps, 1080p@30/60/120/240fps, 720p@3840fps, gyro-EIS, Dolby Vision HDR 10-bit rec. (4K, 1080p); Front camera: 1080p@30.',
                Battery: '4860mAh; Fast charging 67W, Fast wireless charging 50W, 100% in 52 min (advertised), Reverse wireless charging 10W, Quick Charge 4, Power Delivery 3.0',
                Misc: 'Fingerprint reader (under display, optical); NFC; Infrared port; stereo speakers.'
            },
            productPrice: 15394762.00
        },
    ];

    const oppoList = [
        {
            productName: 'Oppo Find X5 Lite',
            productImage: 'assets/brand/oppo/find-x5-lite.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productLongDesc: {
                Body: '165.1x75.5x8.4mm, 188g; glass front (Gorilla Glass 5), glass back, aluminum frame.',
                Display: '6.43" AMOLED, 16M colors, 90Hz, HDR10+, 800 nits (typ), 1200 nits (peak), 1080x2400px resolution, 20:9 aspect ratio, 409ppi.',
                Chipset: 'Qualcomm SM6125 Snapdragon 7i 5G (8 nm): Octa-core (1x2.4 GHz Kryo 475 Prime & 1x2.2 GHz Kryo 475 Gold & 6x1.8 GHz Kryo 475 Silver); Adreno 618.',
                Memory: '128GB 8GB RAM, 256GB 8GB RAM; UFS 2.2.',
                OS: 'Android 11, ColorOS 11.1.',
                RearCamera: 'Wide (main): 48 MP, f/1.7, 26mm (wide), 1/2.0", 0.8µm, PDAF; Ultra wide angle: 8 MP, f/2.2, 119˚, 1/4.0", 1.12µm; Depth: 2 MP, f/2.4, 1/5.0", 1.75µm.',
                FrontCamera: '32 MP, f/2.4, 26mm (wide), 1/2.8", 0.8µm.',
                VideoCapture: 'Rear camera: 4K@30fps, 1080p@30fps; Front camera: 1080p@30fps.',
                Battery: '4000mAh; Fast charging 18W.',
                Misc: 'Fingerprint reader (under display, optical); NFC.',
            },
            productPrice: 5752639.64,
        },
        {
            productName: 'Oppo Find X5',
            productImage: 'assets/brand/oppo/find-x5.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productLongDesc: {
                Body: '165.1x75.5x8.4mm, 188g; glass front (Gorilla Glass 5), glass back, aluminum frame.',
                Display: '6.43" AMOLED, 16M colors, 90Hz, HDR10+, 800 nits (typ), 1200 nits (peak), 1080x2400px resolution, 20:9 aspect ratio, 409ppi.',
                Chipset: 'Qualcomm SM6125 Snapdragon 7i 5G (8 nm): Octa-core (1x2.4 GHz Kryo 475 Prime & 1x2.2 GHz Kryo 475 Gold & 6x1.8 GHz Kryo 475 Silver); Adreno 618.',
                Memory: '128GB 8GB RAM, 256GB 8GB RAM; UFS 2.2.',
                OS: 'Android 11, ColorOS 11.1.',
                RearCamera: 'Wide (main): 48 MP, f/1.7, 26mm (wide), 1/2.0", 0.8µm, PDAF; Ultra wide angle: 8 MP, f/2.2, 119˚, 1/4.0", 1.12µm; Depth: 2 MP, f/2.4, 1/5.0", 1.75µm.',
                FrontCamera: '32 MP, f/2.4, 26mm (wide), 1/2.8", 0.8µm.',
                VideoCapture: 'Rear camera: 4K@30fps, 1080p@30fps; Front camera: 1080p@30fps.',
                Battery: '4000mAh; Fast charging 18W.',
                Misc: 'Fingerprint reader (under display, optical); NFC.',
            },
            productPrice: 7276174.06,
        },
        {
            productName: 'Oppo Find X5 Pro',
            productImage: 'assets/brand/oppo/find-x5-pro.jpg',
            productDesc: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.',
            productLongDesc: {
                Body: '165.1x75.5x8.4mm, 188g; glass front (Gorilla Glass 5), glass back, aluminum frame.',
                Display: '6.43" AMOLED, 16M colors, 90Hz, HDR10+, 800 nits (typ), 1200 nits (peak), 1080x2400px resolution, 20:9 aspect ratio, 409ppi.',
                Chipset: 'Qualcomm SM6125 Snapdragon 7i 5G (8 nm): Octa-core (1x2.4 GHz Kryo 475 Prime & 1x2.2 GHz Kryo 475 Gold & 6x1.8 GHz Kryo 475 Silver); Adreno 618.',
                Memory: '128GB 8GB RAM, 256GB 8GB RAM; UFS 2.2.',
                OS: 'Android 11, ColorOS 11.1.',
                RearCamera: 'Wide (main): 48 MP, f/1.7, 26mm (wide), 1/2.0", 0.8µm, PDAF; Ultra wide angle: 8 MP, f/2.2, 119˚, 1/4.0", 1.12µm; Depth: 2 MP, f/2.4, 1/5.0", 1.75µm.',
                FrontCamera: '32 MP, f/2.4, 26mm (wide), 1/2.8", 0.8µm.',
                VideoCapture: 'Rear camera: 4K@30fps, 1080p@30fps; Front camera: 1080p@30fps.',
                Battery: '4000mAh; Fast charging 18W.',
                Misc: 'Fingerprint reader (under display, optical); NFC.',
            },
            productPrice: 9364860.35,
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
            if (logged === 'true') {
                res = res + "<div class='card m-2' style='width: 18rem;'>";
                    res = res + "<img src=" + `${data.productImage}` + " class='card-img-top p-2' alt=''>";
                    res = res + "<div class='card-body'>";
                        res = res + "<h5 class='card-title'>" + `${data.productName}` + "</h5>";
                        res = res + "<h6 class='card-title'>" + formatRupiah(data.productPrice) + "</h6>";
                        res = res + "<p class='card-text'>" + `${data.productDesc}` + "</p>";
                        res = res + "<a onclick='productReview(" + JSON.stringify(data) + ", `product.php`)' class='btn btn-primary'>Buy</a>";
                    res = res + "</div>";
                res = res + "</div>";
            } else {
                res = res + "<div class='card m-2' style='width: 18rem;'>";
                    res = res + "<img src="+ `${data.productImage}` +" class='card-img-top p-2' alt=''>";
                    res = res + "<div class='card-body'>";
                        res = res + "<h5 class='card-title'>" + `${data.productName}` + "</h5>";
                        res = res + "<h6 class='card-title'>" + formatRupiah(data.productPrice) + "</h6>";
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

    function productReview(data, url) {
        localStorage.setItem("productName", data.productName);
        localStorage.setItem("productImage", data.productImage);
        localStorage.setItem("productPrice", data.productPrice);
        localStorage.setItem("productLongDesc", JSON.stringify(data.productLongDesc));

        hrefDirect(url);
    }
    generateTheProductList();
</script>