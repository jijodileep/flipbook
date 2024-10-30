<?php
require 'vendor/autoload.php';
Flight::route('/', function () {
    echo 'Invalid Route';
    //echo date('Y-m-d');
});
 
Flight::route('/details/@uuid', function ($uuid) {
    require 'config.php';
    $db->where("p.name", $uuid);
    $db->join("WebLinks u", "p.WebLinkId=u.Id", "LEFT");
    $dailyentrycampaigns = $db->getOne("FlipBooks p");

    $url = $banner . $dailyentrycampaigns["PDF"];

    // Path where you want to save the downloaded PDF
    $saveTo = "pdf/" . $dailyentrycampaigns["PDF"];
    if (file_exists($saveTo) != 1) {
        // Initialize cURL session
        $ch = curl_init($url);

        // Open file handler for writing
        $fh = fopen($saveTo, 'w');

        // Set cURL options
        curl_setopt($ch, CURLOPT_FILE, $fh);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        // Execute cURL session
        curl_exec($ch);

        // Close cURL session and file handler
        curl_close($ch);
        fclose($fh);
    }
    include 'views/flipbook.php';
}); 