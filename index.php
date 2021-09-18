<?php
require 'view/includes/header.php';
require 'model/DB.php';
require 'helper/Custom.php';
$products = Model\DB::table("products")->select("*")->limit(3)->get();
$gallery = Model\DB::table("gallery")->select("*")->limit(3)->get();
$url = Helper\Custom::url();
?>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=$url?>/images/slider1.jpg" class="d-block w-100" alt=".slider1">
    </div>
    <div class="carousel-item">
      <img src="<?=$url?>/images/slider2.jpg" class="d-block w-100" alt="slider2">
    </div>
    <div class="carousel-item">
      <img src="<?=$url?>/images/slider3.jpg" class="d-block w-100" alt="slider3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container">
  <div class="row">
    <div class="col">
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">About us</h1>
            <div class="col-lg-8 mx-auto">
            <p class="lead mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Products/ services</h1>
        </div>
    </div>
    <div class="row">
        <?php foreach ($products as $key=>$product): ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
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
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Gallery</h1>
        </div>
    </div>
    <div class="row">
        <?php foreach ($gallery as $key=>$galleryObj): ?>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $url.'/'.$galleryObj['image_url']; ?>" class="card-img-top" alt="...">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-12">
        <div class="px-4 py-5 my-5 text-center">
            <h1 class="display-5 fw-bold">Testimonial</h1>
        </div>
    </div>
    <div id="carouselTestimonialSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="<?=$url?>/images/image1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="<?=$url?>/images/image2.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                            <img src="<?=$url?>/images/image3.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimonialSlidesOnly" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimonialSlidesOnly" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<?php include 'view/includes/footer.php';?>