<?php
session_start();
if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit;
}
?>
<?php require 'inc/head.php'; ?>
<section class="cookies container-fluid">
    <div class="row">
        TODO : Display shopping cart items from $_SESSION here.
    </div>
</section>
<?php require 'inc/foot.php'; ?>
