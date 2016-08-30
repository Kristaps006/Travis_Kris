<!DOCTYPE html>

<html lang="da">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/main.css">

    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5rL9EncVBEV5s3rmVvB6zTRmgo5bgNSw" type="text/javascript"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/includes/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/includes/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/main.js"></script>

    <title>BLUE RABBIT</title>

</head>

<body>

<div class="main-wrap container-fluid">

    <div class="top-bar row">

        <div class="container">

            <div class="row">

                <form class="navbar-form navbar-right search-form">

                    <div class="form-group search-input-container">

                        <input type="text" class="form-control search-input" placeholder="Search products">

                    </div>

                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>

                </form>

            </div>

        </div>

    </div>

    <header>

        <div class="row">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="logo-wrap pull-left">
                            <img src="<?php bloginfo('template_directory');?>/img/logo.png" alt="Logo">
                        </div>

                    </div>

                    <div class="col-lg-6 navigation-menu">

                        <div class="collapse navbar-collapse">

                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/index.php/shop/">Men</a></li>
                                        <li><a href="/index.php/shop/">Women</a></li>
                                        <li><a href="/index.php/shop/">Children</a></li>
                                        <li><a href="/index.php/shop/">Category4</a></li>
                                        <li><a href="/index.php/shop/">Category5</a></li>
                                    </ul>
                                </li>
                                <li><a href="/index.php/about/">About</a></li>
                                <li><a href="/index.php/contact/">Contact</a></li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>

    <section class="hero-slider-section row">

        <ul class="hero-slider">
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/img/slides/slide-1.jpg">
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/img/slides/slide-2.jpg">
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/img/slides/slide-3.jpg">
            </li>
        </ul>

    </section>

    <section class="quick-links-section">

        <div class="container">

            <div class="col-lg-12">

                <h2>Popular products</h2>

            </div>

        </div>

        <div class="container">

            <div class="row">

                <ul class="products">

                    <li class="product-item col-lg-3">

                        <div class="product col-lg-12">

                            <a href="/index.php/product/t-shirt/">

                                <img src="<?php bloginfo('template_directory'); ?>/img/placeholder-product.png" width="300" class="product-image" height="300">

                                <h3>T-shirt</h3>

                                        <span class="price">

                                            99,00 DKK

                                        </span>

                            </a>

                            <a href="#" class="button add_to_cart_button">Add to cart</a>

                        </div>

                    </li>

                    <li class="product-item col-lg-3">

                        <div class="product col-lg-12">

                            <a href="/index.php/product/t-shirt/">

                                <img src="<?php bloginfo('template_directory'); ?>/img/placeholder-product.png" width="300" class="product-image" height="300">

                                <h3>T-shirt</h3>

                                        <span class="price">

                                            99,00 DKK

                                        </span>

                            </a>

                            <a href="#" class="button add_to_cart_button">Add to cart</a>

                        </div>

                    </li>

                    <li class="product-item col-lg-3">

                        <div class="product col-lg-12">

                            <a href="/index.php/product/t-shirt/">

                                <img src="<?php bloginfo('template_directory'); ?>/img/placeholder-product.png" width="300" class="product-image" height="300">

                                <h3>T-shirt</h3>

                                        <span class="price">

                                            99,00 DKK

                                        </span>

                            </a>

                            <a href="#" class="button add_to_cart_button">Add to cart</a>

                        </div>

                    </li>

                    <li class="product-item col-lg-3">

                        <div class="product col-lg-12">

                            <a href="/index.php/product/t-shirt/">

                                <img src="<?php bloginfo('template_directory'); ?>/img/placeholder-product.png" width="300" class="product-image" height="300">

                                <h3>T-shirt</h3>

                                        <span class="price">

                                            99,00 DKK

                                        </span>

                            </a>

                            <a href="#" class="button add_to_cart_button">Add to cart</a>

                        </div>

                    </li>

                </ul>

            </div>

        </div>

    </section>

</div> <!--\\ End main-wrap //-->

<footer>

    <div class="container">

        <div class="col-lg-4">

            <ul>

                <li>
                    <a href="#">Men</a>
                </li>

                <li>
                    <a href="#">Women</a>
                </li>

                <li>
                    <a href="#">Children</a>
                </li>

                <li>
                    <a href="#">Category4</a>
                </li>

                <li>
                    <a href="#">Category5</a>
                </li>

            </ul>

        </div>

        <div class="col-lg-4">

            <ul>

                <li>
                    <a href="#">Shop</a>
                </li>

                <li>
                    <a href="#">About</a>
                </li>

                <li>
                    <a href="#">Contact</a>
                </li>

            </ul>

        </div>

        <div class="col-lg-4">

            <p>
                <strong>BLUE RABBIT</strong>
            </p>

            <p>
                Prags Boulevard 49E <br>

                DK-2300 <br>

                København S <br>

                <a href="#">info@html24.dk</a>

            </p>

        </div>

    </div>

</footer>

<div class="copyright">

    <div class="container">

        <div class="col-lg-12">

            © 2016 HTML24, All rights reserved

        </div>

    </div>

</div>

</body>
</html>
