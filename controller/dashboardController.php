<?php
namespace Controller;
require __DIR__ . '/../model/DB.php';

class DashboardController
{
    public function index($request)
    {
        require __DIR__ . '/../view/dashboard/includes/header.php';
        $productCount = \Model\DB::table("products")->select("COUNT(*) as count")->first()['count'];
        $galleryCount = \Model\DB::table("gallery")->select("COUNT(*) as count")->first()['count'];
        $enquiryCount = \Model\DB::table("enquiries")->select("COUNT(*) as count")->first()['count'];
        require 'view/dashboard/dashboard.php';
        require __DIR__ . '/../view/dashboard/includes/footer.php';
    }
}

?>