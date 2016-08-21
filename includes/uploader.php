<?php
require '../vendor/autoload.php';
$cacher = new Doctrine\Common\Cache\FilesystemCache('/tmp');
$uploader = RemoteImageUploader\Factory::create('Imgur', array(
    'cacher' => $cacher
));
$url = $uploader->upload($_FILES['file']["tmp_name"]);
$response = new StdClass;
$response->link = $url;
echo stripslashes(json_encode($response));
?>