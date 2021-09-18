<?php
require 'includes/header.php';
require '../model/DB.php';
require '../helper/Custom.php';
$item = Model\DB::table("products")->select("*")->pagination(3);
$url = Helper\Custom::url();
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="px-4 py-5 my-5 text-center">
                <h1 class="display-5 fw-bold">Products/ services</h1>
            </div>
        </div>
        <div class="row pb-5">
            <?php foreach ($item['data'] as $key=>$product): ?>
                <div class="col-4 pb-4">
                    <div class="card">
                        <img src="<?= $url.'/'.$product['image_url']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $product['title']; ?></h5>
                            <p class="card-text"><?= $product['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php include 'includes/pagination.php' ?>
</div>

<?php include 'includes/footer.php';?>