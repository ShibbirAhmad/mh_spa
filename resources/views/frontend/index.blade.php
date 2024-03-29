@extends('frontend.master')
@section('content')

    <div id="header">

        <nav id="top" class="htop">
            <div class="container">
                <div class="row"><span class="drop-icon visible-sm visible-xs"><i
                            class="fa fa-align-justify"></i></span>
                    <div class="pull-left flip left-top">
                        <div class="links">
                            <ul>
                                <li class="mobile"><i class="fa fa-phone"></i>+91 9898777656</li>
                                <li class="email"><a href="mailto:info@marketshop.com"><i
                                            class="fa fa-envelope"></i>info@marketshop.com</a>
                                </li>
                                <li class="wrap_custom_block hidden-sm hidden-xs"><a>Custom Block<b></b></a>
                                    <div class="dropdown-menu custom_block">
                                        <ul>
                                            <li>
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td><img alt=""
                                                                 src="{{asset('frontend/image/banner/cms-block.jpg')}}">
                                                        </td>
                                                        <td><img alt=""
                                                                 src="{{asset('fronend/image/banner/responsive.jpg')}}">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><h4>CMS Blocks</h4></td>
                                                        <td><h4>Responsive Template</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td>This is a CMS block. You can insert any content (HTML,
                                                            Text,
                                                            Images) Here.
                                                        </td>
                                                        <td>This is a CMS block. You can insert any content (HTML,
                                                            Text,
                                                            Images) Here.
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">Read
                                                                    More</a></strong></td>
                                                        <td><strong><a class="btn btn-default btn-sm" href="#">Read
                                                                    More</a></strong></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#">Wish List (0)</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                        <div id="language" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"><span> <img
                                        src="{{asset('frontend/image/flags/gb.png')}}" alt="English" title="English">English <i
                                        class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB">
                                        <img
                                            src="{{asset('frontend/image/flags/gb.png')}}" alt="English"
                                            title="English"/> English
                                    </button>
                                </li>
                                <li>
                                    <button class="btn btn-link btn-block language-select" type="button" name="GB">
                                        <img
                                            src="{{asset('frontend/image/flags/ar.png')}}" alt="Arabic"
                                            title="Arabic"/>
                                        Arabic
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div id="currency" class="btn-group">
                            <button class="btn-link dropdown-toggle" data-toggle="dropdown"><span> $ USD <i
                                        class="fa fa-caret-down"></i></span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="EUR">
                                        €
                                        Euro
                                    </button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="GBP">
                                        £
                                        Pound Sterling
                                    </button>
                                </li>
                                <li>
                                    <button class="currency-select btn btn-link btn-block" type="button" name="USD">
                                        $ US
                                        Dollar
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="top-links" class="nav pull-right flip">
                        <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="register.html">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <header class="header-row">
            <div class="container">
                <div class="table-container">
                    <!-- Logo Start -->
                    <div class="col-table-cell col-lg-4 col-md-4 col-sm-12 col-xs-12 inner">
                        <div id="logo"><a href="index.html"><img class="img-responsive"
                                                                 src="{{asset('frontend/image/logo.png')}}"
                                                                 title="MarketShop" alt="MarketShop"/></a></div>
                    </div>
                    <!-- Logo End -->
                    <!-- Search Start-->
                    <div class="col-table-cell col-lg-5 col-md-5 col-md-push-0 col-sm-6 col-sm-push-6 col-xs-12">
                        <div id="search" class="input-group">
                            <input id="filter_name" type="text" name="search" value="" placeholder="Search"
                                   class="form-control input-lg"/>
                            <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <!-- Search End-->
                    <!-- Mini Cart Start-->
                    <div
                        class="col-table-cell col-lg-3 col-md-3 col-md-pull-0 col-sm-6 col-sm-pull-6 col-xs-12 inner">
                        <div id="cart">
                            <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                                    class="heading dropdown-toggle"><span class="cart-icon pull-left flip"></span>
                                <span
                                    id="cart-total">2 item(s) - $1,132.00</span></button>
                            <ul class="dropdown-menu">
                                <li>
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td class="text-center"><a href="product.html"><img
                                                        class="img-thumbnail"
                                                        title="Xitefun Causal Wear Fancy Shoes"
                                                        alt="Xitefun Causal Wear Fancy Shoes"
                                                        src="image/product/sony_vaio_1-50x50.jpg"></a>
                                            </td>
                                            <td class="text-left"><a href="product.html">Xitefun Causal Wear Fancy
                                                    Shoes</a></td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">$902.00</td>
                                            <td class="text-center">
                                                <button class="btn btn-danger btn-xs remove" title="Remove"
                                                        onClick=""
                                                        type="button"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><a href="product.html"><img
                                                        class="img-thumbnail"
                                                        title="Aspire Ultrabook Laptop"
                                                        alt="Aspire Ultrabook Laptop"
                                                        src="image/product/samsung_tab_1-50x50.jpg"></a>
                                            </td>
                                            <td class="text-left"><a href="product.html">Aspire Ultrabook Laptop</a>
                                            </td>
                                            <td class="text-right">x 1</td>
                                            <td class="text-right">$230.00</td>
                                            <td class="text-center">
                                                <button class="btn btn-danger btn-xs remove" title="Remove"
                                                        onClick=""
                                                        type="button"><i class="fa fa-times"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </li>
                                <li>
                                    <div>
                                        <table class="table table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="text-right"><strong>Sub-Total</strong></td>
                                                <td class="text-right">$940.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                                <td class="text-right">$4.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>VAT (20%)</strong></td>
                                                <td class="text-right">$188.00</td>
                                            </tr>
                                            <tr>
                                                <td class="text-right"><strong>Total</strong></td>
                                                <td class="text-right">$1,132.00</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <p class="checkout"><a href="cart.html" class="btn btn-primary"><i
                                                    class="fa fa-shopping-cart"></i> View Cart</a>&nbsp;&nbsp;&nbsp;<a
                                                href="checkout.html" class="btn btn-primary"><i class="fa fa-share"></i>
                                                Checkout</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mini Cart End-->
                </div>
            </div>
        </header>

        <nav id="menu" class="navbar">
            <div class="container">
                <div class="navbar-header"><span class="visible-xs visible-sm"> Menu <b></b></span></div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li><a class="home_link" title="Home" href="index.html"><span>Home</span></a></li>
                        <li class="dropdown"><a>Shop by Categories</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="category.html">Clothing<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">Men <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">Sub Categories</a></li>
                                                            <li><a href="category.html">Sub Categories</a></li>
                                                            <li><a href="category.html">Sub Categories</a></li>
                                                            <li><a href="category.html">Sub Categories</a></li>
                                                            <li><a href="category.html">Sub Categories New</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">Women</a></li>
                                                <li><a href="category.html">Girls<span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">Sub Categories </a></li>
                                                            <li><a href="category.html">Sub Categories New</a></li>
                                                            <li><a href="category.html">Sub Categories New</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">Boys</a></li>
                                                <li><a href="category.html">Baby</a></li>
                                                <li><a href="category.html">Accessories <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">Electronics<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">Laptops <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories </a></li>
                                                            <li><a href="category.html">New Sub Categories </a></li>
                                                            <li><a href="category.html">Sub Categories New </a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">Desktops <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories </a></li>
                                                            <li><a href="category.html">Sub Categories New </a></li>
                                                            <li><a href="category.html">Sub Categories New </a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">Cameras <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">Mobile Phones <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories</a></li>
                                                            <li><a href="category.html">New Sub Categories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">TV &amp; Home Audio
                                                        <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories </a></li>
                                                            <li><a href="category.html">Sub Categories New </a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">MP3 Players</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">Shoes<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">Men</a></li>
                                                <li><a href="category.html">Women <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories </a></li>
                                                            <li><a href="category.html">Sub Categories </a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">Girls</a></li>
                                                <li><a href="category.html">Boys</a></li>
                                                <li><a href="category.html">Baby</a></li>
                                                <li><a href="category.html">Accessories <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories</a></li>
                                                            <li><a href="category.html">New Sub Categories</a></li>
                                                            <li><a href="category.html">Sub Categories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">Watches<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">Men's Watches</a></li>
                                                <li><a href="category.html">Women's Watches</a></li>
                                                <li><a href="category.html">Kids' Watches</a></li>
                                                <li><a href="category.html">Accessories</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">Jewellery<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">Silver <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories</a></li>
                                                            <li><a href="category.html">New Sub Categories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">Gold <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">test 1</a></li>
                                                            <li><a href="category.html">test 2</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">Diamond</a></li>
                                                <li><a href="category.html">Pearl <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">Men's Jewellery</a></li>
                                                <li><a href="category.html">Children's Jewellery
                                                        <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">New Sub Categories </a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">Health &amp; Beauty<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">Perfumes</a></li>
                                                <li><a href="category.html">Makeup</a></li>
                                                <li><a href="category.html">Sun Care</a></li>
                                                <li><a href="category.html">Skin Care</a></li>
                                                <li><a href="category.html">Eye Care</a></li>
                                                <li><a href="category.html">Hair Care</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">Kids &amp; Babies<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">Toys</a></li>
                                                <li><a href="category.html">Games <span>&rsaquo;</span></a>
                                                    <div class="dropdown-menu">
                                                        <ul>
                                                            <li><a href="category.html">test 25</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li><a href="category.html">Puzzles</a></li>
                                                <li><a href="category.html">Hobbies</a></li>
                                                <li><a href="category.html">Strollers</a></li>
                                                <li><a href="category.html">Health &amp; Safety</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">Sports<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">Cycling</a></li>
                                                <li><a href="category.html">Running</a></li>
                                                <li><a href="category.html">Swimming</a></li>
                                                <li><a href="category.html">Football</a></li>
                                                <li><a href="category.html">Golf</a></li>
                                                <li><a href="category.html">Windsurfing</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">Home &amp; Garden<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">Bedding</a></li>
                                                <li><a href="category.html">Food</a></li>
                                                <li><a href="category.html">Furniture</a></li>
                                                <li><a href="category.html">Kitchen</a></li>
                                                <li><a href="category.html">Lighting</a></li>
                                                <li><a href="category.html">Tools</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="category.html">Wines &amp; Spirits<span>&rsaquo;</span></a>
                                        <div class="dropdown-menu">
                                            <ul>
                                                <li><a href="category.html">Wine</a></li>
                                                <li><a href="category.html">Whiskey</a></li>
                                                <li><a href="category.html">Vodka</a></li>
                                                <li><a href="category.html">Liqueurs</a></li>
                                                <li><a href="category.html">Beer</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu_brands dropdown"><a href="#">Brands</a>
                            <div class="dropdown-menu">
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/apple_logo-60x60.jpg" title="Apple" alt="Apple"/></a><a
                                        href="#">Apple</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/canon_logo-60x60.jpg" title="Canon" alt="Canon"/></a><a
                                        href="#">Canon</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/hp_logo-60x60.jpg" title="Hewlett-Packard"
                                            alt="Hewlett-Packard"/></a><a href="#">Hewlett-Packard</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/htc_logo-60x60.jpg" title="HTC" alt="HTC"/></a><a
                                        href="#">HTC</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/palm_logo-60x60.jpg" title="Palm" alt="Palm"/></a><a
                                        href="#">Palm</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/sony_logo-60x60.jpg" title="Sony" alt="Sony"/></a><a
                                        href="#">Sony</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/canon_logo-60x60.jpg" title="test" alt="test"/></a><a
                                        href="#">test</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/apple_logo-60x60.jpg" title="test 3" alt="test 3"/></a><a
                                        href="#">test 3</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/canon_logo-60x60.jpg" title="test 5" alt="test 5"/></a><a
                                        href="#">test 5</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/canon_logo-60x60.jpg" title="test 6" alt="test 6"/></a><a
                                        href="#">test 6</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/apple_logo-60x60.jpg" title="test 7" alt="test 7"/></a><a
                                        href="#">test 7</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/canon_logo-60x60.jpg" title="test1" alt="test1"/></a><a
                                        href="#">test1</a></div>
                                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"><img
                                            src="image/product/apple_logo-60x60.jpg" title="test2" alt="test2"/></a><a
                                        href="#">test2</a></div>
                            </div>
                        </li>
                        <li class="custom-link"><a href="#">Custom Links</a></li>
                        <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>Custom Block</a>
                            <div class="dropdown-menu custom_block">
                                <ul>
                                    <li>
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td><img alt="" src="image/banner/cms-block.jpg"></td>
                                                <td><img alt="" src="image/banner/responsive.jpg"></td>
                                                <td><img alt="" src="image/banner/cms-block.jpg"></td>
                                            </tr>
                                            <tr>
                                                <td><h4>CMS Blocks</h4></td>
                                                <td><h4>Responsive Template</h4></td>
                                                <td><h4>Dedicated Support</h4></td>
                                            </tr>
                                            <tr>
                                                <td>This is a CMS block. You can insert any content (HTML, Text,
                                                    Images)
                                                    Here.
                                                </td>
                                                <td>This is a CMS block. You can insert any content (HTML, Text,
                                                    Images)
                                                    Here.
                                                </td>
                                                <td>This is a CMS block. You can insert any content (HTML, Text,
                                                    Images)
                                                    Here.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">Read
                                                            More</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">Read
                                                            More</a></strong></td>
                                                <td><strong><a class="btn btn-primary btn-sm" href="#">Read
                                                            More</a></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a href="blog.html">Blog</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-grid.html">Blog Grid</a></li>
                                    <li><a href="blog-detail.html">Single Post</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown"><a>Pages</a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a href="category.html">Category (Grid/List)</a></li>
                                    <li><a href="product.html">Product Page</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="compare.html">Product Compare</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="search.html">Search</a></li>
                                    <li><a href="manufacturer.html">Brands</a></li>
                                </ul>
                                <ul>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="elements.html">Elements</a></li>
                                    <li><a href="elements-forms.html">Forms</a></li>
                                    <li><a href="careers.html">Careers</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="404.html">404</a></li>
                                    <li><a href="sitemap.html">Sitemap</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="email-template" target="_blank">Email Template Page</a></li>
                                </ul>
                                <ul>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="order-history.html">Order History</a></li>
                                    <li><a href="order-information.html">Order Information</a></li>
                                    <li><a href="return.html">Return</a></li>
                                    <li><a href="gift-voucher.html">Gift Voucher</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="contact-link"><a href="contact-us.html">Contact Us</a></li>
                        <li class="custom-link-right"><a href="#" target="_blank">Special Offers</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <div id="container">
        <div class="container">
            <div class="row">
                <!--Middle Part Start-->
                <div id="content" class="col-xs-12">
                    <div class="row">
                        <div class="col-sm-8">
                            <!-- Slideshow Start-->
                            <div class="slideshow single-slider owl-carousel">
                                <div class="item"><a href="#"><img class="img-responsive"
                                                                   src="frontend/image/slider/banner-1-750x400.jpg'"
                                                                   alt="banner 1"/></a></div>
                                <div class="item"><a href="#"><img class="img-responsive"
                                                                   src="'frontend/image/slider/banner-2-750x400.jpg'"
                                                                   alt="banner 2"/></a></div>
                                <div class="item"><a href="#"><img class="img-responsive"
                                                                   src="'frontend/image/slider/banner-3-750x400.jpg'"
                                                                   alt="banner 3"/></a></div>
                            </div>
                            <!-- Slideshow End-->
                        </div>
                        <div class="col-sm-4 pull-right flip">
                            <div class="marketshop-banner">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="#"><img
                                                title="sample-banner1" alt="sample-banner1"
                                                src="frontend/image/banner/sp-small-banner-360x185.jpg"></a>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="#"><img
                                                title="sample-banner" alt="sample-banner"
                                                src="frontend/image/banner/sp-small-banner1-360x185.jpg"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bestsellers Product Start-->
                    <h3 class="subtitle">Bestsellers</h3>
                    <div class="owl-carousel product_carousel">
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/iphone_1-200x200.jpg" alt="iPhone5"
                                        title="iPhone5" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">iPhone5</a></h4>
                                <p class="price"> $123.20 </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span>
                                </button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Compare this Product"
                                            onClick="">
                                        <i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/canon_eos_5d_1-200x200.jpg"
                                        alt="Long Sleeve Shirt Fashion Men" title="Long Sleeve Shirt Fashion Men"
                                        class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">Long Sleeve Shirt Fashion Men</a></h4>
                                <p class="price"><span class="price-new">$98.00</span> <span
                                        class="price-old">$122.00</span> <span class="saving">-20%</span></p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span>
                                </button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Compare this Product"
                                            onClick="">
                                        <i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/samsung_tab_1-200x200.jpg"
                                        alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop"
                                        class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                <p class="price"><span class="price-new">$230.00</span> <span
                                        class="price-old">$241.99</span> <span class="saving">-5%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick="cart.add('49');">
                                    <span>Add to Cart</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Compare this Product"
                                            onClick="">
                                        <i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/sony_vaio_1-200x200.jpg"
                                        alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes"
                                        class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">Xitefun Causal Wear Fancy Shoes</a></h4>
                                <p class="price"><span class="price-new">$902.00</span> <span class="price-old">$1,202.00</span>
                                    <span class="saving">-25%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick="cart.add('46');">
                                    <span>Add to Cart</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Compare this Product"
                                            onClick="">
                                        <i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/macbook_1-200x200.jpg"
                                        alt="Ideapad Yoga 13-59341124 Laptop" title="Ideapad Yoga 13-59341124 Laptop"
                                        class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">Ideapad Yoga 13-59341124 Laptop</a></h4>
                                <p class="price"> $2.00 </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick="cart.add('43');">
                                    <span>Add to Cart</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Compare this Product"
                                            onClick="">
                                        <i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb clearfix">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/apple_cinema_30-200x200.jpg"
                                        alt="Brand Fashion Cotton T-Shirt" title="Brand Fashion Cotton T-Shirt"
                                        class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">Brand Fashion Cotton T-Shirt</a></h4>
                                <p class="price"><span class="price-new">$110.00</span><span
                                        class="price-old">$122.00</span><span class="saving">-10%</span></p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick="cart.add('42');">
                                    <span>Add to Cart</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to Wish List" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Compare this Product"
                                            onClick="">
                                        <i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Featured Product End-->
                    <!-- Banner Start-->
                    <div class="marketshop-banner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img
                                        title="Sample Banner 2"
                                        alt="Sample Banner 2"
                                        src="frontend/image/banner/sample-banner-3-360x360.jpg"></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img title="Sample Banner"
                                                                                               alt="Sample Banner"
                                                                                               src="frontend/image/banner/sample-banner-1-360x360.jpg"></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img
                                        title="Sample Banner 3"
                                        alt="Sample Banner 3"
                                        src="frontend/image/banner/sample-banner-2-360x360.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Banner End-->
                    <!-- Categories Product Slider Start-->
                    <div class="category-module" id="latest_category">
                        <h3 class="subtitle">Electronics - <a class="viewall" href="category.tpl">view all</a></h3>
                        <div class="category-module-content">
                            <ul id="sub-cat" class="tabs">
                                <li><a href="#tab-cat1">Laptops</a></li>
                                <li><a href="#tab-cat2">Desktops</a></li>
                                <li><a href="#tab-cat3">Cameras</a></li>
                                <li><a href="#tab-cat4">Mobile Phones</a></li>
                                <li><a href="#tab-cat5">TV &amp; Home Audio</a></li>
                                <li><a href="#tab-cat6">MP3 Players</a></li>
                            </ul>
                            <div id="tab-cat1" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/samsung_tab_1-200x200.jpg"
                                                    alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                            <p class="price"><span class="price-new">$230.00</span> <span
                                                    class="price-old">$241.99</span> <span class="saving">-5%</span></p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/macbook_pro_1-200x200.jpg"
                                                    alt=" Strategies for Acquiring Your Own Laptop "
                                                    title=" Strategies for Acquiring Your Own Laptop "
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html"> Strategies for Acquiring Your Own
                                                    Laptop </a>
                                            </h4>
                                            <p class="price"><span class="price-new">$1,400.00</span> <span
                                                    class="price-old">$1,900.00</span> <span class="saving">-26%</span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/macbook_air_1-200x200.jpg"
                                                    alt="Laptop Silver black" title="Laptop Silver black"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Laptop Silver black</a></h4>
                                            <p class="price"><span class="price-new">$1,142.00</span> <span
                                                    class="price-old">$1,202.00</span> <span class="saving">-5%</span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/macbook_1-200x200.jpg"
                                                    alt="Ideapad Yoga 13-59341124 Laptop"
                                                    title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive"/></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">Ideapad Yoga 13-59341124 Laptop</a></h4>
                                            <p class="price"> $2.00 </p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/ipod_shuffle_1-200x200.jpg"
                                                    alt="Hp Pavilion G6 2314ax Notebok Laptop"
                                                    title="Hp Pavilion G6 2314ax Notebok Laptop"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                                            <p class="price"> $122.00 </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/ipod_touch_1-200x200.jpg"
                                                    alt="Samsung Galaxy S4" title="Samsung Galaxy S4"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Samsung Galaxy S4</a></h4>
                                            <p class="price"><span class="price-new">$62.00</span> <span
                                                    class="price-old">$122.00</span> <span class="saving">-50%</span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cat2" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/ipod_shuffle_1-200x200.jpg"
                                                    alt="Hp Pavilion G6 2314ax Notebok Laptop"
                                                    title="Hp Pavilion G6 2314ax Notebok Laptop"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                                            <p class="price"> $122.00 </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cat3" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/FinePix-Long-Zoom-Camera-200x200.jpg"
                                                    alt="FinePix S8400W Long Zoom Camera"
                                                    title="FinePix S8400W Long Zoom Camera" class="img-responsive"/></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">FinePix S8400W Long Zoom Camera</a></h4>
                                            <p class="price"> $122.00 </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/nikon_d300_1-200x200.jpg"
                                                    alt="Digital Camera for Elderly" title="Digital Camera for Elderly"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Digital Camera for Elderly</a></h4>
                                            <p class="price"><span class="price-new">$92.00</span> <span
                                                    class="price-old">$98.00</span> <span class="saving">-6%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cat4" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/samsung_tab_1-200x200.jpg"
                                                    alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                            <p class="price"><span class="price-new">$230.00</span> <span
                                                    class="price-old">$241.99</span> <span class="saving">-5%</span></p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/iphone_1-200x200.jpg"
                                                    alt="iPhone5" title="iPhone5" class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">iPhone5</a></h4>
                                            <p class="price"> $123.20 </p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="'frontend/image/product/ipod_touch_1-200x200.jpg"
                                                    alt="Samsung Galaxy S4" title="Samsung Galaxy S4"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Samsung Galaxy S4</a></h4>
                                            <p class="price"><span class="price-new">$62.00</span> <span
                                                    class="price-old">$122.00</span> <span class="saving">-50%</span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/palm_treo_pro_1-200x200.jpg'"
                                                    alt="HTC M7 with Stunning Looks" title="HTC M7 with Stunning Looks"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">HTC M7 with Stunning Looks</a></h4>
                                            <p class="price"> $337.99 </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cat5" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/samsung_tab_1-200x200.jpg"
                                                    alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Aspire Ultrabook Laptop</a></h4>
                                            <p class="price"><span class="price-new">$230.00</span> <span
                                                    class="price-old">$241.99</span> <span class="saving">-5%</span></p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/ipod_classic_1-200x200.jpg"
                                                    alt="Portable Mp3 Player" title="Portable Mp3 Player"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Portable Mp3 Player</a></h4>
                                            <p class="price"> $122.00 </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/macbook_pro_1-200x200.jpg"
                                                    alt=" Strategies for Acquiring Your Own Laptop "
                                                    title=" Strategies for Acquiring Your Own Laptop "
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html"> Strategies for Acquiring Your Own
                                                    Laptop </a>
                                            </h4>
                                            <p class="price"><span class="price-new">$1,400.00</span> <span
                                                    class="price-old">$1,900.00</span> <span class="saving">-26%</span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/macbook_air_1-200x200.jpg"
                                                    alt="Laptop Silver black" title="Laptop Silver black"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Laptop Silver black</a></h4>
                                            <p class="price"><span class="price-new">$1,142.00</span> <span
                                                    class="price-old">$1,202.00</span> <span class="saving">-5%</span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/macbook_1-200x200.jpg"
                                                    alt="Ideapad Yoga 13-59341124 Laptop"
                                                    title="Ideapad Yoga 13-59341124 Laptop" class="img-responsive"/></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">Ideapad Yoga 13-59341124 Laptop</a></h4>
                                            <p class="price"> $2.00 </p>
                                            <div class="rating"><span class="fa fa-stack"><i
                                                        class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                        class="fa fa-star-o fa-stack-2x"></i></span> <span
                                                    class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                            </div>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/ipod_nano_1-200x200.jpg"
                                                    alt="Mp3 Player" title="Mp3 Player" class="img-responsive"/></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">Mp3 Player</a></h4>
                                            <p class="price"> $122.00 </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/FinePix-Long-Zoom-Camera-200x200.jpg"
                                                    alt="FinePix S8400W Long Zoom Camera"
                                                    title="FinePix S8400W Long Zoom Camera" class="img-responsive"/></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">FinePix S8400W Long Zoom Camera</a></h4>
                                            <p class="price"> $122.00 </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/ipod_shuffle_1-200x200.jpg"
                                                    alt="Hp Pavilion G6 2314ax Notebok Laptop"
                                                    title="Hp Pavilion G6 2314ax Notebok Laptop"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Hp Pavilion G6 2314ax Notebok Laptop</a></h4>
                                            <p class="price"> $122.00 </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="cart.add('34');">
                                                <span>Add to Cart</span>
                                            </button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick="wishlist.add('34');"><i class="fa fa-heart"></i>
                                                </button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick="compare.add('34');"><i class="fa fa-exchange"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/ipod_touch_1-200x200.jpg"
                                                    alt="Samsung Galaxy S4" title="Samsung Galaxy S4"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Samsung Galaxy S4</a></h4>
                                            <p class="price"><span class="price-new">$62.00</span> <span
                                                    class="price-old">$122.00</span> <span class="saving">-50%</span>
                                            </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/nikon_d300_1-200x200.jpg"
                                                    alt="Digital Camera for Elderly" title="Digital Camera for Elderly"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Digital Camera for Elderly</a></h4>
                                            <p class="price"><span class="price-new">$92.00</span> <span
                                                    class="price-old">$98.00</span> <span class="saving">-6%</span></p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cat6" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/ipod_classic_1-200x200.jpg"
                                                    alt="Portable Mp3 Player" title="Portable Mp3 Player"
                                                    class="img-responsive"/></a></div>
                                        <div class="caption">
                                            <h4><a href="product.html">Portable Mp3 Player</a></h4>
                                            <p class="price"> $122.00 </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="cart.add('48');">
                                                <span>Add to Cart</span>
                                            </button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-thumb">
                                        <div class="image"><a href="product.html"><img
                                                    src="frontend/image/product/ipod_nano_1-200x200.jp"
                                                    alt="Mp3 Player" title="Mp3 Player" class="img-responsive"/></a>
                                        </div>
                                        <div class="caption">
                                            <h4><a href="product.html">Mp3 Player</a></h4>
                                            <p class="price"> $122.00 </p>
                                        </div>
                                        <div class="button-group">
                                            <button class="btn-primary" type="button" onClick="">
                                                <span>Add to Cart</span></button>
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                                        onClick=""><i class="fa fa-heart"></i></button>
                                                <button type="button" data-toggle="tooltip" title="Add to compare"
                                                        onClick=""><i class="fa fa-exchange"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Categories Product Slider End-->
                    <!-- Categories Product Slider Start -->
                    <h3 class="subtitle">Health &amp; Beauty - <a class="viewall" href="category.html">view all</a>
                    </h3>
                    <div class="owl-carousel latest_category_carousel">
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/iphone_6-200x200.jpg"
                                        alt="Hair Care Cream for Men" title="Hair Care Cream for Men"
                                        class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">Hair Care Cream for Men</a></h4>
                                <p class="price"> $134.00 </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span>
                                </button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i
                                            class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/nikon_d300_5-200x200.jpg"
                                        alt="Hair Care Products" title="Hair Care Products" class="img-responsive"/></a>
                            </div>
                            <div class="caption">
                                <h4><a href="product.html">Hair Care Products</a></h4>
                                <p class="price"><span class="price-new">$66.80</span> <span
                                        class="price-old">$90.80</span> <span class="saving">-27%</span></p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span>
                                </button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i
                                            class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/nikon_d300_4-200x200.jpg"
                                        alt="Bed Head Foxy Curls Contour Cream"
                                        title="Bed Head Foxy Curls Contour Cream" class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">Bed Head Foxy Curls Contour Cream</a></h4>
                                <p class="price"> $88.00 </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span>
                                </button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i
                                            class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href=""><img
                                        src="frontend/image/product/macbook_5-200x200.jpg"
                                        alt="Shower Gel Perfume for Women" title="Shower Gel Perfume for Women"
                                        class="img-responsive"/></a></div>
                            <div class="caption">
                                <h4><a href="product.html">Shower Gel Perfume for Women</a></h4>
                                <p class="price"><span class="price-new">$95.00</span> <span
                                        class="price-old">$99.00</span> <span class="saving">-4%</span></p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick="cart.add('61');">
                                    <span>Add to Cart</span></button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to wishlist"
                                            onClick="wishlist.add('61');"><i class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Add to compare"
                                            onClick="compare.add('61');"><i class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/macbook_4-200x200.jpg"
                                        alt="Perfumes for Women" title="Perfumes for Women" class="img-responsive"/></a>
                            </div>
                            <div class="caption">
                                <h4><a href="product.html">Perfumes for Women</a></h4>
                                <p class="price"> $85.00 </p>
                                <div class="rating"><span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i
                                            class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                            class="fa fa-star-o fa-stack-2x"></i></span></div>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span>
                                </button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i
                                            class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/macbook_3-200x200.jpg"
                                        alt="Make Up for Naturally Beautiful Better"
                                        title="Make Up for Naturally Beautiful Better" class="img-responsive"/></a>
                            </div>
                            <div class="caption">
                                <h4><a href="product.html">Make Up for Naturally Beautiful Better</a></h4>
                                <p class="price"> $123.00 </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span>
                                </button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i
                                            class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="product-thumb">
                            <div class="image"><a href="product.html"><img
                                        src="frontend/image/product/macbook_2-200x200.jpg'"
                                        alt="Pnina Tornai Perfume" title="Pnina Tornai Perfume" class="img-responsive"/></a>
                            </div>
                            <div class="caption">
                                <h4><a href="product.html">Pnina Tornai Perfume</a></h4>
                                <p class="price"> $110.00 </p>
                            </div>
                            <div class="button-group">
                                <button class="btn-primary" type="button" onClick=""><span>Add to Cart</span>
                                </button>
                                <div class="add-to-links">
                                    <button type="button" data-toggle="tooltip" title="Add to wishlist" onClick="">
                                        <i
                                            class="fa fa-heart"></i></button>
                                    <button type="button" data-toggle="tooltip" title="Add to compare" onClick=""><i
                                            class="fa fa-exchange"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Categories Product Slider End -->
                    <!-- Banner Start -->
                    <div class="marketshop-banner">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="#"><img
                                        title="1 Block Banner"
                                        alt="1 Block Banner"
                                        src="image/banner/1blockbanner-1140x75.jpg"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Banner End -->
                    <!-- Brand Logo Carousel Start-->
                    <div id="carousel" class="owl-carousel nxt">
                        <div class="item text-center"><a href="#"><img
                                    src="frontend/image/product/apple_logo-100x100.jpg" alt="Palm"
                                    class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img
                                    src="frontend/image/product/canon_logo-100x100.jpg" alt="Sony"
                                    class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img
                                    src="frontend/image/product/apple_logo-100x100.jpg" alt="Canon"
                                    class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img
                                    src="frontend/image/product/canon_logo-100x100.jpg" alt="Apple"
                                    class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img
                                    src="frontend/image/product/apple_logo-100x100.jpg" alt="HTC"
                                    class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img
                                    src="frontend/image/product/canon_logo-100x100.jpg"
                                    alt="Hewlett-Packard" class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img
                                    src="frontend/image/product/apple_logo-100x100.jpg" alt="brand"
                                    class="img-responsive"/></a></div>
                        <div class="item text-center"><a href="#"><img
                                    src="frontend/image/product/canon_logo-100x100.jpg" alt="brand1"
                                    class="img-responsive"/></a></div>
                    </div>
                    <!-- Brand Logo Carousel End -->
                </div>
                <!--Middle Part End-->
            </div>
        </div>
    </div>

    <div class="container">
        <div class="custom-feature-box row">
            <div class="col-sm-4 col-xs-12">
                <div class="feature-box fbox_1">
                    <div class="title">Free Shipping</div>
                    <p>Free shipping on order over $1000</p>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="feature-box fbox_3">
                    <div class="title">Gift Cards</div>
                    <p>Give the special perfect gift</p>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="feature-box fbox_4">
                    <div class="title">Reward Points</div>
                    <p>Earn and spend with ease</p>
                </div>
            </div>
        </div>
    </div>



@endsection


