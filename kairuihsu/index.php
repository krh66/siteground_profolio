<?php
require_once("includes/header.php");

$preview = new PreviewProvider($con);
echo $preview->createPreviewPhoto(null);

$containers = new ContentContainer($con);
echo $containers->showAllContent();


?>

