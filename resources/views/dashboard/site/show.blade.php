
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>A Coursing</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="/admin/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="/admin/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="/admin/global_assets/js/main/jquery.min.js"></script>
    <script src="/admin/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="/admin/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="/admin/global_assets/js/plugins/ui/prism.min.js"></script>

    <script src="/admin/assets/js/app.js"></script>
    <!-- /theme JS files -->







    <!-- Base Google Font for Web-app -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <!-- Google Fonts for Banners only -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,800" rel="stylesheet">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="/admin-2/css/bootstrap.min.css">
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="/admin-2/css/fontawesome.min.css">
    <!-- Ion-Icons 4 -->
    <link rel="stylesheet" href="/admin-2/css/ionicons.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/admin-2/css/animate.min.css">
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="/admin-2/css/owl.carousel.min.css">
    <!-- Jquery-Ui-Range-Slider -->
    <link rel="stylesheet" href="/admin-2/css/jquery-ui-range-slider.min.css">
    <!-- Utility -->
    <link rel="stylesheet" href="/admin-2/css/utility.css">
    <!-- Main -->
    <link rel="stylesheet" href="/admin-2/css/bundle.css">
<style>

    /*--------------------------------------------------------------
    # Header
    --------------------------------------------------------------*/
    #header {
        height: 60px;
        transition: all 0.5s;
        z-index: 997;
        transition: all 0.5s;
        background-color: #11698e;
    }

    #header.header-scrolled {
        background: #11698e;
        height: 60px;
    }
    #header .logo h1 {
        font-size: 28px;
        font-family: 'Pacifico', cursive;
        margin: 0;
        padding: 0;
        line-height: 1;
        font-weight: 700;
    }

    #header .logo h1 a, #header .logo h1 a:hover {
        color: #fff;
        text-decoration: none;
    }
    #header .logo img {
        padding: 0;
        margin: 0;
        max-height: 40px;
    }

    /*--------------------------------------------------------------
    # Navigation Menu
    --------------------------------------------------------------*/
    /**
    * Desktop Navigation
    */
    .navbar {
        padding: 0;
    }
    .navbar ul {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
        align-items: center;
    }
    .navbar li {
        position: relative;
    }
    .navbar a, .navbar a:focus {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0 10px 30px;
        font-size: 15px;
        font-weight: 500;
        font-family: "Poppins", sans-serif;
        color: rgba(255, 255, 255, 0.7);
        white-space: nowrap;
        transition: 0.3s;
    }
    .navbar a i, .navbar a:focus i {
        font-size: 25px;
        line-height: 0;
        margin-left: 5px;
        color: white;
    }
    .navbar > ul > li > a:before {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 3px;
        left: 30px;
        background-color: #1acc8d;
        visibility: hidden;
        width: 0px;
        transition: all 0.3s ease-in-out 0s;
    }
    .navbar a:hover:before, .navbar li:hover > a:before, .navbar .active:before {
        visibility: visible;
        width: 25px;
    }
    .navbar a:hover, .navbar .active, .navbar .active:focus, .navbar li:hover > a {
        color: #fff;
    }


    /**
    * Mobile Navigation
    */
    .mobile-nav-toggle {
        color: #fff;
        font-size: 28px;
        cursor: pointer;
        display: none;
        line-height: 0;
        transition: 0.5s;
    }

    @media (max-width: 991px) {
        .mobile-nav-toggle {
            display: block;
        }

        .navbar ul {
            display: none;
        }
    }
    .navbar-mobile {
        position: fixed;
        overflow: hidden;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background: #11698e;
        transition: 0.3s;
        z-index: 999;
    }
    .navbar-mobile .mobile-nav-toggle {
        position: absolute;
        top: 15px;
        right: 15px;
        text-align: center;
    }
    .navbar-mobile ul {
        display: block;
        position: absolute;
        top: 55px;
        right: 15px;
        bottom: 15px;
        left: 15px;
        padding: 10px 0;
        border-radius: 8px;
        background-color: #fff;
        overflow-y: auto;
        transition: 0.3s;
    }
    .navbar-mobile > ul > li > a:before {
        left: 20px;
    }
    .navbar-mobile a, .navbar-mobile a:focus {
        padding: 15px 20px;
        font-size: 15px;
        color: #11698e;
    }
    .navbar-mobile a:hover, .navbar-mobile .active, .navbar-mobile li:hover > a {
        color: #168bbd;
    }
    .navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
        margin: 15px;
    }


    .item-counter {
    font-size: 12px;
    line-height: 20px;
    width: 20px;
    left: 17px;
    top: -2px;

    }
