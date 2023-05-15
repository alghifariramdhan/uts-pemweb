<?php include_once 'templates/header.php' ?>

<div class="main-banner">
    <div class="row">
        <div class="col-lg-7">
            <div class="header-text">
                <h6>Welcome To Learning Tools Store</h6>
                <h4><em>Browse</em> Our Popular Products Here</h4>
                <div class="main-button">
                    <a href="#product">Browse Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="most-popular" id="product">
    <div class="row">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4><em>Most Popular</em> Products</h4>
            </div>
            <div class="row">
                <?php foreach ($listProduct as $p) { ?>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <img src="assets/images/popular-01.jpg" alt="">
                            <h4><?= $p["name"]; ?><br>
                                <span>Rp. <?= $p["sell_price"]; ?></span><br>
                                <a href="detail.php?id=<?= $p['id']; ?>" class="me-2">Detail</a>
                            </h4>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php' ?>