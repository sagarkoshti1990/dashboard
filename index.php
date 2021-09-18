<?php

$request = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

switch ($request) {
    case '/' :
        require __DIR__ . '/view/home.php';
        break;
    case '' :
        require __DIR__ . '/view/home.php';
        break;
    case '/aboutUs' :
        require __DIR__ . '/view/aboutUs.php';
        break;
    case '/productsServices' :
        require __DIR__ . '/view/productsServices.php';
        break;
    case '/dashboard' :
        require __DIR__ . '/controller/dashboardController.php';
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $obj = new Controller\DashboardController;
            $obj->index($_REQUEST);
        }
        break;
    case '/dashboard/products' :
        require __DIR__ . '/controller/productController.php';
        $obj = new Controller\ProductController;
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $obj->index($_REQUEST);
        } else if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $obj->store($_REQUEST);
        }
        break;
    case '/dashboard/products/create' :
        require __DIR__ . '/controller/productController.php';
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $obj = new Controller\ProductController;
            $obj->create($_REQUEST);
        }
        break;
    case '/dashboard/gallery' :
        require __DIR__ . '/controller/galleryController.php';
        $obj = new Controller\GalleryController;
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $obj->index($_REQUEST);
        } else if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $obj->store($_REQUEST);
        }
        break;
    case '/dashboard/gallery/create' :
        require __DIR__ . '/controller/galleryController.php';
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $obj = new Controller\GalleryController;
            $obj->create($_REQUEST);
        }
        break;
    case '/dashboard/enquiries' :
        require __DIR__ . '/controller/enquiryController.php';
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $obj = new Controller\EnquiryController;
            $obj->index($_REQUEST);
        }
        break;
    case '/gallery' :
        require __DIR__ . '/view/gallery.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/view/404.php';
        break;
}
?>