</style>

</head>
<body>




<header id="header" class="fixed-top d-flex align-items-center" dir="ltr">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="navbar-brand">
            <a href="{{route('sites.index')}}" class="d-inline-block">
                <img src="/admin/images/logo_light.png" alt="">
            </a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{route('sites.index')}}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="#features">Features</a></li>
                <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li>
                    <a id="mini-cart-trigger" class="nav-link">
                        <i class="ion ion-md-basket"></i>
                        <span class="item-counter">4</span>
{{--                        <span class="item-price">$220.00</span>--}}
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>




<div class="page-detail u-s-p-t-80" style="margin-top: 100px">
    <div class="container">
        <!-- Product-Detail -->
        <div class="row">


            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- Product-details -->
                <div class="all-information-wrapper">
                    <div class="section-1-title-breadcrumb-rating">
                        <div class="product-title">
                            <h1>
                                <a href="{{route('sites.show',$course->id)}}">{{$course->en_name}}</a>
                            </h1>
                        </div>
                        <ul class="bread-crumb">
                            <li class="has-separator">
                                <a href="home.html">Home</a>
                            </li>
                            <li class="has-separator">
                                <a href="shop-v1-root-category.html">Men's Clothing</a>
                            </li>
                            <li class="has-separator">
                                <a href="shop-v2-sub-category.html">Tops</a>
                            </li>
                            <li class="is-marked">
                                <a href="shop-v3-sub-sub-category.html">Hoodies</a>
                            </li>
                        </ul>
                        <div class="product-rating">
                            <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                <span style='width:67px'></span>
                            </div>
                            <span>(23)</span>
                        </div>
                    </div>
                    <div class="section-2-short-description u-s-p-y-14">
                        <h6 class="information-heading u-s-m-b-8">Description:</h6>
                        <p>
                            {{$course->en_descr}}
                        </p>
                    </div>
                    <div class="section-3-price-original-discount u-s-p-y-14">
                        <div class="price">
                            <h4>${{$course->price}}</h4>
                        </div>
                    </div>

                    <div class="section-6-social-media-quantity-actions u-s-p-y-14">
                        <form action="#" class="post-form">
                            <div class="quick-social-media-wrapper u-s-m-b-22">
                                <span>Share:</span>
                                <ul class="social-media-list">
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-rss"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-pinterest"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="quantity-wrapper u-s-m-b-22">
                                <span>Quantity:</span>
                                <div class="quantity">
                                    <input type="text" class="quantity-text-field" value="1">
                                    <a class="plus-a" data-max="1000">&#43;</a>
                                    <a class="minus-a" data-min="1">&#45;</a>
                                </div>
                            </div>
                            <div>
                                <button class="button button-outline-secondary far fa-heart u-s-m-l-6"></button>
                                <button class="button button-outline-secondary far fa-envelope u-s-m-l-6"></button>
                            </div>
                            <div class="mt-3">
                                <button class="button button-outline-secondary" type="submit">Add to cart</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Product-details /- -->
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <!-- Product-zoom-area -->
                <div class="zoom-area">
                    <img id="zoom-pro" class="img-fluid" src="/storage/{{$course->image}}" data-zoom-image="/storage/{{$course->image}}" height="1600" width="1600" alt="Zoom Image">
                    <div id="gallery" class="u-s-m-t-10">
                        <a class="active" data-image="/storage/{{$course->image}}" data-zoom-image="/storage/{{$course->image}}">
                            <img src="/storage/{{$course->image}}" alt="/storage/{{$course->image}}">
                        </a>
                        <a data-image="/storage/{{$course->image}}" data-zoom-image="/storage/{{$course->image}}">
                            <img src="/storage/{{$course->image}}" alt="/storage/{{$course->image}}">
                        </a>
                        <a data-image="/storage/{{$course->image}}" data-zoom-image="/storage/{{$course->image}}">
                            <img src="/storage/{{$course->image}}" alt="/storage/{{$course->image}}">
                        </a>
                        <a data-image="/storage/{{$course->image}}" data-zoom-image="/storage/{{$course->image}}">
                            <img src="/storage/{{$course->image}}" alt="/storage/{{$course->image}}">
                        </a>
                        <a data-image="/storage/{{$course->image}}" data-zoom-image="/storage/{{$course->image}}">
                            <img src="/storage/{{$course->image}}" alt="/storage/{{$course->image}}">
                        </a>
                        <a data-image="/storage/{{$course->image}}" data-zoom-image="/storage/{{$course->image}}">
                            <img src="/storage/{{$course->image}}" alt="/storage/{{$course->image}}">
                        </a>

                    </div>
                </div>
                <!-- Product-zoom-area /- -->
            </div>


        </div>

    </div>
