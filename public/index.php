<?php

require_once __DIR__ . '/../bootstrap/init.php';
?>
<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- SEO -->
        <title><?php echo $_ENV['APP_NAME']; ?></title>
        <meta name="description" content="ecommvc is ecommerce mvc developed in php">

        <!-- URL CANONICAL -->
        <link rel="canonical" href="http://ecommvc.com/">
        <!-- CSS -->
        <link rel="stylesheet" type='text/css' media='all' href="../css/main.css?v=<?php echo microtime(); ?>">

        <!-- Optional - CSS SVG Icons (Font Awesome) -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!-- SOCIAL CARDS (ADD YOUR INFO) -->

        <!-- FACEBOOK -->
        <meta property="og:url" content="http://ecommvc.com/">
        <meta property="og:type" content="article">
        <meta property="og:title" content="ecommvc is ecommerce mvc developed in php">
        <meta property="og:description" content="ecommvc is ecommerce mvc developed in php">
        <meta property="og:updated_time" content="08.11.2019">
        <meta property="og:image" content="static/images/logo.png">

        <!-- TWITTER -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@ecommvc">
        <meta name="twitter:creator" content="@realKhani">
        <meta name="twitter:title" content="ecommvc is ecommerce mvc developed in php">
        <meta name="twitter:description" content="ecommvc is ecommerce mvc developed in php">
        <meta name="twitter:image" content="static/images/logo.png">

        <!-- FAVICONS -->
        <link rel="shortcut icon" sizes="16x16" href="static/images/favicons/favicon.png">
        <link rel="shortcut icon" sizes="32x32" href="static/images/favicons/favicon-32.png">
        <link rel="apple-touch-icon icon" sizes="76x76" href="static/images/favicons/favicon-76.png">
        <link rel="apple-touch-icon icon" sizes="120x120" href="static/images/favicons/favicon-120.png">
        <link rel="apple-touch-icon icon" sizes="152x152" href="static/images/favicons/favicon-152.png">
        <link rel="apple-touch-icon icon" sizes="180x180" href="static/images/favicons/favicon-180.png">
        <link rel="apple-touch-icon icon" sizes="192x192" href="static/images/favicons/favicon-192.png">

    </head>
    <body>
        <header id="header">
            <nav class="navbar">
                <div class="logo">ecommvc</div>
                <ul id="nav-list" class="nav-list">
                    <li>Home</li>
                    <li>About Us</li>
                    <li>Products</li>
                    <li>Contact Us</li>
                </ul>
                <div class="nav-btn">
                    <ul id="nav-btn-list" class="nav-list">
                        <li>Login</li>
                        <li>Cart</li>
                    </ul>
                </div>
                <div id="menu-btn" class="menu">
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                    <div class="menu-line"></div>
                </div>
            </nav>
        </header>

    <script src="../js/main.js"></script>
    </body>
</html>
