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

    <!-- Theme JS files -->
    <script src="/admin/global_assets/js/plugins/media/fancybox.min.js"></script>
    <script src="/admin/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="/admin/global_assets/js/demo_pages/ecommerce_product_list.js"></script>
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

.content{
    margin-top: 60px;
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
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>


    <!-- Content area -->
    <div class="content">

        <!-- Inner container -->
        <div class="d-flex align-items-start flex-column flex-md-row">





            <!-- left sidebar component -->
            <div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-left border-0 shadow-0 sidebar-expand-md">

                <!-- Sidebar content -->
                <div class="sidebar-content">

                    <!-- Categories -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="#">
                                <div class="form-group form-group-feedback form-group-feedback-right">
                                    <input type="search" class="form-control" placeholder="Search">
                                    <div class="form-control-feedback">
                                        <i class="icon-search4 font-size-base text-muted"></i>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="card-body border-0 p-0">
                            <ul class="nav nav-sidebar mb-2">
                                <li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
                                    <a href="#" class="nav-link">Street wear</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="#" class="nav-link">Hoodies</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Jackets</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link active">Pants</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Shirts</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Sweaters</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Tank tops</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Underwear</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Snow wear</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="#" class="nav-link">Fleece jackets</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Gloves</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Ski jackets</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Ski pants</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Snowboard jackets</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Snowboard pants</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Technical underwear</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Shoes</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="#" class="nav-link">Laces</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Sandals</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Skate shoes</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Slip ons</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Sneakers</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Winter shoes</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item nav-item-submenu">
                                    <a href="#" class="nav-link">Accessories</a>
                                    <ul class="nav nav-group-sub">
                                        <li class="nav-item"><a href="#" class="nav-link">Beanies</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Belts</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Caps</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Sunglasses</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Headphones</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Video cameras</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Wallets</a></li>
                                        <li class="nav-item"><a href="#" class="nav-link">Watches</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /categories -->


                    <!-- Filters -->
                    <div class="card">
                        <div class="card-header bg-transparent header-elements-inline">
                            <span class="text-uppercase font-size-sm font-weight-semibold">Filter products</span>
                            <div class="header-elements">
                                <div class="list-icons">
                                    <a class="list-icons-item" data-action="collapse"></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="#">
                                <div class="form-group">
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="search" class="form-control" placeholder="Search brand">
                                        <div class="form-control-feedback">
                                            <i class="icon-search4 font-size-base text-muted"></i>
                                        </div>
                                    </div>

                                    <div class="overflow-auto" style="max-height: 192px;">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                686
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                A.Lab
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Adidas
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                ALIS
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Analog
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Burton
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Atomic
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Armada
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                O'Neill
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Baja
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Baker
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Blue Parks
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Billabong
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Bonfire
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-input-styled" data-fouc>
                                                Brixton
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="font-size-xs text-uppercase text-muted mb-3">Items for</div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Men
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Women
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Kids
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Unisex
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group mb-2">
                                    <div class="font-size-xs text-uppercase text-muted mb-3">Size</div>

                                    <div class="row row-labels">
                                        <div class="col-3">
                                            <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXS</a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XS</a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">S</a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#" class="badge badge-flat border-warning text-warning-800 d-flex justify-content-center p-2 mb-2">M</a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">L</a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XL</a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXL</a>
                                        </div>
                                        <div class="col-3">
                                            <a href="#" class="badge badge-flat border-grey text-grey-800 d-flex justify-content-center p-2 mb-2">XXXL</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="font-size-xs text-uppercase text-muted mb-3">Fit</div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Slim fit
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Skinny fit
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Regular fit
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Loose fit
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Long cut
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="font-size-xs text-uppercase text-muted mb-3">Color</div>

                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mb-2">
                                                <a href="#" class="d-block p-2 bg-primary rounded"><div class="py-1"></div></a>
                                                <div class="font-size-sm text-center text-muted mt-1">Blue</div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-2">
                                                <a href="#" class="d-block p-2 bg-warning rounded"><div class="py-1"></div></a>
                                                <div class="font-size-sm text-center text-muted mt-1">Orange</div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-2">
                                                <a href="#" class="d-block p-2 bg-teal rounded"><div class="py-1"></div></a>
                                                <div class="font-size-sm text-center text-muted mt-1">Teal</div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-2">
                                                <a href="#" class="d-block p-2 bg-pink rounded color-selector-active">
                                                    <div class="py-1"></div>
                                                    <i class="icon-checkmark3"></i>
                                                </a>
                                                <div class="font-size-sm text-center text-muted mt-1">Pink</div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-2">
                                                <a href="#" class="d-block p-2 bg-grey-800 rounded"><div class="py-1"></div></a>
                                                <div class="font-size-sm text-center text-muted mt-1">Black</div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-2">
                                                <a href="#" class="d-block p-2 bg-purple rounded"><div class="py-1"></div></a>
                                                <div class="font-size-sm text-center text-muted mt-1">Purple</div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-2">
                                                <a href="#" class="d-block p-2 bg-success rounded"><div class="py-1"></div></a>
                                                <div class="font-size-sm text-center text-muted mt-1">Green</div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-2">
                                                <a href="#" class="d-block p-2 bg-danger rounded"><div class="py-1"></div></a>
                                                <div class="font-size-sm text-center text-muted mt-1">Red</div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-2">
                                                <a href="#" class="d-block p-2 bg-info rounded"><div class="py-1"></div></a>
                                                <div class="font-size-sm text-center text-muted mt-1">Cyan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="font-size-xs text-uppercase text-muted mb-3">Features</div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Crew neck
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Chest pocket
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Raglan sleeves
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Polo neck
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            V-neck
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            High collar
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Hood
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Button strip
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Wide neck
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Kangaroo pocket
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="font-size-xs text-uppercase text-muted mb-3">Material features</div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Canvas
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Lined
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Merino
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Quick drying
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Stretch
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Water repellent
                                        </label>
                                    </div>

                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-input-styled" data-fouc>
                                            Windproof
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn bg-blue btn-block">Filter</button>
                            </form>
                        </div>
                    </div>
                    <!-- /filters -->

                </div>
                <!-- /sidebar content -->

            </div>
            <!-- /left sidebar component -->



                <!-- Right content -->
                <div class="w-100 overflow-auto order-2 order-md-1">

                    <!-- Grid -->
                    <div class="row">
                        @foreach($courses as $course)
                            <a href="{{route('sites.show',$course->id)}}">
                                <div class="col-xl-3 col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-img-actions">
                                                <img src="/storage/{{$course->image}}" class="card-img" width="96" height="200" alt="{{$course->image}}">
                                            </div>
                                        </div>

                                        <div class="card-body bg-light text-center">
                                            <div class="mb-2">
                                                <h6 class="font-weight-semibold mb-0">
                                                    <a href="#" class="text-default">{{$course->en_name}}</a>
                                                </h6>

                                                <a href="#" class="text-muted">{{$course->en_descr}}</a>
                                            </div>

                                            <h3 class="mb-0 font-weight-semibold">${{$course->price}}</h3>

                                            <div>
                                                <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                                <i class="icon-star-full2 font-size-base text-warning-300"></i>
                                            </div>

                                            <div class="text-muted mb-3">85 reviews</div>
                                            <div class="text-muted mb-3">
                                                @if($course->is_active=="1")
                                                    <span class="badge badge-success">{{$course->active_string}}</span>
                                                @else
                                                    <span class="badge badge-danger">{{$course->active_string}}</span>
                                                @endif
                                            </div>

                                             <a href="#mini-cart-wrapper{{$course->id}}" class="btn bg-teal-400"><i class="icon-cart-add mr-2"></i> Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>


                    <!-- /grid -->


                    <!-- Pagination -->
                    <div class="d-flex justify-content-center pt-3 mb-3">
                        <ul class="pagination">
                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-right"></i></a></li>
                            <li class="page-item active"><a href="#" class="page-link">1</a></li>
                            <li class="page-item"><a href="#" class="page-link">2</a></li>
                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                            <li class="page-item"><a href="#" class="page-link">4</a></li>
                            <li class="page-item"><a href="#" class="page-link">5</a></li>
                            <li class="page-item"><a href="#" class="page-link"><i class="icon-arrow-small-left"></i></a></li>
                        </ul>
                    </div>
                    <!-- /pagination -->

                </div>
                <!-- /Right content -->



        </div>
        <!-- /inner container -->

    </div>
    <!-- /content area -->




<!-- Mini Cart -->
<div class="mini-cart-wrapper" id="#mini-cart-wrapper{{$course->id}}">
    <div class="mini-cart">
        <div class="mini-cart-header">
            YOUR CART
            <button type="button" class="button ion ion-md-close" id="mini-cart-close"></button>
        </div>



        <ul class="mini-cart-list">
            <li class="clearfix">
                <a href="single-product.html">
                    <img src="/storage/{{$course->image}}" alt="/storage/{{$course->image}}">
                    <span class="mini-item-name">{{$course->en_name}}</span>
                    <span class="mini-item-price">${{$course->price}}</span>
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
