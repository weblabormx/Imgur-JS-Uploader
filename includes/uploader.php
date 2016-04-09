<?php
require '../vendor/autoload.php';
$cacher = new Doctrine\Common\Cache\FilesystemCache('/tmp');
$uploader = RemoteImageUploader\Factory::create('Imgur', array(
    'cacher' => $cacher
));
$url = $uploader->upload($_FILES['image']["tmp_name"]);
echo $url;
?>