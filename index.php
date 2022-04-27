<?php
/** 
 * Example File
 */

require_once "ImageDownload.php";

$image = new ImageDownloader("images/");
$downloadedimage = $image->getImage("");

echo "Here is the downloaded image: <br>";
echo "<img src='" . $downloadedimage . "'>";

?>