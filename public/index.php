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
                        <div class="hero-image" style="background-image: url('https://images.unsplash.com/photo-1614052654441-0a70c430299a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2864&q=80')"></div>
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
        
            <div class="main">
                <section id="collection">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="card card-round card-collection">
                                    <img class="card-image card-image-rounded-top" src="https://images.unsplash.com/photo-1483181957632-8bda974cbc91?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">

                                    <div class="card-body">
                                        <h6 class="card-category text-danger">
                                            <i class="fa fa-tshirt"></i> Classy
                                        </h6>
                                        <h5 class="card-title text-primary">
                                            The Awesome Title
                                        </h5>
                                        <p class="card-description">
                                            Today is awesome day because we droped another dope collection and you wouldn't believe that we just did that.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card card-round card-collection">
                                    <img class="card-image card-image-rounded-top" src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=724&q=80">

                                    <div class="card-body">
                                        <h6 class="card-category text-danger">
                                            <i class="fa fa-tshirt"></i> Streetwear
                                        </h6>
                                        <h5 class="card-title text-primary">
                                            The Awesome Title
                                        </h5>
                                        <p class="card-description">
                                            Today is awesome day because we droped another dope collection and you wouldn't believe that we just did that.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="card card-round card-collection">
                                    <img class="card-image card-image-rounded-top" src="https://images.unsplash.com/photo-1485230895905-ec40ba36b9bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80">

                                    <div class="card-body">
                                        <h6 class="card-category text-danger">
                                            <i class="fa fa-tshirt"></i> Oversize
                                        </h6>
                                        <h5 class="card-title text-primary">
                                            The Awesome Title
                                        </h5>
                                        <p class="card-description">
                                            Today is awesome day because we droped another dope collection and you wouldn't believe that we just did that.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="featured">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 text-center mx-auto my-5">
                                <h1>Fresh New Featured Products</h1>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="card card-product card-plain">
                                    <img class="card-image" src="https://cdn.pixabay.com/photo/2016/12/06/09/31/blank-1886013_1280.png">
                                    <div class="card-body">
                                        <h5>This is Title</h5>
                                        <div class="card-footer d-flex justify-content-between">
                                            <div class="price-container">
                                                <span class="price">€ 300</span>
                                            </div>
                                            <button class="btn btn-round btn-icon-only btn-sm btn-danger">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card card-product card-plain">
                                    <img class="card-image" src="https://cdn.pixabay.com/photo/2017/02/15/11/42/t-shirt-2068353_1280.png">
                                    <div class="card-body">
                                        <h5>This is Title</h5>
                                        <div class="card-footer d-flex justify-content-between">
                                            <div class="price-container">
                                                <span class="price">€ 300</span>
                                            </div>
                                            <button class="btn btn-round btn-icon-only btn-sm btn-danger">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card card-product card-plain">
                                    <img class="card-image" src="https://cdn.pixabay.com/photo/2017/02/15/11/42/t-shirt-2068353_1280.png">
                                    <div class="card-body">
                                        <h5>This is Title</h5>
                                        <div class="card-footer d-flex justify-content-between">
                                            <div class="price-container">
                                                <span class="price">€ 300</span>
                                            </div>
                                            <button class="btn btn-round btn-icon-only btn-sm btn-danger">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card card-product card-plain">
                                    <img class="card-image" src="https://cdn.pixabay.com/photo/2017/02/15/11/42/t-shirt-2068353_1280.png">
                                    <div class="card-body">
                                        <h5>This is Title</h5>
                                        <div class="card-footer d-flex justify-content-between">
                                            <div class="price-container">
                                                <span class="price">€ 300</span>
                                            </div>
                                            <button class="btn btn-round btn-icon-only btn-sm btn-danger">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center mx-auto my-5">
                                <button class="btn btn-round btn-primary">
                                    See All Products
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="new-collections">
                    <div class="container">
                        <div class="mb-5 row">
                            <div class="col-md-7">
                                <div class="text-center">
                                    <h3>Our Fresh New Collections</h3>
                                    <p class="lead">The time is now for it to be okay to be great. People in this world shun people for being great.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card card-new-collection card-background" data-animation="zoom-in">
                                    <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1502716119720-b23a93e5fe1b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                                    <div class="card-body">
                                        <div class="content-bottom">
                                            <h5>Category</h5>
                                            <h4>The Title goes here but too long</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-new-collection card-background" data-animation="zoom-in">
                                    <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1483181957632-8bda974cbc91?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');"></div>
                                    <div class="card-body">
                                        <div class="content-bottom">
                                            <h5>Category</h5>
                                            <h4>The Title goes here</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-new-collection card-background" data-animation="zoom-in">
                                    <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1583039949243-e4119fa27a7d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTl8fGZhc2hpb258ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60');"></div>
                                    <div class="card-body">
                                        <div class="content-bottom">
                                            <h5>Category</h5>
                                            <h4>The Title goes here</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card card-new-collection card-background" data-animation="zoom-in">
                                    <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1499939667766-4afceb292d05?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1352&q=80');"></div>
                                    <div class="card-body">
                                        <div class="content-bottom">
                                            <h5>Category</h5>
                                            <h4>The Title goes here</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-new-collection card-background" data-animation="zoom-in">
                                    <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1577909248914-3ec194c10d74?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1352&q=80');"></div>
                                    <div class="card-body">
                                        <div class="content-bottom">
                                            <h5>Category</h5>
                                            <h4>The Title goes here</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="card card-new-collection card-background" data-animation="zoom-in">
                                    <div class="full-background" style="background-image: url('https://images.unsplash.com/photo-1577909687863-91bb3ec12db5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1352&q=80');"></div>
                                    <div class="card-body">
                                        <div class="content-bottom">
                                            <h5>Category</h5>
                                            <h4>The Title goes here</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <button class="btn btn-icon btn-primary mt-5" type="button">
                                    <span>Show More</span>
                                    <span><i class="fa fa-chevron-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="featured">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 text-center mx-auto my-5">
                                <h1>The Latest Accessories</h1>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-lg-3">
                                <div class="card card-product">
                                    <img class="card-image" src="https://cdn-s3.touchofmodern.com/products/001/879/282/a92cb759155e9b7b742eac0312773ac1_large.jpg?1592340997">
                                    <div class="card-body">
                                        <a href="#lala"><h5>This is Title</h5></a>
                                        <div class="card-footer">
                                            <div class="price-container">
                                                <span class="price">€ 300</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card card-product">
                                    <img class="card-image" src="https://cdn-s3.touchofmodern.com/products/001/879/282/a92cb759155e9b7b742eac0312773ac1_large.jpg?1592340997">
                                    <div class="card-body">
                                        <a href="#lala"><h5>This is Title</h5></a>
                                        <div class="card-footer">
                                            <div class="price-container">
                                                <span class="price">€ 300</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card card-product">
                                    <img class="card-image" src="https://cdn-s3.touchofmodern.com/products/001/879/282/a92cb759155e9b7b742eac0312773ac1_large.jpg?1592340997">
                                    <div class="card-body">
                                        <a href="#lala"><h5>This is Title</h5></a>
                                        <div class="card-footer">
                                            <div class="price-container">
                                                <span class="price-old">€ 300</span>
                                                <span class="price-new ml-1">€ 249</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card card-product">
                                    <img class="card-image" src="https://cdn-s3.touchofmodern.com/products/001/879/282/a92cb759155e9b7b742eac0312773ac1_large.jpg?1592340997">
                                    <div class="card-body">
                                        <a href="#lala"><h5>This is Title</h5></a>
                                        <div class="card-footer">
                                            <div class="price-container">
                                                <span class="price">€ 300</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center mx-auto mt-5">
                                <button class="btn btn-round btn-primary">
                                    See All Accessories
                                </button>
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
