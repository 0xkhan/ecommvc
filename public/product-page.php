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
    <body data-page-id="global"><!--@yield('data-page-id')-->
        <header id="header">
            <nav class="navbar">
                <div class="logo">ecommvc</div>
                <div class="nav-global">
                    <div class="nav-global-header">
                        <div class="row">
                            <div class="col-md-2">
                                <a class="nav-gh-logo" href="#">
                                    <strong>ecommvc</strong>
                                </a>
                            </div>
                            <div class="col-md-10">
                                <div class="nav-gh-btn text-center">
                                    <ul class="nav-gh-btn-list">
                                        <li class="nav-gh-btn-login">Login</li>
                                        <li class="nav-gh-btn-cart">Cart</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul id="nav-list" class="nav-list">
                        <li class="dropdown nav-item">Home</li>
                        <li class="dropdown nav-item">
                            <span class="nav-link-inner-text">About Us</span>
                            <div class="dropdown-menu" tabindex="-1" role="menu">
                                <a class="dropdown-item" role="menuitem" href="/">
                                    <i class="fa fa-times text-info"></i>
                                    Not About
                                </a>
                                <a class="dropdown-item" role="menuitem" href="/">
                                    <i class="fa fa-pen text-danger"></i>
                                    Pen
                                </a>
                                <a class="dropdown-item" role="menuitem" href="/">
                                    <i class="fa fa-comment text-primary"></i>
                                    Testimonials
                                </a>
                                <a class="dropdown-item" role="menuitem" href="/">
                                    <i class="fa fa-tshirt text-purple"></i>
                                    T-Shirt
                                </a>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <span class="nav-link-inner-text">Products</span>
                            <div class="dropdown-menu" tabindex="-1" role="menu">
                                <a class="dropdown-item" role="menuitem" href="/">
                                    <i class="fa fa-user text-info"></i>
                                    User
                                </a>
                                <a class="dropdown-item" role="menuitem" href="/">
                                    <i class="fa fa-clock text-danger"></i>
                                    Clock
                                </a>
                                <a class="dropdown-item" role="menuitem" href="/">
                                    <i class="fa fa-comment text-primary"></i>
                                    Testimonials
                                </a>
                                <a class="dropdown-item" role="menuitem" href="/">
                                    <i class="fa fa-tshirt text-purple"></i>
                                    T-Shirt
                                </a>
                            </div>
                        </li>
                        <li class="dropdown nav-item">Contact Us</li>
                    </ul>
                </div>
                <div class="nav-btn">
                    <ul class="nav-btn-list">
                        <li class="nav-btn-login">Login</li>
                        <li class="nav-btn-cart">Cart</li>
                    </ul>
                </div>
                <div id="menu-btn" class="menu">
                    <i class="fa fa-bars"></i>
                </div>
            </nav>
        </header>
        <main>
            <section id="hero">
                <div class="container-fluid">
                    <div class="page-header header-filter page-header-small skew-separator">
                        <div class="hero-image" style="background-image: url('https://miro.medium.com/max/5200/0*-b_7Qblbxmq4z_9n.jpeg')"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6 col-lg-6 d-flex flex-center page-header-content">
                                    <div class="text-center">
                                        <h1 class="title text-white">See Our Latest Collections!</h1>
                                        <a class="header-cart-btn text-white" href="#">
                                            <i class="fa fa-shopping-cart shopping-cart-icon"></i>
                                            <span class="hcb-text">Shop Now!</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <div class="product-wrapper">
                <section id="product" class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product-image">
                                    <img src="https://cdn-s3.touchofmodern.com/products/001/879/282/a92cb759155e9b7b742eac0312773ac1_large.jpg?1592340997">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-6">
                                <h2>This is the products title!</h2>
                                <br>
                                <h2>3000 €</h2>
                                <h5>Description</h5>
                                <p class="description">
                                    Eres' daring 'Grigri Fortune' swimsuit has the fit and coverage of a
                                    bikini in a one-piece silhouette. This fuchsia style is crafted from the
                                    label's sculpting peau douce fabric and has flattering cutouts through
                                    the torso and back. Wear yours with mirrored sunglasses on vacation.
                                </p>
                                <br>
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <label>Quantity</label>
                                        <h4>Coming Soon!</h4>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <label>Select Color</label>
                                        <h4>Coming Soon!</h4>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-lg-4">
                                        <label>Select Size</label>
                                        <h4>Coming Soon!</h4>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button class="btn btn-primary">
                                            Add To Cart
                                            <i class="fa fa-shopping-cart ml-5"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="related" class="skew-separator skew-top">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <h2>You May Like These Too</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="product-image">
                                        <img src="https://cdn-s3.touchofmodern.com/products/001/879/282/a92cb759155e9b7b742eac0312773ac1_large.jpg?1592340997">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-category text-warning">Summer</h5>
                                        <h4 class="title">This is the title</h4>
                                        <div class="card-description">
                                            <p>Dolce & Gabbana's 'Greta' tote has been crafted in Italy from
                                                hard-wearing red textured-leather.</p>
                                        </div>
                                        <div class="d-flex justify-content-between card-footer">
                                            <div class="price-container">
                                                <span class="price">300 €</span>
                                            </div>
                                            <button class="btn btn-round btn-icon-only btn-sm btn-danger">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="product-image">
                                        <img src="https://cdn-s3.touchofmodern.com/products/001/879/282/a92cb759155e9b7b742eac0312773ac1_large.jpg?1592340997">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-category text-warning">Summer</h5>
                                        <h4 class="title">This is the title</h4>
                                        <div class="card-description">
                                            <p>Dolce & Gabbana's 'Greta' tote has been crafted in Italy from
                                                hard-wearing red textured-leather.</p>
                                        </div>
                                        <div class="d-flex justify-content-between card-footer">
                                            <div class="price-container">
                                                <span class="price">300 €</span>
                                            </div>
                                            <button class="btn btn-round btn-icon-only btn-sm btn-danger">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="product-image">
                                        <img src="https://cdn-s3.touchofmodern.com/products/001/879/282/a92cb759155e9b7b742eac0312773ac1_large.jpg?1592340997">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-category text-warning">Summer</h5>
                                        <h4 class="title">This is the title</h4>
                                        <div class="card-description">
                                            <p>Dolce & Gabbana's 'Greta' tote has been crafted in Italy from
                                                hard-wearing red textured-leather.</p>
                                        </div>
                                        <div class="d-flex justify-content-between card-footer">
                                            <div class="price-container">
                                                <span class="price">300 €</span>
                                            </div>
                                            <button class="btn btn-round btn-icon-only btn-sm btn-danger">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="product-image">
                                        <img src="https://cdn-s3.touchofmodern.com/products/001/879/282/a92cb759155e9b7b742eac0312773ac1_large.jpg?1592340997">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-category text-warning">Summer</h5>
                                        <h4 class="title">This is the title</h4>
                                        <div class="card-description">
                                            <p>Dolce & Gabbana's 'Greta' tote has been crafted in Italy from
                                                hard-wearing red textured-leather.</p>
                                        </div>
                                        <div class="d-flex justify-content-between card-footer">
                                            <div class="price-container">
                                                <span class="price">300 €</span>
                                            </div>
                                            <button class="btn btn-round btn-icon-only btn-sm btn-danger">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="text-primary">Thank you for supporting us!</h3>
                        <h4 class="mb-0">Let's get in touch on any of these platforms.</h4>
                    </div>
                    <div class="text-center col-lg-6">
                        <button class="btn btn-icon-only btn-rounded-circle btn-lg btn-twitter">
                            <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
                        </button>
                        <button class="btn btn-icon-only btn-rounded-circle btn-lg btn-facebook">
                            <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                        </button>
                        <button class="btn btn-icon-only btn-rounded-circle btn-lg btn-dribble">
                            <span class="btn-inner--icon"><i class="fab fa-dribbble"></i></span>
                        </button>
                        <button class="btn btn-icon-only btn-rounded-circle btn-lg btn-github">
                            <span class="btn-inner--icon"><i class="fab fa-github"></i></span>
                        </button>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy; <?php echo date('Y'); ?>
                            <a href="#ecommvc">Ecommvc</a>.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="nav-footer nav">
                            <ul>
                                <li class="nav-item">Home</li>
                                <li class="nav-item">About Us</li>
                                <li class="nav-item">Shop</li>
                                <li class="nav-item">Men</li>
                                <li class="nav-item">Women</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    <script src="../js/main.js"></script>
    </body>
</html>
