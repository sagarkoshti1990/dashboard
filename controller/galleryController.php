<?php
namespace Controller;
require __DIR__ . '/../model/DB.php';
require __DIR__ . '/../helper/Custom.php';

class GalleryController
{
    public $atribute = ["image_url","content_hierarchy"];
    public $url;
    function __construct() {
        $this->url = \Helper\Custom::url();
    }
    public function index($request)
    {
        require __DIR__ . '/../view/dashboard/includes/header.php';

        $item = \Model\DB::table("gallery")->select("*")->pagination(3);
        $url = \Helper\Custom::url();
        
        require 'view/dashboard/gallery/index.php';
        include __DIR__ . '/../view//includes/pagination.php';
        require __DIR__ . '/../view/dashboard/includes/footer.php';
    }

    public function create($request)
    {
        require __DIR__ . '/../view/dashboard/includes/header.php';
        $url = $this->url;
        
        require 'view/dashboard/gallery/create.php';
        require __DIR__ . '/../view/dashboard/includes/footer.php';
    }

    public function store($request)
    {
        $url = $this->url;
        $data = array_intersect_key($request, array_flip((array) $this->atribute));
        $file_url = \Helper\Custom::upload('image');
        if($file_url) {
            $data['image_url'] = $file_url;
            $item = \Model\DB::table("gallery")->save($data);
            header("Location: $this->url/dashboard/gallery");
        }
    }
}

?>