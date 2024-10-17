<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<body class="type-3053">

<section class="container my-5">
    <h2 class="text-center">REFURBISHED DEVICES SHOP</h2>
    <div class="row text-center">
        <div class="col-md-3 product-item">
            <img src="image/MG_2901-360x360.jpg" alt="Headphones NK500" class="img-fluid product-image">
            <h5>HEADPHONES NK500</h5>
            <p>$499.00</p>
            <span class="btn">Add to cart</span>
        </div>
        <div class="col-md-3 product-item">
            <img src="image/MG_2870-1-360x360.jpg" alt="Phone 30N" class="img-fluid product-image">
            <h5>PHONE 30N</h5>
            <p>$300.00</p>
            <span class="btn">Add to cart</span>
        </div>
        <div class="col-md-3 product-item">
            <img src="image/MG_2875-1-360x360.jpg" alt="Phone GT550" class="img-fluid product-image">
            <h5>PHONE GT550</h5>
            <p>$370.00</p>
            <span class="btn">Add to cart</span>
        </div>
        <div class="col-md-3 product-item">
            <img src="image/MG_2876-1-360x360.jpg" alt="Phone TR300" class="img-fluid product-image">
            <h5>PHONE TR300</h5>
            <p>$220.00</p>
            <span class="btn">Add to cart</span>
        </div>
    </div>
</section>

<section class="container my-5">
    <h2 class="text-center">CERTIFIED EXPERTS</h2>
    <div class="certified-section">
        <!-- Text Section -->
        <div class="certified-text">
            <h4>We fix it all the popular brands</h4>
            <p>Vivamus nibh dolor, posuere et consequat ut, posuere nec velit. Nullam non augue pretium, rutrum urna eu, viverra magna. Nullam accumsan arcu id auctor mattis. Vestibulum vitae bibendum nisl, a maximus massa. Vestibulum erat turpis, dapibus et diam nec, fringilla pellentesque nulla. Integer rutrum tristique nisi blandit volutpat. Proin rhoncus mauris in consequat vulputate. Etiam dictum mauris a sapien fermentum imperdiet. Suspendisse potenti. Aenean sagittis libero eu nibh varius imperdiet. Nunc tempus at mi eu convallis. Vestibulum suscipit congue nunc sed ultrices. Phasellus posuere, elit nec euismod fermentum, purus massa congue magna, nec consequat arcu nisi sit amet sapien.</p>
        </div>

        <div class="certified-logos">
            <div class="row logo-row text-center">
                <div class="col-md-3">
                    <img src="image/apple-180x180.png" alt="Apple" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/fujitsu-180x180.png" alt="Fujitsu" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/sharp-150x150.png" alt="Sharp" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/dell-180x180.png" alt="Dell" class="certified-logo">
                </div>
            </div>
            <div class="row logo-row text-center">
                <div class="col-md-3">
                    <img src="image/siemens-180x180.png" alt="Siemens" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/bose-180x180.png" alt="Bose" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/samsung-180x180.png" alt="Samsung" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/acer-180x180.png" alt="Acer" class="certified-logo">
                </div>
            </div>
            <div class="row logo-row text-center">
                <div class="col-md-3">
                    <img src="image/panasonic-180x180.png" alt="Panasonic" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/asus-180x180.png" alt="Asus" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/lg-180x180.png" alt="LG" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/sony-180x180.png" alt="Sony" class="certified-logo">
                </div>
            </div>
            <div class="row logo-row text-center">
                <div class="col-md-3">
                    <img src="image/jvc-180x180.png" alt="JVC" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/philips-180x180.png" alt="Philips" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/lenovo-180x180.png" alt="Lenovo" class="certified-logo">
                </div>
                <div class="col-md-3">
                    <img src="image/hp-180x180.png" alt="HP" class="certified-logo">
                </div>
            </div>
        </div>
    </div>
</section>

</body>
</html>