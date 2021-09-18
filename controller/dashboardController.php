<?php
namespace Controller;

class DashboardController
{
    public function index($request)
    {
        require 'view/dashboard/dashboard.php';
    }
}

?>