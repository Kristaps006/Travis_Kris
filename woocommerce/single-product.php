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


    <section class="breadcrumb-wrap row clearfix">

    <div class="container">

        <nav>
            <a href="/">Home</a>&nbsp;/&nbsp;T-shirt
        </nav>

    </div>

</section>

<section class="single-product-section row product">

    <div class="container">

        <div class="row">

            <div class="product-content">

                <div class="col-lg-6">

                    <div class="images">

                        <img src="<?php bloginfo('template_directory');?>/img/placeholder-product.png" alt="Product image">

                    </div>

                </div>

                <div class="col-lg-6">

                    <h1 class="product_title">T-shirt</h1>

                    <p class="price">

                        <span class="amount">99,00 DKK</span>

                    </p>

                    <div class="product_description">

                        <p>Tamen a proposito, inquam, aberramus. Uterque enim summo bono fruitur, id est voluptate. Quorum sine causa fieri nihil putandum est. Illum mallem levares, quo optimum atque humanissimum virum, Cn.</p>
                    </div>


                    <form class="cart">

                        <div class="quantity">
                            <input type="number" step="1" min="1" name="quantity" value="1" class="input-text qty text">
                        </div>

                        <button type="submit" class="single_add_to_cart_button button alt">Add to cart</button>

                    </form>

                </div>

            </div>

        </div>

        <div class="product-tabs">

            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active">

                    <a href="#description" data-toggle="tab">Description</a>

                </li>

                <li role="presentation">

                    <a href="#review" data-toggle="tab">Reviews (0)</a>

                </li>

            </ul>
            
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="description">

                    <div id="comments">

                        <h2>Product Description</h2>

                        <p>Tamen a proposito, inquam, aberramus. Uterque enim summo bono fruitur, id est voluptate. Quorum sine causa fieri nihil putandum est. Illum mallem levares, quo optimum atque humanissimum virum, Cn. Aperiendum est igitur, quid sit voluptas; Ut optime, secundum naturam affectum esse possit.</p>
                        <ul>
                            <li>Quos nisi redarguimus, omnis virtus, omne decus, omnis vera laus deserenda est.</li>
                            <li>An est aliquid, quod te sua sponte delectet?</li>
                            <li>Tamen a proposito, inquam, aberramus.</li>
                        </ul>

                    </div>

                </div>

                <div role="tabpanel" class="tab-pane" id="review">

                    <div id="comments">
                        
                        <h2>Reviews</h2>
                        
                        <p class="woocommerce-noreviews">There are no reviews yet.</p>

                    </div>
                    
                    <div id="review_form_wrapper">

                        <div id="review_form">

                            <div id="respond" class="comment-respond">

                                <h3>Be the first to review “T-shirt”
                                    <small>
                                        <a rel="nofollow" id="cancel-comment-reply-link" href="#">Cancel reply</a>
                                    </small>
                                </h3>

                                <form class="comment-form">

                                    <p class="comment-form-rating">
                                        <label for="rating">Your Rating</label>
                                        <select name="rating" id="rating">
                                            <option value="">Rate…</option>
                                            <option value="5">Perfect</option>
                                            <option value="4">Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Not that bad</option>
                                            <option value="1">Very Poor</option>
                                        </select>
                                    </p>

                                    <p>
                                        <label for="comment">Your Review <span class="required">*</span></label>
                                    </p>

                                    <textarea id="comment" name="comment" cols="45" rows="8"></textarea>

                                    <p>
                                        <button name="submit" type="submit" class="submit button" id="submit">Submit</button>
                                    </p>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

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

