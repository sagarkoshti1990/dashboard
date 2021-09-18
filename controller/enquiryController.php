<?php
namespace Controller;
require __DIR__ . '/../model/DB.php';
require __DIR__ . '/../helper/Custom.php';

class EnquiryController
{
    public $atribute = ['title',"image_url","content_hierarchy","description"];
    public $url;
    function __construct() {
        $this->url = \Helper\Custom::url();
    }

    public function index($request)
    {
        require __DIR__ . '/../view/dashboard/includes/header.php';

        $item = \Model\DB::table("enquiries")->select("*")->pagination(3);
        $url = $this->url;
        
        require 'view/dashboard/enquiries/index.php';
        include __DIR__ . '/../view//includes/pagination.php';
        require __DIR__ . '/../view/dashboard/includes/footer.php';
    }

    public function store($request)
    {
        $url = $this->url;
        $data = array_intersect_key($request, array_flip((array) $this->atribute));
        $file_url = \Helper\Custom::upload('image');
        if($file_url) {
            $data['image_url'] = $file_url;
            $item = \Model\DB::table("products")->save($data);
            header("Location: $this->url/dashboard/gallery");
        }
    }
}

?>