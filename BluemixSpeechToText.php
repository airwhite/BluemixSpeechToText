<?php
//
//  IBM Bluemix Speech to Text
//

define("API_USERNAME",    "<Bluemix Username>");
define("API_PASSWORD",    "<Bluemix Password>");
define("API_BASE_URL",    "https://stream.watsonplatform.net");
define("API_SERVICE",     "/speech-to-text");
define("API_VERSION",     "/api/v1/recognize");
define("API_NARROW_BAND", "ja-JP_NarrowbandModel");
define("API_BROAD_BAND",  "ja-JP_BroadbandModel");
define("API_REQUEST_URL", API_BASE_URL.API_SERVICE.API_VERSION."?model=".API_NARROW_BAND);

function Speech_to_Text($audioFile, $audioType) {
    $size = filesize($audioFile);
    $data = file_get_contents($audioFile);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, API_REQUEST_URL);
    curl_setopt($ch, CURLOPT_USERPWD, API_USERNAME.":".API_PASSWORD);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: $audioType",
        "Transfer-Encoding: chunked"
    ));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_INFILESIZE, $size);
    $json = @curl_exec($ch);
    return $json;
}
?>