<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="utf-8">
    <title>flair </title>
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <link rel="stylesheet" type="text/css" href="<?php echo $base_url ?>assets/css/bootstrap.min.css" />
    <!-- Flipbook StyleSheet -->
    <link href="<?php echo $base_url ?>dflip/css/dflip.min.css" rel="stylesheet" type="text/css">

    <!-- Icons Stylesheet -->
    <link href="<?php echo $base_url ?>dflip/css/themify-icons.min.css" rel="stylesheet" type="text/css">

    <?php
    $url = "https://naseemhealthcare.com";
    $logo  = $base_url . "assets/images/nassem-medical-center-logo.png";
    $baseimage = $base_url . "assets";
    if ($dailyentrycampaigns["WebLinkId"] == 3) {
        $baseimage = $base_url . "premiusassets";
        $url = "https://premiumnaseem.com";
        $logo = "https://premiumnaseem.com/UploadedFiles/133453861562166345_logo.png";
    }
    if ($dailyentrycampaigns["WebLinkId"] == 2) {
        $url = "https://naseem.qa";
        $logo = "https://www.naseem.qa/images/naseem-al-rabeeh-medical-centre.svg";
    }
    if ($dailyentrycampaigns["WebLinkId"] == 4) {
        $url = "https://naseemdental.com";
        $logo = "https://www.naseemdental.com/images/logo.png";
    }

    ?>
</head>

<body>
    <!-- Header Start -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?php echo $url; ?>">
                    <img src="<?php echo $logo; ?>" />
                </a>

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <a href="<?php echo $url; ?>" target="_blank"><img
                            src="<?php echo $baseimage; ?>/images/web-link.png" alt="Naseem Medical Centre" />Visit
                        our website</a>
                </div> -->
            </div>
        </nav>
    </header>
    <!-- Header End -->

    <div class="container mb-5">

        <div class="row"> 
            <div class="col-xs-12" style="padding-bottom:30px">
                <!--Normal FLipbook-->
                <div class="_df_book" webgl="true" source="<?php echo $base_url ?>pdf/<?php echo $dailyentrycampaigns["PDF"] ?>" id="df_manual_book">
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery  -->
    <script src="<?php echo $base_url ?>dflip/js/libs/jquery.min.js" type="text/javascript"></script>
    <!-- Flipbook main Js file -->
    <script src="<?php echo $base_url ?>dflip/js/dflip.min.js" type="text/javascript"></script>

</body>

</html>