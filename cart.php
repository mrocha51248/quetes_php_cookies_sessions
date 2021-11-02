<?php
session_start();
if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit;
}
if (isset($_GET['add_to_cart']) && isset($_SESSION['cart'])) {
    $_SESSION['cart'][$_GET['add_to_cart']] = ($_SESSION['cart'][$_GET['add_to_cart']] ?? 0) + 1;
}
?>
<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cart'] as $id => $count) { ?>
            <?php $cookie = $catalog[$id]; ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                <figure class="thumbnail text-center">
                    <img src="assets/img/product-<?= $id; ?>.jpg" alt="<?= $cookie['name']; ?>" class="img-responsive">
                    <figcaption class="caption">
                        <h3><?= $cookie['name']; ?>: x<?= $count ?></h3>
                        <p><?= $cookie['description']; ?></p>
                        <a href="?add_to_cart=<?= $id; ?>" class="btn btn-primary">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                        </a>
                    </figcaption>
                </figure>
            </div>
        <?php } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
