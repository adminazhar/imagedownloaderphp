<?php
/** 
 * Example File
 */

require_once "ImageDownload.php";

$image = new ImageDownloader("images/");
$downloadedimage = $image->getImage("https://avatars.githubusercontent.com/u/20738252");

echo "Here is the downloaded image: <br>";
echo "<img src='" . $downloadedimage . "'>";

?>