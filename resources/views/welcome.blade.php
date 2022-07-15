<!DOCTYPE html>
<html class="no-js" lang="en">

<!-- belle/index.html   11 Nov 2019 12:16:10 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Friendly Ecommerce</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    <!-- Bootstap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="template-index belle template-index-belle">
    <div id="pre-loader">
        <img src="assets/images/loader.gif" alt="Loading..." />
    </div>
    <div class="pageWrapper">
        <!--Search Form Drawer-->
        <div class="search">
            <div class="search__form">
                <form class="search-bar__form" action="#">
                    <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
                    <input class="search__input" type="search" name="q" value=""
                        placeholder="Search entire store..." aria-label="Search" autocomplete="off">
                </form>
                <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
            </div>
        </div>
        <!--End Search Form Drawer-->
        <!--Top Header-->
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 col-sm-8 col-md-5 col-lg-4">
                        <div class="currency-picker">
                            <span class="selected-currency">NGN</span>
                            <ul id="currencies">
                                <li data-currency="INR" class="">INR</li>
                                <li data-currency="GBP" class="">GBP</li>
                                <li data-currency="CAD" class="">CAD</li>
                                <li data-currency="USD" class="selected">USD</li>
                                <li data-currency="AUD" class="">AUD</li>
                                <li data-currency="EUR" class="">EUR</li>
                                <li data-currency="JPY" class="">JPY</li>
                            </ul>
                        </div>
                        <div class="language-dropdown">
                            <span class="language-dd">English</span>
                            <ul id="language">
                                <li class="">German</li>
                                <li class="">French</li>
                            </ul>
                        </div>
                        <p class="phone-no"><i class="anm anm-phone-s"></i> +234 9064553734</p>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 d-none d-lg-none d-md-block d-lg-block">
                        <div class="text-center">
                            <p class="top-header_middle-text"> Worldwide Express Shipping</p>
                        </div>
                    </div>
                    <div class="col-2 col-sm-4 col-md-3 col-lg-4 text-right">
                        <span class="user-menu d-block d-lg-none"><i class="anm anm-user-al"
                                aria-hidden="true"></i></span>
                   
                        <ul class="customer-links list-inline">
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Create Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Top Header-->
        <!--Header-->
        <div class="header-wrap classicHeader animated d-flex">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!--Desktop Logo-->
                    <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                        <a href="index.html">
                            <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template"
                                title="Belle Multipurpose Html Template" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                        <div class="d-block d-lg-none">
                            <button type="button"
                                class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                                <i class="icon anm anm-times-l"></i>
                                <i class="anm anm-bars-r"></i>
                            </button>
                        </div>
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <!-- for mobile -->
                            <ul id="siteNav" class="site-nav medium center hidearrow">
                                <li class="lvl1 parent megamenu"><a href="#">Home <i
                                            class="anm anm-angle-down-l"></i></a>
                                    
                                </li>
                                <li class="lvl1 parent megamenu"><a href="#">Shop <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <div class="megamenu style4">
                                        <ul class="grid grid--uniform mmWrapper">
                                       
                                            <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                    class="site-nav lvl-1">Shop Features</a>
                                                <ul class="subLinks">
                                                    <li class="lvl-2"><a href="shop-left-sidebar.html"
                                                            class="site-nav lvl-2">Product Countdown <span
                                                                class="lbl nm_label3">Hot</span></a></li>
                                                    <li class="lvl-2"><a href="shop-right-sidebar.html"
                                                            class="site-nav lvl-2">Infinite Scrolling</a></li>
                                                    <li class="lvl-2"><a href="shop-grid-3.html"
                                                            class="site-nav lvl-2">Pagination - Classic</a></li>
                                                    <li class="lvl-2"><a href="shop-grid-6.html"
                                                            class="site-nav lvl-2">Pagination - Load More</a></li>
                                                    <li class="lvl-2"><a href="product-labels.html"
                                                            class="site-nav lvl-2">Dynamic Product Labels</a></li>
                                                    <li class="lvl-2"><a href="product-swatches-style.html"
                                                            class="site-nav lvl-2">Product Swatches <span
                                                                class="lbl nm_label2">Sale</span></a></li>
                                                    <li class="lvl-2"><a href="product-hover-info.html"
                                                            class="site-nav lvl-2">Product Hover Info</a></li>
                                                    <li class="lvl-2"><a href="shop-grid-3.html"
                                                            class="site-nav lvl-2">Product Reviews</a></li>
                                                    <li class="lvl-2"><a href="shop-left-sidebar.html"
                                                            class="site-nav lvl-2">Discount Label <span
                                                                class="lbl nm_label1">New</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="grid__item lvl-1 col-md-6 col-lg-6">
                                                <a href="#"><img src="assets/images/megamenu-bg1.jpg"
                                                        alt="" title="" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="#">Product <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <div class="megamenu style2">
                                        <ul class="grid mmWrapper">
                                            <li class="grid__item one-whole">
                                                <ul class="grid">
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1">Product Page</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="product-layout-1.html"
                                                                    class="site-nav lvl-2">Product Layout 1</a></li>
                                                            <li class="lvl-2"><a href="product-layout-2.html"
                                                                    class="site-nav lvl-2">Product Layout 2</a></li>
                                                            <li class="lvl-2"><a href="product-layout-3.html"
                                                                    class="site-nav lvl-2">Product Layout 3</a></li>
                                                            <li class="lvl-2"><a href="product-with-left-thumbs.html"
                                                                    class="site-nav lvl-2">Product With Left Thumbs</a>
                                                            </li>
                                                            <li class="lvl-2"><a
                                                                    href="product-with-right-thumbs.html"
                                                                    class="site-nav lvl-2">Product With Right
                                                                    Thumbs</a></li>
                                                            <li class="lvl-2"><a
                                                                    href="product-with-bottom-thumbs.html"
                                                                    class="site-nav lvl-2">Product With Bottom
                                                                    Thumbs</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1">Product Features</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="short-description.html"
                                                                    class="site-nav lvl-2">Short Description</a></li>
                                                            <li class="lvl-2"><a href="product-countdown.html"
                                                                    class="site-nav lvl-2">Product Countdown</a></li>
                                                            <li class="lvl-2"><a href="product-video.html"
                                                                    class="site-nav lvl-2">Product Video</a></li>
                                                            <li class="lvl-2"><a href="product-quantity-message.html"
                                                                    class="site-nav lvl-2">Product Quantity Message</a>
                                                            </li>
                                                            <li class="lvl-2"><a
                                                                    href="product-visitor-sold-count.html"
                                                                    class="site-nav lvl-2">Product Visitor/Sold Count
                                                                    <span class="lbl nm_label3">Hot</span></a></li>
                                                            <li class="lvl-2"><a href="product-zoom-lightbox.html"
                                                                    class="site-nav lvl-2">Product Zoom/Lightbox <span
                                                                        class="lbl nm_label1">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1">Product Features</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a
                                                                    href="product-with-variant-image.html"
                                                                    class="site-nav lvl-2">Product with Variant
                                                                    Image</a></li>
                                                            <li class="lvl-2"><a
                                                                    href="product-with-color-swatch.html"
                                                                    class="site-nav lvl-2">Product with Color
                                                                    Swatch</a></li>
                                                            <li class="lvl-2"><a
                                                                    href="product-with-image-swatch.html"
                                                                    class="site-nav lvl-2">Product with Image
                                                                    Swatch</a></li>
                                                            <li class="lvl-2"><a href="product-with-dropdown.html"
                                                                    class="site-nav lvl-2">Product with Dropdown</a>
                                                            </li>
                                                            <li class="lvl-2"><a
                                                                    href="product-with-rounded-square.html"
                                                                    class="site-nav lvl-2">Product with Rounded
                                                                    Square</a></li>
                                                            <li class="lvl-2"><a href="swatches-style.html"
                                                                    class="site-nav lvl-2">Product Swatches All
                                                                    Style</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="grid__item lvl-1 col-md-3 col-lg-3"><a href="#"
                                                            class="site-nav lvl-1">Product Features</a>
                                                        <ul class="subLinks">
                                                            <li class="lvl-2"><a href="product-accordion.html"
                                                                    class="site-nav lvl-2">Product Accordion</a></li>
                                                            <li class="lvl-2"><a href="product-pre-orders.html"
                                                                    class="site-nav lvl-2">Product Pre-orders <span
                                                                        class="lbl nm_label1">New</span></a></li>
                                                            <li class="lvl-2"><a href="product-labels-detail.html"
                                                                    class="site-nav lvl-2">Product Labels</a></li>
                                                            <li class="lvl-2"><a href="product-discount.html"
                                                                    class="site-nav lvl-2">Product Discount In %</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="product-shipping-message.html"
                                                                    class="site-nav lvl-2">Product Shipping Message</a>
                                                            </li>
                                                            <li class="lvl-2"><a href="size-guide.html"
                                                                    class="site-nav lvl-2">Size Guide <span
                                                                        class="lbl nm_label1">New</span></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="grid__item large-up--one-whole imageCol"><a href="#"><img
                                                        src="assets/images/megamenu-bg2.jpg" alt=""></a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">Pages <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="cart-variant1.html" class="site-nav">Cart Page <i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a>
                                                </li>
                                                <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="compare-variant1.html" class="site-nav">Compare Product <i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="compare-variant1.html" class="site-nav">Compare
                                                        Variant1</a></li>
                                                <li><a href="compare-variant2.html" class="site-nav">Compare
                                                        Variant2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                                        <li><a href="about-us.html" class="site-nav">About Us <span
                                                    class="lbl nm_label1">New</span> </a></li>
                                        <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                                        <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                                        <li><a href="lookbook1.html" class="site-nav">Lookbook<i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul>
                                                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                                                <li><a href="lookbook2.html" class="site-nav">Style 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="404.html" class="site-nav">404</a></li>
                                        <li><a href="coming-soon.html" class="site-nav">Coming soon <span
                                                    class="lbl nm_label1">New</span> </a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">Blog <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                                        <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                                        <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
                                        <li><a href="blog-article.html" class="site-nav">Article</a></li>
                                    </ul>
                                </li>
                                <li class="lvl1"><a href="#"><b>Buy Now!</b> <i
                                            class="anm anm-angle-down-l"></i></a></li>
                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo.svg" alt="Belle Multipurpose Html Template"
                                    title="Belle Multipurpose Html Template" />
                            </a>
                        </div>
                    </div>
                    <!--Mobile Logo-->
                    <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                        <div class="site-cart">
                            <a href="#;" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count"
                                    data-cart-render="item_count">7</span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/product-images/cape-dress-1.jpg"
                                                alt="3/4 Sleeve Kimono Dress" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit"
                                                    aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                            <div class="variant-cart">Black / XL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity"
                                                        value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$59.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item">
                                        <a class="product-image" href="#">
                                            <img src="assets/images/product-images/cape-dress-2.jpg"
                                                alt="Elastic Waist Dress - Black / Small" title="" />
                                        </a>
                                        <div class="product-details">
                                            <a href="#" class="remove"><i class="anm anm-times-l"
                                                    aria-hidden="true"></i></a>
                                            <a href="#" class="edit-i remove"><i class="anm anm-edit"
                                                    aria-hidden="true"></i></a>
                                            <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                            <div class="variant-cart">Gray / XXL</div>
                                            <div class="wrapQtyBtn">
                                                <div class="qtyField">
                                                    <span class="label">Qty:</span>
                                                    <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                            class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                                    <input type="text" id="Quantity" name="quantity"
                                                        value="1" class="product-form__input qty">
                                                    <a class="qtyBtn plus" href="javascript:void(0);"><i
                                                            class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="priceRow">
                                                <div class="product-price">
                                                    <span class="money">$99.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span
                                                class="money">$748.00</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                        <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                                    </div>
                                </div>
                            </div>
                            <!--EndMinicart Popup-->
                        </div>
                        <div class="site-header__search">
                            <button type="button" class="search-trigger"><i
                                    class="icon anm anm-search-l"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="index.html">Home <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">Home Group 1<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="index.html" class="site-nav">Home 1 - Classic</a></li>
                                <li><a href="home2-default.html" class="site-nav">Home 2 - Default</a></li>
                                <li><a href="home15-funiture.html" class="site-nav">Home 15 - Furniture </a></li>
                                <li><a href="home3-boxed.html" class="site-nav">Home 3 - Boxed</a></li>
                                <li><a href="home4-fullwidth.html" class="site-nav">Home 4 - Fullwidth</a></li>
                                <li><a href="home5-cosmetic.html" class="site-nav">Home 5 - Cosmetic</a></li>
                                <li><a href="home6-modern.html" class="site-nav">Home 6 - Modern</a></li>
                                <li><a href="home7-shoes.html" class="site-nav last">Home 7 - Shoes</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Home Group 2<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="home8-jewellery.html" class="site-nav">Home 8 - Jewellery</a></li>
                                <li><a href="home9-parallax.html" class="site-nav">Home 9 - Parallax</a></li>
                                <li><a href="home10-minimal.html" class="site-nav">Home 10 - Minimal</a></li>
                                <li><a href="home11-grid.html" class="site-nav">Home 11 - Grid</a></li>
                                <li><a href="home12-category.html" class="site-nav">Home 12 - Category</a></li>
                                <li><a href="home13-auto-parts.html" class="site-nav">Home 13 - Auto Parts</a></li>
                                <li><a href="home14-bags.html" class="site-nav last">Home 14 - Bags</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">New Sections<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="home11-grid.html" class="site-nav">Image Gallery</a></li>
                                <li><a href="home5-cosmetic.html" class="site-nav">Featured Product</a></li>
                                <li><a href="home7-shoes.html" class="site-nav">Columns with Items</a></li>
                                <li><a href="home6-modern.html" class="site-nav">Text columns with images</a></li>
                                <li><a href="home2-default.html" class="site-nav">Products Carousel</a></li>
                                <li><a href="home9-parallax.html" class="site-nav last">Parallax Banner</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">New Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="home13-auto-parts.html" class="site-nav">Top Information Bar </a></li>
                                <li><a href="#" class="site-nav">Age Varification </a></li>
                                <li><a href="#" class="site-nav">Footer Blocks</a></li>
                                <li><a href="#" class="site-nav">2 New Megamenu style</a></li>
                                <li><a href="#" class="site-nav">Show Total Savings </a></li>
                                <li><a href="#" class="site-nav">New Custom Icons</a></li>
                                <li><a href="#" class="site-nav last">Auto Currency</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="#" class="site-nav">Shop Pages<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="shop-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                                <li><a href="shop-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                                <li><a href="shop-fullwidth.html" class="site-nav">Fullwidth</a></li>
                                <li><a href="shop-grid-3.html" class="site-nav">3 items per row</a></li>
                                <li><a href="shop-grid-4.html" class="site-nav">4 items per row</a></li>
                                <li><a href="shop-grid-5.html" class="site-nav">5 items per row</a></li>
                                <li><a href="shop-grid-6.html" class="site-nav">6 items per row</a></li>
                                <li><a href="shop-grid-7.html" class="site-nav">7 items per row</a></li>
                                <li><a href="shop-listview.html" class="site-nav last">Product Listview</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Shop Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="shop-left-sidebar.html" class="site-nav">Product Countdown </a></li>
                                <li><a href="shop-right-sidebar.html" class="site-nav">Infinite Scrolling</a></li>
                                <li><a href="shop-grid-3.html" class="site-nav">Pagination - Classic</a></li>
                                <li><a href="shop-grid-6.html" class="site-nav">Pagination - Load More</a></li>
                                <li><a href="product-labels.html" class="site-nav">Dynamic Product Labels</a></li>
                                <li><a href="product-swatches-style.html" class="site-nav">Product Swatches </a></li>
                                <li><a href="product-hover-info.html" class="site-nav">Product Hover Info</a></li>
                                <li><a href="shop-grid-3.html" class="site-nav">Product Reviews</a></li>
                                <li><a href="shop-left-sidebar.html" class="site-nav last">Discount Label </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="product-layout-1.html">Product <i
                            class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="product-layout-1.html" class="site-nav">Product Page<i
                                    class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="product-layout-1.html" class="site-nav">Product Layout 1</a></li>
                                <li><a href="product-layout-2.html" class="site-nav">Product Layout 2</a></li>
                                <li><a href="product-layout-3.html" class="site-nav">Product Layout 3</a></li>
                                <li><a href="product-with-left-thumbs.html" class="site-nav">Product With Left
                                        Thumbs</a></li>
                                <li><a href="product-with-right-thumbs.html" class="site-nav">Product With Right
                                        Thumbs</a></li>
                                <li><a href="product-with-bottom-thumbs.html" class="site-nav last">Product With
                                        Bottom Thumbs</a></li>
                            </ul>
                        </li>
                        <li><a href="short-description.html" class="site-nav">Product Features<i
                                    class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="short-description.html" class="site-nav">Short Description</a></li>
                                <li><a href="product-countdown.html" class="site-nav">Product Countdown</a></li>
                                <li><a href="product-video.html" class="site-nav">Product Video</a></li>
                                <li><a href="product-quantity-message.html" class="site-nav">Product Quantity
                                        Message</a></li>
                                <li><a href="product-visitor-sold-count.html" class="site-nav">Product Visitor/Sold
                                        Count </a></li>
                                <li><a href="product-zoom-lightbox.html" class="site-nav last">Product Zoom/Lightbox
                                    </a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="product-with-variant-image.html" class="site-nav">Product with Variant
                                        Image</a></li>
                                <li><a href="product-with-color-swatch.html" class="site-nav">Product with Color
                                        Swatch</a></li>
                                <li><a href="product-with-image-swatch.html" class="site-nav">Product with Image
                                        Swatch</a></li>
                                <li><a href="product-with-dropdown.html" class="site-nav">Product with Dropdown</a>
                                </li>
                                <li><a href="product-with-rounded-square.html" class="site-nav">Product with Rounded
                                        Square</a></li>
                                <li><a href="swatches-style.html" class="site-nav last">Product Swatches All Style</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#" class="site-nav">Product Features<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="product-accordion.html" class="site-nav">Product Accordion</a></li>
                                <li><a href="product-pre-orders.html" class="site-nav">Product Pre-orders </a></li>
                                <li><a href="product-labels-detail.html" class="site-nav">Product Labels</a></li>
                                <li><a href="product-discount.html" class="site-nav">Product Discount In %</a></li>
                                <li><a href="product-shipping-message.html" class="site-nav">Product Shipping
                                        Message</a></li>
                                <li><a href="product-shipping-message.html" class="site-nav last">Size Guide </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="about-us.html">Pages <i class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="cart-variant1.html" class="site-nav">Cart Page <i
                                    class="anm anm-plus-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="cart-variant1.html" class="site-nav">Cart Variant1</a></li>
                                <li><a href="cart-variant2.html" class="site-nav">Cart Variant2</a></li>
                            </ul>
                        </li>
                        <li><a href="compare-variant1.html" class="site-nav">Compare Product <i
                                    class="anm anm-plus-l"></i></a>
                            <ul class="dropdown">
                                <li><a href="compare-variant1.html" class="site-nav">Compare Variant1</a></li>
                                <li><a href="compare-variant2.html" class="site-nav">Compare Variant2</a></li>
                            </ul>
                        </li>
                        <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                        <li><a href="checkout.html" class="site-nav">Checkout</a></li>
                        <li><a href="about-us.html" class="site-nav">About Us<span
                                    class="lbl nm_label1">New</span></a></li>
                        <li><a href="contact-us.html" class="site-nav">Contact Us</a></li>
                        <li><a href="faqs.html" class="site-nav">FAQs</a></li>
                        <li><a href="lookbook1.html" class="site-nav">Lookbook<i class="anm anm-plus-l"></i></a>
                            <ul>
                                <li><a href="lookbook1.html" class="site-nav">Style 1</a></li>
                                <li><a href="lookbook2.html" class="site-nav last">Style 2</a></li>
                            </ul>
                        </li>
                        <li><a href="404.html" class="site-nav">404</a></li>
                        <li><a href="coming-soon.html" class="site-nav">Coming soon<span
                                    class="lbl nm_label1">New</span></a></li>
                    </ul>
                </li>
                <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i
                            class="anm anm-plus-l"></i></a>
                    <ul>
                        <li><a href="blog-left-sidebar.html" class="site-nav">Left Sidebar</a></li>
                        <li><a href="blog-right-sidebar.html" class="site-nav">Right Sidebar</a></li>
                        <li><a href="blog-fullwidth.html" class="site-nav">Fullwidth</a></li>
                        <li><a href="blog-grid-view.html" class="site-nav">Gridview</a></li>
                        <li><a href="blog-article.html" class="site-nav">Article</a></li>
                    </ul>
                </li>
                <li class="lvl1"><a href="#"><b>Buy Now!</b></a>
                </li>
            </ul>
        </div>
        <!--End Mobile Menu-->

        <!--Body Content-->
        <div id="page-content">
            <!--Home slider-->
            <div class="slideshow slideshow-wrapper pb-section sliderFull">
                <div class="home-slideshow">
                    <div class="slide">
                        <div class="blur-up lazyload bg-size">
                            <img class="blur-up lazyload bg-img"
                                data-src="assets/images/slideshow-banners/belle-banner1.jpg"
                                src="assets/images/slideshow-banners/belle-banner1.jpg" alt="Shop Our New Collection"
                                title="Shop Our New Collection" />
                            <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                                <div class="slideshow__text-content bottom">
                                    <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Shop Our New Collection</h2>
                                        <span class="mega-subtitle slideshow__subtitle">From Hight to low, classic or
                                            modern. We have you covered</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="blur-up lazyload bg-size">
                            <img class="blur-up lazyload bg-img"
                                data-src="assets/images/slideshow-banners/belle-banner2.jpg"
                                src="assets/images/slideshow-banners/belle-banner2.jpg" alt="Summer Bikini Collection"
                                title="Summer Bikini Collection" />
                            <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                                <div class="slideshow__text-content bottom">
                                    <div class="wrap-caption center">
                                        <h2 class="h1 mega-title slideshow__title">Summer Bikini Collection</h2>
                                        <span class="mega-subtitle slideshow__subtitle">Save up to 50% off this weekend
                                            only</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Home slider-->
            <!--Collection Tab slider-->
            <div class="tab-slider-product section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="section-header text-center">
                                <h2 class="h2">New Arrivals</h2>
                                <p>Browse the huge variety of our products</p>
                            </div>

                            <div class="tabs-listing">
                                <ul class="tabs clearfix">
                                    <li class="active" rel="tab1">Women</li>
                                    <li rel="tab2">Men</li>
                                    <li rel="tab3">Sale</li>
                                </ul>
                                <div class="tab_container">
                                    <div id="tab1" class="tab_content grid-products">
                                        <div class="productSlider">


                                            @foreach ($product as $item)
                                                <div class="col-12 item">
                                                    <!-- start product image -->
                                                    <div class="product-image">
                                                        <!-- start product image -->
                                                        
                                                            <!-- image -->
                                                            <img src="{{ asset($item->image) }}" style="width: 90%" height="300px" />
                                                            <!-- End image -->
                                                         
                                                            <!-- product label -->
                                                            <div class="product-labels rectangular"><span
                                                                    class="lbl on-sale">-16%</span> <span
                                                                    class="lbl pr-label1">new</span></div>
                                                            <!-- End product label -->
                                                        
                                                        <!-- end product image -->
                                                        <div class="product-price">
                                                            <span class="old-price"><span>&#8358</span>500.00</span>
                                                            <span
                                                                class="price"><span>&#8358</span>{{ $item->price }}</span>
                                                        </div>
                                                        <!-- Start product button -->
                                                        <form class="variants add" action="#"
                                                            onclick="window.location.href='cart.html'"method="post">
                                                            <button class="btn btn-addto-cart" type="button"
                                                                tabindex="0">Add To Cart</button>
                                                        </form>
                                                        <!-- end product button -->
                                                    </div>
                                                </div>
                                            @endforeach




                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>


                <!--Collection Box slider-->
                <div class="collection-box section">
                    <div class="container-fluid">
                        <div class="collection-grid">
                            <div class="collection-grid-item">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img data-src="assets/images/collection/fashion.jpg"
                                        src="assets/images/collection/fashion.jpg" alt="Fashion"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Fashion
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img class="blur-up lazyload" data-src="assets/images/collection/cosmetic.jpg"
                                        src="assets/images/collection/cosmetic.jpg" alt="Cosmetic" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Cosmetic
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item blur-up lazyloaded">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img data-src="assets/images/collection/bag.jpg"
                                        src="assets/images/collection/bag.jpg" alt="Bag"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Bag</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img data-src="assets/images/collection/accessories.jpg"
                                        src="assets/images/collection/accessories.jpg" alt="Accessories"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">
                                            Accessories
                                        </h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img data-src="assets/images/collection/shoes.jpg"
                                        src="assets/images/collection/shoes.jpg" alt="Shoes"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Shoes</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="collection-grid-item">
                                <a href="collection-page.html" class="collection-grid-item__link">
                                    <img data-src="assets/images/collection/jewellry.jpg"
                                        src="assets/images/collection/jewellry.jpg" alt="Jewellry"
                                        class="blur-up lazyload" />
                                    <div class="collection-grid-item__title-wrapper">
                                        <h3 class="collection-grid-item__title btn btn--secondary no-border">Jewellry
                                        </h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Collection Box slider-->

                <!--Logo Slider-->
                <div class="section logo-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="logo-bar">
                                    <div class="logo-bar__item">
                                        <img src="assets/images/logo/brandlogo1.png" alt="" title="" />
                                    </div>
                                    <div class="logo-bar__item">
                                        <img src="assets/images/logo/brandlogo2.png" alt="" title="" />
                                    </div>
                                    <div class="logo-bar__item">
                                        <img src="assets/images/logo/brandlogo3.png" alt="" title="" />
                                    </div>
                                    <div class="logo-bar__item">
                                        <img src="assets/images/logo/brandlogo4.png" alt="" title="" />
                                    </div>
                                    <div class="logo-bar__item">
                                        <img src="assets/images/logo/brandlogo5.png" alt="" title="" />
                                    </div>
                                    <div class="logo-bar__item">
                                        <img src="assets/images/logo/brandlogo6.png" alt="" title="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Logo Slider-->

                <!--Featured Product-->
                <div class="product-rows section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-header text-center">
                                    <h2 class="h2">Featured collection</h2>
                                    <p>Our most popular products based on sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="grid-products">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assets/images/product-images/product-image1.jpg"
                                                src="assets/images/product-images/product-image1.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assets/images/product-images/product-image1-1.jpg"
                                                src="assets/images/product-images/product-image1-1.jpg" alt="image"
                                                title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span
                                                    class="lbl on-sale">-16%</span>
                                                <span class="lbl pr-label1">new</span>
                                            </div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">Edna Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">$500.00</span>
                                                <span class="price">$600.00</span>
                                            </div>
                                            <!-- End product price -->

                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- Variant -->
                                        <ul class="swatches text-center">
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant1.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant2.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant3.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant4.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant5.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant6.jpg"
                                                    alt="image" />
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assets/images/product-images/product-image2.jpg"
                                                src="assets/images/product-images/product-image2.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assets/images/product-images/product-image2-1.jpg"
                                                src="assets/images/product-images/product-image2-1.jpg"
                                                alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span
                                                    class="lbl on-sale">-16%</span> <span
                                                    class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">Elastic Waist Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$748.00</span>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- Variant -->
                                        <ul class="swatches text-center">
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant2-1.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant2-2.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant2-3.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant2-4.jpg"
                                                    alt="image" />
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assets/images/product-images/product-image3.jpg"
                                                src="assets/images/product-images/product-image3.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assets/images/product-images/product-image3-1.jpg"
                                                src="assets/images/product-images/product-image3-1.jpg"
                                                alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels rectangular"><span
                                                    class="lbl on-sale">-16%</span> <span
                                                    class="lbl pr-label1">new</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">3/4 Sleeve Kimono Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$550.00</span>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- Variant -->
                                        <ul class="swatches text-center">
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant3-1.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant3-2.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant3-3.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant3-4.jpg"
                                                    alt="image" />
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assets/images/product-images/product-image4.jpg"
                                                src="assets/images/product-images/product-image4.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assets/images/product-images/product-image4-1.jpg"
                                                src="assets/images/product-images/product-image4-1.jpg"
                                                alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">Cape Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">$900.00</span>
                                                <span class="price">$788.00</span>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- Variant -->
                                        <ul class="swatches text-center">
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant4-1.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant4-2.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant4-3.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant4-4.jpg"
                                                    alt="image" />
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assets/images/product-images/product-image5.jpg"
                                                src="assets/images/product-images/product-image5.jpg" alt="image"
                                                title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assets/images/product-images/product-image5-1.jpg"
                                                src="assets/images/product-images/product-image5-1.jpg"
                                                alt="image" title="product">
                                            <!-- End hover image -->
                                            <!-- product label -->
                                            <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                            <!-- End product label -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">Paper Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="old-price">$900.00</span>
                                                <span class="price">$788.00</span>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- Variant -->
                                        <ul class="swatches text-center">
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant3-1.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant3-2.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant3-3.jpg"
                                                    alt="image" />
                                            </li>
                                            <li class="swatch medium rounded"><img
                                                    src="assets/images/product-images/variant3-4.jpg"
                                                    alt="image" />
                                            </li>
                                        </ul>
                                        <!-- End Variant -->
                                        <!-- End product details -->
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                    <div class="grid-view_image">
                                        <!-- start product image -->
                                        <a href="product-accordion.html" class="grid-view-item__link">
                                            <!-- image -->
                                            <img class="grid-view-item__image primary blur-up lazyload"
                                                data-src="assets/images/product-images/product-image16.jpg"
                                                src="assets/images/product-images/product-image16.jpg"
                                                alt="image" title="product">
                                            <!-- End image -->
                                            <!-- Hover image -->
                                            <img class="grid-view-item__image hover blur-up lazyload"
                                                data-src="assets/images/product-images/product-image16-1.jpg"
                                                src="assets/images/product-images/product-image16-1.jpg"
                                                alt="image" title="product">
                                            <!-- End hover image -->
                                        </a>
                                        <!-- end product image -->
                                        <!--start product details -->
                                        <div class="product-details hoverDetails text-center mobile">
                                            <!-- product name -->
                                            <div class="product-name">
                                                <a href="product-accordion.html">Buttercup Dress</a>
                                            </div>
                                            <!-- End product name -->
                                            <!-- product price -->
                                            <div class="product-price">
                                                <span class="price">$420.00</span>
                                            </div>
                                            <!-- product button -->
                                            <div class="button-set">
                                                <a href="javascript:void(0)" title="Quick View"
                                                    class="quick-view-popup quick-view" data-toggle="modal"
                                                    data-target="#content_quickview">
                                                    <i class="icon anm anm-search-plus-r"></i>
                                                </a>
                                                <!-- Start product button -->
                                                <form class="variants add" action="#"
                                                    onclick="window.location.href='cart.html'"method="post">
                                                    <button class="btn cartIcon btn-addto-cart" type="button"
                                                        tabindex="0"><i class="icon anm anm-bag-l"></i></button>
                                                </form>
                                                <div class="wishlist-btn">
                                                    <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                        <i class="icon anm anm-heart-l"></i>
                                                    </a>
                                                </div>
                                                <div class="compare-btn">
                                                    <a class="compare add-to-compare" href="compare.html"
                                                        title="Add to Compare">
                                                        <i class="icon anm anm-random-r"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- end product button -->
                                        </div>
                                        <!-- End product details -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Featured Product-->

                <!--Latest Blog-->
                <div class="latest-blog section pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="section-header text-center">
                                    <h2 class="h2">Latest From our Blog</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="wrap-blog">
                                    <a href="blog-left-sidebar.html" class="article__grid-image">
                                        <img src="assets/images/blog/post-img1.jpg"
                                            alt="It's all about how you wear" title="It's all about how you wear"
                                            class="blur-up lazyloaded" />
                                    </a>
                                    <div class="article__grid-meta article__grid-meta--has-image">
                                        <div class="wrap-blog-inner">
                                            <h2 class="h3 article__title">
                                                <a href="blog-left-sidebar.html">It's all about how you wear</a>
                                            </h2>
                                            <span class="article__date">May 02, 2017</span>
                                            <div class="rte article__grid-excerpt">
                                                I must explain to you how all this mistaken idea of denouncing pleasure
                                                and
                                                praising pain was born and I will give you a complete account...
                                            </div>
                                            <ul class="list--inline article__meta-buttons">
                                                <li><a href="blog-article.html">Read more</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="wrap-blog">
                                    <a href="blog-left-sidebar.html" class="article__grid-image">
                                        <img src="assets/images/blog/post-img2.jpg"
                                            alt="27 Days of Spring Fashion Recap"
                                            title="27 Days of Spring Fashion Recap" class="blur-up lazyloaded" />
                                    </a>
                                    <div class="article__grid-meta article__grid-meta--has-image">
                                        <div class="wrap-blog-inner">
                                            <h2 class="h3 article__title">
                                                <a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a>
                                            </h2>
                                            <span class="article__date">May 02, 2017</span>
                                            <div class="rte article__grid-excerpt">
                                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                accusantium
                                                doloremque laudantium, totam rem aperiam, eaque ipsa quae ab...
                                            </div>
                                            <ul class="list--inline article__meta-buttons">
                                                <li><a href="blog-article.html">Read more</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Latest Blog-->

                <!--Store Feature-->
                <div class="store-feature section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                <ul class="display-table store-info">
                                    <li class="display-table-cell">
                                        <i class="icon anm anm-truck-l"></i>
                                        <h5>Free Shipping &amp; Return</h5>
                                        <span class="sub-text">Free shipping on all US orders</span>
                                    </li>
                                    <li class="display-table-cell">
                                        <i class="icon anm anm-dollar-sign-r"></i>
                                        <h5>Money Guarantee</h5>
                                        <span class="sub-text">30 days money back guarantee</span>
                                    </li>
                                    <li class="display-table-cell">
                                        <i class="icon anm anm-comments-l"></i>
                                        <h5>Online Support</h5>
                                        <span class="sub-text">We support online 24/7 on day</span>
                                    </li>
                                    <li class="display-table-cell">
                                        <i class="icon anm anm-credit-card-front-r"></i>
                                        <h5>Secure Payments</h5>
                                        <span class="sub-text">All payment are Secured and trusted.</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Store Feature-->
            </div>
            <!--End Body Content-->

            <!--Footer-->
            <footer id="footer">
                <div class="newsletter-section">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-12 col-sm-12 col-md-12 col-lg-7 w-100 d-flex justify-content-start align-items-center">
                                <div class="display-table">
                                    <div class="display-table-cell footer-newsletter">
                                        <div class="section-header text-center">
                                            <label class="h2"><span>sign up for </span>newsletter</label>
                                        </div>
                                        <form action="#" method="post">
                                            <div class="input-group">
                                                <input type="email" class="input-group__field newsletter__input"
                                                    name="EMAIL" value="" placeholder="Email address"
                                                    required="">
                                                <span class="input-group__btn">
                                                    <button type="submit" class="btn newsletter__submit"
                                                        name="commit" id="Subscribe"><span
                                                            class="newsletter__submit-text--large">Subscribe</span></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                                <div class="footer-social">
                                    <ul class="list--inline site-footer__social-icons social-icons">
                                        <li><a class="social-icons__link" href="#" target="_blank"
                                                title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i
                                                    class="icon icon-facebook"></i></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank"
                                                title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i
                                                    class="icon icon-twitter"></i> <span
                                                    class="icon__fallback-text">Twitter</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank"
                                                title="Belle Multipurpose Bootstrap 4 Template on Pinterest"><i
                                                    class="icon icon-pinterest"></i> <span
                                                    class="icon__fallback-text">Pinterest</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank"
                                                title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i
                                                    class="icon icon-instagram"></i> <span
                                                    class="icon__fallback-text">Instagram</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank"
                                                title="Belle Multipurpose Bootstrap 4 Template on Tumblr"><i
                                                    class="icon icon-tumblr-alt"></i> <span
                                                    class="icon__fallback-text">Tumblr</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank"
                                                title="Belle Multipurpose Bootstrap 4 Template on YouTube"><i
                                                    class="icon icon-youtube"></i> <span
                                                    class="icon__fallback-text">YouTube</span></a></li>
                                        <li><a class="social-icons__link" href="#" target="_blank"
                                                title="Belle Multipurpose Bootstrap 4 Template on Vimeo"><i
                                                    class="icon icon-vimeo-alt"></i> <span
                                                    class="icon__fallback-text">Vimeo</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer">
                    <div class="container">
                        <!--Footer Links-->
                        <div class="footer-top">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                    <h4 class="h4">Quick Shop</h4>
                                    <ul>
                                        <li><a href="#">Women</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Kids</a></li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li><a href="#">Sale</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                    <h4 class="h4">Informations</h4>
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Privacy policy</a></li>
                                        <li><a href="#">Terms &amp; condition</a></li>
                                        <li><a href="#">My Account</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 footer-links">
                                    <h4 class="h4">Customer Services</h4>
                                    <ul>
                                        <li><a href="#">Request Personal Data</a></li>
                                        <li><a href="#">FAQ's</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Orders and Returns</a></li>
                                        <li><a href="#">Support Center</a></li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box">
                                    <h4 class="h4">Contact Us</h4>
                                    <ul class="addressFooter">
                                        <li><i class="icon anm anm-map-marker-al"></i>
                                            <p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p>
                                        </li>
                                        <li class="phone"><i class="icon anm anm-phone-s"></i>
                                            <p>(440) 000 000 0000</p>
                                        </li>
                                        <li class="email"><i class="icon anm anm-envelope-l"></i>
                                            <p>sales@yousite.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--End Footer Links-->
                        <hr>
                        <div class="footer-bottom">
                            <div class="row">
                                <!--Footer Copyright-->
                                <div
                                    class="col-12 col-sm-12 col-md-6 col-lg-6 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-sm-center text-md-left text-lg-left">
                                    <span></span> <a href="templateshub.net">Templates Hub</a>
                                </div>
                                <!--End Footer Copyright-->
                                <!--Footer Payment Icon-->
                                <div
                                    class="col-12 col-sm-12 col-md-6 col-lg-6 order-0 order-md-1 order-lg-1 order-sm-0 payment-icons text-right text-md-center">
                                    <ul class="payment-icons list--inline">
                                        <li><i class="icon fa fa-cc-visa" aria-hidden="true"></i></li>
                                        <li><i class="icon fa fa-cc-mastercard" aria-hidden="true"></i></li>
                                        <li><i class="icon fa fa-cc-discover" aria-hidden="true"></i></li>
                                        <li><i class="icon fa fa-cc-paypal" aria-hidden="true"></i></li>
                                        <li><i class="icon fa fa-cc-amex" aria-hidden="true"></i></li>
                                        <li><i class="icon fa fa-credit-card" aria-hidden="true"></i></li>
                                    </ul>
                                </div>
                                <!--End Footer Payment Icon-->
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--End Footer-->
            <!--Scoll Top-->
            <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
            <!--End Scoll Top-->

            <!--Quick View popup-->
            <div class="modal fade quick-view-popup" id="content_quickview">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div id="ProductSection-product-template" class="product-template__container prstyle1">
                                <div class="product-single">
                                    <!-- Start model close -->
                                    <a href="javascript:void()" data-dismiss="modal"
                                        class="model-close-btn pull-right" title="close"><span
                                            class="icon icon anm anm-times-l"></span></a>
                                    <!-- End model close -->
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="product-details-img">
                                                <div class="pl-20">
                                                    <img src="assets/images/product-detail-page/camelia-reversible-big1.jpg"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="product-single__meta">
                                                <h2 class="product-single__title">Product Quick View Popup</h2>
                                                <div class="prInfoRow">
                                                    <div class="product-stock"> <span class="instock ">In
                                                            Stock</span>
                                                        <span class="outstock hide">Unavailable</span>
                                                    </div>
                                                    <div class="product-sku">SKU: <span
                                                            class="variant-sku">19115-rdxs</span></div>
                                                </div>
                                                <p
                                                    class="product-single__price product-single__price-product-template">
                                                    <span class="visually-hidden">Regular price</span>
                                                    <s id="ComparePrice-product-template"><span
                                                            class="money">$600.00</span></s>
                                                    <span
                                                        class="product-price__price product-price__price-product-template product-price__sale product-price__sale--single">
                                                        <span id="ProductPrice-product-template"><span
                                                                class="money">$500.00</span></span>
                                                    </span>
                                                </p>
                                                <div class="product-single__description rte">
                                                    Belle Multipurpose Bootstrap 4 Html Template that will give you and
                                                    your
                                                    customers a smooth shopping experience which can be used for various
                                                    kinds of stores such as fashion,...
                                                </div>

                                                <form method="post" action="http://annimexweb.com/cart/add"
                                                    id="product_form_10508262282" accept-charset="UTF-8"
                                                    class="product-form product-form-product-template hidedropdown"
                                                    enctype="multipart/form-data">
                                                    <div class="swatch clearfix swatch-0 option1"
                                                        data-option-index="0">
                                                        <div class="product-form__item">
                                                            <label class="header">Color: <span
                                                                    class="slVariant">Red</span></label>
                                                            <div data-value="Red"
                                                                class="swatch-element color red available">
                                                                <input class="swatchInput" id="swatch-0-red"
                                                                    type="radio" name="option-0" value="Red">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-red"
                                                                    style="background-image:url(assets/images/product-detail-page/variant1-1.jpg);"
                                                                    title="Red"></label>
                                                            </div>
                                                            <div data-value="Blue"
                                                                class="swatch-element color blue available">
                                                                <input class="swatchInput" id="swatch-0-blue"
                                                                    type="radio" name="option-0" value="Blue">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-blue"
                                                                    style="background-image:url(assets/images/product-detail-page/variant1-2.jpg);"
                                                                    title="Blue"></label>
                                                            </div>
                                                            <div data-value="Green"
                                                                class="swatch-element color green available">
                                                                <input class="swatchInput" id="swatch-0-green"
                                                                    type="radio" name="option-0" value="Green">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-green"
                                                                    style="background-image:url(assets/images/product-detail-page/variant1-3.jpg);"
                                                                    title="Green"></label>
                                                            </div>
                                                            <div data-value="Gray"
                                                                class="swatch-element color gray available">
                                                                <input class="swatchInput" id="swatch-0-gray"
                                                                    type="radio" name="option-0" value="Gray">
                                                                <label class="swatchLbl color medium rectangle"
                                                                    for="swatch-0-gray"
                                                                    style="background-image:url(assets/images/product-detail-page/variant1-4.jpg);"
                                                                    title="Gray"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swatch clearfix swatch-1 option2"
                                                        data-option-index="1">
                                                        <div class="product-form__item">
                                                            <label class="header">Size: <span
                                                                    class="slVariant">XS</span></label>
                                                            <div data-value="XS"
                                                                class="swatch-element xs available">
                                                                <input class="swatchInput" id="swatch-1-xs"
                                                                    type="radio" name="option-1" value="XS">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-xs" title="XS">XS</label>
                                                            </div>
                                                            <div data-value="S" class="swatch-element s available">
                                                                <input class="swatchInput" id="swatch-1-s"
                                                                    type="radio" name="option-1" value="S">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-s" title="S">S</label>
                                                            </div>
                                                            <div data-value="M" class="swatch-element m available">
                                                                <input class="swatchInput" id="swatch-1-m"
                                                                    type="radio" name="option-1" value="M">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-m" title="M">M</label>
                                                            </div>
                                                            <div data-value="L" class="swatch-element l available">
                                                                <input class="swatchInput" id="swatch-1-l"
                                                                    type="radio" name="option-1" value="L">
                                                                <label class="swatchLbl medium rectangle"
                                                                    for="swatch-1-l" title="L">L</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Product Action -->
                                                    <div class="product-action clearfix">
                                                        <div class="product-form__item--quantity">
                                                            <div class="wrapQtyBtn">
                                                                <div class="qtyField">
                                                                    <a class="qtyBtn minus"
                                                                        href="javascript:void(0);"><i
                                                                            class="fa anm anm-minus-r"
                                                                            aria-hidden="true"></i></a>
                                                                    <input type="text" id="Quantity"
                                                                        name="quantity" value="1"
                                                                        class="product-form__input qty">
                                                                    <a class="qtyBtn plus"
                                                                        href="javascript:void(0);"><i
                                                                            class="fa anm anm-plus-r"
                                                                            aria-hidden="true"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-form__item--submit">
                                                            <button type="button" name="add"
                                                                class="btn product-form__cart-submit">
                                                                <span>Add to cart</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <!-- End Product Action -->
                                                </form>
                                                <div class="display-table shareRow">
                                                    <div class="display-table-cell">
                                                        <div class="wishlist-btn">
                                                            <a class="wishlist add-to-wishlist" href="#"
                                                                title="Add to Wishlist"><i
                                                                    class="icon anm anm-heart-l"
                                                                    aria-hidden="true"></i> <span>Add to
                                                                    Wishlist</span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End-product-single-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Quick View popup-->

            <!-- Newsletter Popup -->
            <div class="newsletter-wrap" id="popup-container">
                <div id="popup-window">
                    <a class="btn closepopup"><i class="icon icon anm anm-times-l"></i></a>
                    <!-- Modal content-->
                    <div class="display-table splash-bg">
                        <div class="display-table-cell width40"><img src="assets/images/newsletter-img.jpg"
                                alt="Join Our Mailing List" title="Join Our Mailing List" /> </div>
                        <div class="display-table-cell width60 text-center">
                            <div class="newsletter-left">
                                <h2>Join Our Mailing List</h2>
                                <p>Sign Up for our exclusive email list and be the first to know about new products and
                                    special offers</p>
                                <form action="#" method="post">
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter__input"
                                            name="EMAIL" value="" placeholder="Email address"
                                            required="">
                                        <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit" name="commit"
                                                id="subscribeBtn"> <span
                                                    class="newsletter__submit-text--large">Subscribe</span> </button>
                                        </span>
                                    </div>
                                </form>
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons__link" href="#" title="Facebook"><i
                                                class="fa fa-facebook-official" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Twitter"><i
                                                class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Pinterest"><i
                                                class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Instagram"><i
                                                class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="YouTube"><i
                                                class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a class="social-icons__link" href="#" title="Vimeo"><i
                                                class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Newsletter Popup -->

            <!-- Including Jquery -->
            <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
            <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
            <script src="assets/js/vendor/jquery.cookie.js"></script>
            <script src="assets/js/vendor/wow.min.js"></script>
            <!-- Including Javascript -->
            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/plugins.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/lazysizes.js"></script>
            <script src="assets/js/main.js"></script>
            <!--For Newsletter Popup-->
            <script>
                jQuery(document).ready(function() {
                    jQuery('.closepopup').on('click', function() {
                        jQuery('#popup-container').fadeOut();
                        jQuery('#modalOverly').fadeOut();
                    });

                    var visits = jQuery.cookie('visits') || 0;
                    visits++;
                    jQuery.cookie('visits', visits, {
                        expires: 1,
                        path: '/'
                    });
                    console.debug(jQuery.cookie('visits'));
                    if (jQuery.cookie('visits') > 1) {
                        jQuery('#modalOverly').hide();
                        jQuery('#popup-container').hide();
                    } else {
                        var pageHeight = jQuery(document).height();
                        jQuery('<div id="modalOverly"></div>').insertBefore('body');
                        jQuery('#modalOverly').css("height", pageHeight);
                        jQuery('#popup-container').show();
                    }
                    if (jQuery.cookie('noShowWelcome')) {
                        jQuery('#popup-container').hide();
                        jQuery('#active-popup').hide();
                    }
                });

                jQuery(document).mouseup(function(e) {
                    var container = jQuery('#popup-container');
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        container.fadeOut();
                        jQuery('#modalOverly').fadeIn(200);
                        jQuery('#modalOverly').hide();
                    }
                });
            </script>
            <!--End For Newsletter Popup-->
        </div>
