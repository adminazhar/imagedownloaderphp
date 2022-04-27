<?php

class ImageDownloader {
    private
        $file;

    public function __construct($filename) {
        $this->file = $filename;
    }

    public function getImage($url) {
        if (isset($this->file)) {
            
            // cURL to download the image
            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_HEADER, 0);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($curl, CURLOPT_BINARYTRANSFER,1);
            curl_setopt($curl, CURLOPT_BINARYTRANSFER,1);
            $rawdata = curl_exec($curl);
            curl_close($curl);
        
            // Saving the image
            $filePath = pathinfo($url);
            // Current filename format - foldername/time - originalfilename.extension
            $filename = $this->file . time() . " - " . $filePath['basename'];
            $fp = fopen($filename,'w');
            fwrite($fp, $rawdata);
            fclose($fp);
            // Returning the filename for later use to store in db etc..
            return $filename;
        } else {
            // Throw error if folder name is not speicified
            trigger_error("Folder not set", E_USER_ERROR);
        }
    }
}
?>