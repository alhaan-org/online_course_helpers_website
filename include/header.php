<head>
    <?php
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Guaranteed Extra Credits with Best Online Course Help'; ?>
    </title>
    <meta name="description"
        content="<?php echo isset($pageDescription) ? $pageDescription : 'The most reliable online course help in USA to fast-track your route to extra credits. Hire professional online course helpers for timely submissions.' ?>">
    <meta property="og:title"
        content="<?php echo isset($pageTitle) ? $pageTitle : 'Guaranteed Extra Credits with Best Online Course Help'; ?>">
    <meta property="og:description"
        content="<?php echo isset($pageDescription) ? $pageDescription : 'The most reliable online course help in USA to fast-track your route to extra credits. Hire professional online course helpers for timely submissions.' ?>">
    <meta property="og:type" content="Website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:image" content="https://onlinecoursehelpers.com/assets/img/favicon.png">
    <meta name="theme-color" content="#002a4d">
    <link rel="canonical" href="<?php echo $current_url; ?>">
    <!-- Scripts and CSS Files -->
    <?php include 'head_links.php' ?>
</head>