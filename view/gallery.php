<?php
require 'includes/header.php';
require '../model/DB.php';
require '../helper/Custom.php';
$item = Model\DB::table("gallery")->select("*")->pagination(3);
$url = Helper\Custom::url();
?>
<div class="container">
  <div class="row">
    <div class="col-12">
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Gallery</h1>
        </div>
    </div>
    <div class="row pb-5">
        <?php foreach ($item['data'] as $key=>$galleryObj): ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $url.'/'.$galleryObj['image_url']; ?>" class="card-img-top" alt="...">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  </div>

  <?php include 'includes/pagination.php' ?>
</div>


<?php include 'includes/footer.php';?>