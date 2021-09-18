<?php
namespace Helper;

class Custom
{
    public static function url(){
        if(isset($_SERVER['HTTPS'])){
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }
        else{
            $protocol = 'http';
        }
        return $protocol . "://" . $_SERVER['HTTP_HOST'];
    }

    public static function upload($name = "image")
    {
        $target_dir = __DIR__."/../uploads/";
        $new_file_name = date('Y-m-d H:s:i')."-".basename($_FILES[$name]["name"]);
        $target_file = $target_dir . $new_file_name;
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES[$name]["tmp_name"]);
        $up = move_uploaded_file($_FILES[$name]["tmp_name"], $target_file);
        if ($up) {
            return "uploads/$new_file_name";
        } else {
            return null;
        }
    }
}

?>