</div>




<!-- Mini Cart -->
<div class="mini-cart-wrapper">
    <div class="mini-cart">
        <div class="mini-cart-header">
            YOUR CART
            <button type="button" class="button ion ion-md-close" id="mini-cart-close"></button>
        </div>
        <ul class="mini-cart-list">
            <li class="clearfix">
                <a href="single-product.html">
                    <img src="images/product/product@1x.jpg" alt="Product">
                    <span class="mini-item-name">Casual Hoodie Full Cotton</span>
                    <span class="mini-item-price">$55.00</span>
                    <span class="mini-item-quantity"> x 1 </span>
                </a>
            </li>
            <li class="clearfix">
                <a href="single-product.html">
                    <img src="images/product/product@1x.jpg" alt="Product">
                    <span class="mini-item-name">Black Rock Dress with High Jewelery Necklace</span>
                    <span class="mini-item-price">$55.00</span>
                    <span class="mini-item-quantity"> x 1 </span>
                </a>
            </li>
            <li class="clearfix">
                <a href="single-product.html">
                    <img src="images/product/product@1x.jpg" alt="Product">
                    <span class="mini-item-name">Xiaomi Note 2 Black Color</span>
                    <span class="mini-item-price">$55.00</span>
                    <span class="mini-item-quantity"> x 1 </span>
                </a>
            </li>
            <li class="clearfix">
                <a href="single-product.html">
                    <img src="images/product/product@1x.jpg" alt="Product">
                    <span class="mini-item-name">Dell Inspiron 15</span>
                    <span class="mini-item-price">$55.00</span>
                    <span class="mini-item-quantity"> x 1 </span>
                </a>
            </li>
        </ul>
        <div class="mini-shop-total clearfix">
            <span class="mini-total-heading float-left">Total:</span>
            <span class="mini-total-price float-right">$220.00</span>
        </div>
        <div class="mini-action-anchors">
            <a href="cart.html" class="cart-anchor">View Cart</a>
            <a href="checkout.html" class="checkout-anchor">Checkout</a>
        </div>
    </div>
</div>
<!-- Mini Cart /- -->



<!-- Modernizr-JS -->
<script type="text/javascript" src="/admin-2/js/vendor/modernizr-custom.min.js"></script>
<!-- NProgress -->
<script type="text/javascript" src="/admin-2/js/nprogress.min.js"></script>
<!-- jQuery -->
<script type="text/javascript" src="/admin-2/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Popper -->
<script type="text/javascript" src="/admin-2/js/popper.min.js"></script>
<!-- ScrollUp -->
<script type="text/javascript" src="/admin-2/js/jquery.scrollUp.min.js"></script>
<!-- Elevate Zoom -->
<script type="text/javascript" src="/admin-2/js/jquery.elevatezoom.min.js"></script>
<!-- jquery-ui-range-slider -->
<script type="text/javascript" src="/admin-2/js/jquery-ui.range-slider.min.js"></script>
<!-- jQuery Slim-Scroll -->
<script type="text/javascript" src="/admin-2/js/jquery.slimscroll.min.js"></script>
<!-- jQuery Resize-Select -->
<script type="text/javascript" src="/admin-2/js/jquery.resize-select.min.js"></script>
<!-- jQuery Custom Mega Menu -->
<script type="text/javascript" src="/admin-2/js/jquery.custom-megamenu.min.js"></script>
<!-- jQuery Countdown -->
<script type="text/javascript" src="/admin-2/js/jquery.custom-countdown.min.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="/admin-2/js/owl.carousel.min.js"></script>
<!-- Main -->
<script type="text/javascript" src="/admin-2/js/app.js"></script>


</body>
</html>
