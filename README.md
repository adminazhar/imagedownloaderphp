## Simple Image Downloader PHP

Simple Image Download class for PHP using cURL, easy to use.

#### :wrench: Features
- single file
- specify folder
- all types of image type supported
- 3 lines of code

### :books: How to use

```php
require "ImageDownload.php";
$image = new ImageDownloader("images/");
$downloadedImage = $image->getImage("https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png");
```
