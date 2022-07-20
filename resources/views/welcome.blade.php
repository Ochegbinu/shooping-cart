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
    <!-- Toastr CSS -->
    <link href="{{ asset('vendor/css/toastr.css') }}" rel="stylesheet">


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
                                {{-- <li class="lvl1 parent megamenu"><a href="#">Shop <i
                                            class="anm anm-angle-down-l"></i></a>
                                    
                                </li> --}}
                                <li class="lvl1 parent dropdown"><a href="#">Shops <i
                                            class="anm anm-angle-down-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="cart-variant1.html" class="site-nav">Create Shop <i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="cart-variant1.html" class="site-nav">Shop Products</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="compare-variant1.html" class="site-nav">Makurdi Shop <i
                                                    class="anm anm-angle-right-l"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="compare-variant1.html" class="site-nav">High level
                                                        </a></li>
                                                <li><a href="compare-variant2.html" class="site-nav">Wadata
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li><a href="compare-variant1.html" class="site-nav">Otukpo Shop <i
                                            class="anm anm-angle-right-l"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="compare-variant1.html" class="site-nav">Main market
                                                </a></li>
                                        <li><a href="compare-variant2.html" class="site-nav">IGRA shop
                                            </a></li>
                                    </ul>
                                </li>
                                        <li><a href="about-us.html" class="site-nav">About Shops Location <span
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
                                        <li><a href="404.html" class="site-nav">Suggest shop Arena</a></li>
                                        <li><a href="coming-soon.html" class="site-nav">Coming soon <span
                                                    class="lbl nm_label1">New</span> </a></li>
                                    </ul>
                                </li>
                                <li class="lvl1 parent megamenu"><a href="#">Product </a> </li>

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
                            <a href="{{ route('myCart') }}" class="site-header__cart" title="Cart">
                                <i class="icon anm anm-bag-l"></i>
                                <span id="CartCount" class="site-header__cart-count"
                                    data-cart-render="item_count">{{ $counters }}</span>
                            </a>
                            <!--Minicart Popup-->
                            <div id="header-cart" class="block block-cart">
                                <ul class="mini-products-list">
                                    @foreach ($cart as $item)
                                        <li class="item">
                                            <a class="product-image" href="#">
                                                <img src="{{ asset($item->product->image) }}"
                                                    style="width: 100px" />
                                            </a>
                                            <div class="product-details">
                                                <a href="#" class="remove"><i class="anm anm-times-l"
                                                        aria-hidden="true"></i></a>
                                                <a href="#" class="edit-i remove"><i class="anm anm-edit"
                                                        aria-hidden="true"></i></a>
                                                <a class="pName" href="cart.html">{{ $item->product->name }}</a>
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
                                                        <span class="money"><span>&#8358</span>
                                                            {{ $item->product->price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                                <div class="total">
                                    <div class="total-in">
                                        <span class="label">Cart Subtotal:</span><span class="product-price"><span
                                                class="money"><span>&#8358</span>Amount</span></span>
                                    </div>
                                    <div class="buttonSet text-center">
                                        <a href="{{ route('myCart') }}" class="btn btn-secondary btn--small">View
                                            Cart</a>
                                        <a href="" class="btn btn-secondary btn--small">Checkout</a>
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
                                                        <img src="{{ asset($item->image) }}" style="width: 90%"
                                                            height="300px" />
                                                        <!-- End image -->

                                                        <!-- product label -->
                                                        <div class="product-labels rectangular"><span
                                                                class="lbl on-sale">-16%</span> <span
                                                                class="lbl pr-label1">new</span></div>
                                                        <!-- End product label -->
                                                        <span><b>{{ $item->name }}</b></span>
                                                        <!-- end product image -->
                                                        <div class="product-price">
                                                            <span class="old-price"><span>&#8358</span>500.00</span>
                                                            <span
                                                                class="price"><span>&#8358</span>{{ $item->price }}</span>
                                                        </div>
                                                        <!-- Start product button -->
                                                        <a href="{{ route('cart', [$item]) }}"> <button
                                                                class="btn btn-sm btn-danger">Add To Cart</button></a>



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

                                @foreach ($product as $item)
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-4 item grid-view-item style2">
                                        <div class="grid-view_image">
                                            <!-- start product image -->
                                            <a href="{{ route('cart', [$item]) }}" class="grid-view-item__link">
                                                <!-- image -->
                                                <img src="{{ asset($item->image) }}" />
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
                                                    <h1> <strong>{{ $item->name }}</strong></h1>
                                                </div>
                                                <!-- End product name -->
                                                <!-- product price -->
                                                <div class="product-price">
                                                    <span class="price"><span>&#8358</span>
                                                        {{ $item->price }}</span>
                                                </div>
                                                <p><strong>{{ $item->description }}</strong></p>
                                            </div>
                                            <!-- End product details -->
                                        </div>
                                    </div>
                                @endforeach

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
                                        <img src="assets/images/blog/post-img1.jpg" alt="It's all about how you wear"
                                            title="It's all about how you wear" class="blur-up lazyloaded" />
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
                                        <span class="sub-text">Free shipping on all Benue orders</span>
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
            @include('layouts.footer')
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
