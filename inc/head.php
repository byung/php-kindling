<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title><?=$title?> | Fres-Co System USA, Inc.</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="<?=$description?>">

        <meta content="Fres-Co System USA, Inc." property="og:site_name" />
        <meta content="<?=$title?>" property="og:title" />
        <meta content="icons/og-1200x600.png" property="og:image" />
        <meta content="<?php echo $url; ?>" property="og:url" />
        <meta content="<?php echo $description; ?>" property="og:description">
        <meta content="website" property="og:type" />

        <meta content="<?php echo $url; ?>" name="twitter:url" />
        <meta content="<?=$title?> | Fres-Co System USA, Inc." name="twitter:title" />

        <!--Icons-->

        <!--Fonts-->

        <link rel="stylesheet" href="<?=$path?>css/main.css">
        <script src="<?=$path?>js/vendor/modernizr-2.6.2.min.js"></script>

    </head>
    <body<?php if(isset($page)) echo ' class="'.$class.'"'; ?>>

        <!--Header-->
        <header class="main">
            <div class="container">
                <h1 id="site-logo"><a href="/"><?php bloginfo('name'); ?></a></h1>
            </div>
        </header>
        
        <!--Main Navigation-->
        <nav class="main" role="navigation">
            <div class="container">
                
            </div>
        </nav>