</body>

<!-- belle/index.html   11 Nov 2019 12:20:55 GMT -->

</html>







{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }
    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="h-16 w-auto text-gray-700 sm:h-20">
                    <g clip-path="url(#clip0)" fill="#EF3B2D">
                        <path
                            d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z" />
                    </g>
                </svg>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"
                                    class="underline text-gray-900 dark:text-white">Documentation</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel has wonderful, thorough documentation covering every aspect of the framework.
                                Whether you are new to the framework or have previous experience with Laravel, we
                                recommend reading all of the documentation from beginning to end.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z">
                                </path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com"
                                    class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript
                                development. Check them out, see for yourself, and massively level up your development
                                skills in the process.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/"
                                    class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel News is a community driven portal and newsletter aggregating all of the latest
                                and most important news in the Laravel ecosystem, including new package releases and
                                tutorials.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                </path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant
                                Ecosystem</div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com" class="underline">Forge</a>, <a
                                    href="https://vapor.laravel.com" class="underline">Vapor</a>, <a
                                    href="https://nova.laravel.com" class="underline">Nova</a>, and <a
                                    href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects
                                to the next level. Pair them with powerful open source libraries like <a
                                    href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a
                                    href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a
                                    href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a
                                    href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a
                                    href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a
                                    href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and
                                more.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>

                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html> --}}
