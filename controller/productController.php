<?php
namespace Controller;

class ProductController
{
    public function index($request)
    {
        require __DIR__ . '/../view/dashboard/includes/header.php';
        require __DIR__ . '/../model/DB.php';

        $item = \Model\DB::table("products")->select("*")->pagination(3);
        $url = \Helper\Custom::url();
        
        require 'view/dashboard/products/index.php';
        include __DIR__ . '/../view//includes/pagination.php';
        require __DIR__ . '/../view/dashboard/includes/footer.php';
    }
}

?>