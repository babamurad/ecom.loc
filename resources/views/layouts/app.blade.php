<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - Surfside Media</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/imgs/theme/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    @livewireStyles
</head>

<body>
<header class="header-area header-style-1 header-height-2">
    <div class="header-top header-top-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info">
                        <ul>
                            <li>
                                <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                <ul class="language-dropdown">
                                    <li><a href="#"><img src="{{ asset('assets/imgs/theme/flag-fr.png') }}" alt="">Français</a></li>
                                    <li><a href="#"><img src="{{ asset('assets/imgs/theme/flag-dt.png') }}" alt="">Deutsch</a></li>
                                    <li><a href="#"><img src="{{ asset('assets/imgs/theme/flag-ru.png') }}" alt="">Pусский</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4">
                    <div class="text-center">
                        <div id="news-flash" class="d-inline-block">
                            <ul>
                                <li>Get great devices up to 50% off <a href="shop.html">View details</a></li>
                                <li>Supper Value Deals - Save more with coupons</li>
                                <li>Trendy 25silver jewelry, save up 35% off today <a href="shop.html">Shop now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="header-info header-info-right">
                        @auth
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="#"> {{ auth()->user()->name }}</a>   /
                                    <form method="post" action="#">
                                        @csrf
                                        <a href="{{ route('logout') }}">Logout</a>
                                    </form>
                                </li>
                            </ul>
                        @else
                            <ul>
                                <li><i class="fi-rs-key"></i><a href="{{ route('login') }}">Log In </a>  / <a href="{{ route('register.create') }}">Sign Up</a></li>
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
        <div class="container">
            <div class="header-wrap">
                <div class="logo logo-width-1">
                    <a href="{{ route('home') }}"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                </div>
                <div class="header-right">
                    @livewire('header-search-component')
                    <div class="header-action-right">
                        <div class="header-action-2">
                        @livewire('wishlist-icon-component')
                        @livewire('cart-icon-component')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom header-bottom-bg-color sticky-bar">
        <div class="container">
            <div class="header-wrap header-space-between position-relative">
                <div class="logo logo-width-1 d-block d-lg-none">
                    <a href="index.html"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                </div>
                <div class="header-nav d-none d-lg-flex">
                    <div class="main-categori-wrap d-none d-lg-block">
                        <a class="categori-button-active" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-large">
                            <ul>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-dress"></i>Women's Clothing</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Trending</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Dresses</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Blouses & Shirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Hoodies & Sweatshirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Women's Sets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suits & Blazers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Bodysuits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Tanks & Camis</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Coats & Jackets</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Bottoms</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Leggings</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Skirts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Shorts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Jeans</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Pants & Capris</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Bikini Sets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Swimwear</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{ asset('assets/imgs/banner/menu-banner-2.jpg') }}" alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="{{ asset('assets/imgs/banner/menu-banner-3.jpg') }}" alt="menu_banner2">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Hot Deals</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-tshirt"></i>Men's Clothing</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Jackets & Coats</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Down Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Parkas</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Faux Leather Coats</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Trench</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wool & Blends</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Vests & Waistcoats</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Leather Coats</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Suits & Blazers</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Blazers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suit Jackets</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suit Pants</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Suits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Vests</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Tailor-made Suits</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{ asset('assets/imgs/banner/menu-banner-4.jpg') }}" alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="has-children">
                                    <a href="shop.html"><i class="surfsidemedia-font-smartphone"></i> Cellphones</a>
                                    <div class="dropdown-menu">
                                        <ul class="mega-menu d-lg-flex">
                                            <li class="mega-menu-col col-lg-7">
                                                <ul class="d-lg-flex">
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Hot & Trending</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Cellphones</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">iPhones</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Refurbished Phones</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone Parts</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Phone Bags & Cases</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Communication Equipments</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Walkie Talkie</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-col col-lg-6">
                                                        <ul>
                                                            <li><span class="submenu-title">Accessories</span></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Screen Protectors</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wire Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Wireless Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Car Chargers</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Power Bank</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Armbands</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Dust Plug</a></li>
                                                            <li><a class="dropdown-item nav-link nav_item" href="#">Signal Boosters</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-col col-lg-5">
                                                <div class="header-banner2">
                                                    <img src="{{ asset('assets/imgs/banner/menu-banner-5.jpg') }}" alt="menu_banner1">
                                                    <div class="banne_info">
                                                        <h6>10% Off</h6>
                                                        <h4>New Arrival</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="header-banner2">
                                                    <img src="{{ asset('assets/imgs/banner/menu-banner-6.jpg') }}" alt="menu_banner2">
                                                    <div class="banne_info">
                                                        <h6>15% Off</h6>
                                                        <h4>Hot Deals</h4>
                                                        <a href="#">Shop now</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-desktop"></i>Computer & Office</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-cpu"></i>Consumer Electronics</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-diamond"></i>Jewelry & Accessories</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-home"></i>Home & Garden</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-high-heels"></i>Shoes</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-teddy-bear"></i>Mother & Kids</a></li>
                                <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-kite"></i>Outdoor fun</a></li>
                                <li>
                                    <ul class="more_slide_open" style="display: none;">
                                        <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-desktop"></i>Beauty, Health</a></li>
                                        <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-cpu"></i>Bags and Shoes</a></li>
                                        <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-diamond"></i>Consumer Electronics</a></li>
                                        <li><a href="{{ route('shop') }}"><i class="surfsidemedia-font-home"></i>Automobiles & Motorcycles</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="more_categories">Show more...</div>
                        </div>
                    </div>
                    <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                        <nav>
                            <ul>
                                <li><a href="/" class="{{ request()->is('/') ? 'active' : null}}">Home</a></li>
                                <li><a href="{{ route('about') }}" class="{{ request()->is('about') ? 'active' : null}}">About</a></li>
                                <li><a href="{{ route('shop') }}" class="{{ request()->is('shop') ? 'active' : null}}">Shop</a></li>
                                <li class="position-static"><a href="#">Our Collections <i class="fi-rs-angle-down"></i></a>
                                    <ul class="mega-menu">
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Women's Fashion</a>
                                            <ul>
                                                <li><a href="product-details.html">Dresses</a></li>
                                                <li><a href="product-details.html">Blouses & Shirts</a></li>
                                                <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                                <li><a href="product-details.html">Wedding Dresses</a></li>
                                                <li><a href="product-details.html">Prom Dresses</a></li>
                                                <li><a href="product-details.html">Cosplay Costumes</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Men's Fashion</a>
                                            <ul>
                                                <li><a href="product-details.html">Jackets</a></li>
                                                <li><a href="product-details.html">Casual Faux Leather</a></li>
                                                <li><a href="product-details.html">Genuine Leather</a></li>
                                                <li><a href="product-details.html">Casual Pants</a></li>
                                                <li><a href="product-details.html">Sweatpants</a></li>
                                                <li><a href="product-details.html">Harem Pants</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-22">
                                            <a class="menu-title" href="#">Technology</a>
                                            <ul>
                                                <li><a href="product-details.html">Gaming Laptops</a></li>
                                                <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                                <li><a href="product-details.html">Tablets</a></li>
                                                <li><a href="product-details.html">Laptop Accessories</a></li>
                                                <li><a href="product-details.html">Tablet Accessories</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-mega-menu sub-mega-menu-width-34">
                                            <div class="menu-banner-wrap">
                                                <a href="product-details.html"><img src="{{ asset('assets/imgs/banner/menu-banner.jpg') }}" alt="Surfside Media"></a>
                                                <div class="menu-banner-content">
                                                    <h4>Hot deals</h4>
                                                    <h3>Don't miss<br> Trending</h3>
                                                    <div class="menu-banner-price">
                                                        <span class="new-price text-success">Save to 50%</span>
                                                    </div>
                                                    <div class="menu-banner-btn">
                                                        <a href="product-details.html">Shop now</a>
                                                    </div>
                                                </div>
                                                <div class="menu-banner-discount">
                                                    <h3>
                                                        <span>35%</span>
                                                        off
                                                    </h3>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('blog') }}" class="{{ request()->is('blog') ? 'active' : null}}">Blog </a></li>
                                <li><a href="{{ route('contact') }}" class="{{ request()->is('contact') ? 'active' : null}}">Contact</a></li>
                                @auth
                                <li><a href="#">My Account<i class="fi-rs-angle-down"></i></a>
                                        @if(Auth::user()->utype == 'ADM')
                                    <ul class="sub-menu">
                                        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{ route('admin.categories') }}">Categories</a></li>
                                        <li><a href="{{ route('admin.products') }}">Products</a></li>
                                        <li><a href="{{ route('admin.home.slider') }}">Manage Slider</a></li>
                                        <li><a href="{{ route('admin.contact') }}">Contact Messages</a></li>
                                        <li><a href="#">Coupons</a></li>
                                        <li><a href="{{ route('admin.orders') }}">Orders</a></li>
                                        <li><a href="#">Customers</a></li>
                                        <li><a href="#">Logout</a></li>
                                    </ul>
                                        @else
                                        <ul class="sub-menu">
                                            <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                            <li><a href="{{ route('orders') }}">My Orders</a></li>
                                        </ul>
                                        @endif
                                </li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="hotline d-none d-lg-block">
                    <p><i class="fi-rs-smartphone"></i><span>Toll Free</span> (+993) 65-86-58-81 </p>
                </div>
                <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                <div class="header-action-right d-block d-lg-none">
                    <div class="header-action-2">
                        <div class="header-action-icon-2">
                            <a href="shop-wishlist.php">
                                <img alt="Surfside Media" src="{{ asset('assets/imgs/theme/icons/icon-heart.svg') }}">
                                <span class="pro-count white">4</span>
                            </a>
                        </div>
                        <div class="header-action-icon-2">
                            <a class="mini-cart-icon" href="cart.html">
                                <img alt="Surfside Media" src="{{ asset('assets/imgs/theme/icons/icon-cart.svg') }}">
                                <span class="pro-count white">2</span>
                            </a>
                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                <ul>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="product-details.html"><img alt="Surfside Media" src="{{ asset('assets/imgs/shop/thumbnail-3.jpg') }}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="product-details.html">Plain Striola Shirts</a></h4>
                                            <h3><span>1 × </span>$800.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="shopping-cart-img">
                                            <a href="product-details.html"><img alt="Surfside Media" src="{{ asset('assets/imgs/shop/thumbnail-4.jpg') }}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="product-details.html">Macbook Pro 2022</a></h4>
                                            <h3><span>1 × </span>$3500.00</h3>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                <div class="shopping-cart-footer">
                                    <div class="shopping-cart-total">
                                        <h4>Total <span>$383.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-button">
                                        <a href="cart.html">View cart</a>
                                        <a href="shop-checkout.php">Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="header-action-icon-2 d-block d-lg-none">
                            <div class="burger-icon burger-icon-white">
                                <span class="burger-icon-top"></span>
                                <span class="burger-icon-mid"></span>
                                <span class="burger-icon-bottom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-menu">
    <ul>
        <li>
            <a href="/" class="{{ request()->is('/') ? 'active' : null}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="#7E7A7A" height="48" width="48">
                    <path  d="M12 2.0996094L1 12L4 12L4 21L11 21L11 15L13 15L13 21L20 21L20 12L23 12L12 2.0996094 z M 12 4.7910156L18 10.191406L18 11L18 19L15 19L15 13L9 13L9 19L6 19L6 10.191406L12 4.7910156 z" />
                </svg>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="{{ route('shop') }}" class="{{ request()->is('shop') ? 'active' : null}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="#7E7A7A">
                    <path d="M2 5L2 7L22 7L22 5L2 5 z M 2 11L2 13L22 13L22 11L2 11 z M 2 17L2 19L22 19L22 17L2 17 z" />
                </svg>
                <span>Category</span>
            </a>
        </li>
        <li>
            <a href="{{ route('shop.cart') }}" class="{{ request()->is('cart') ? 'active' : null}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="#7E7A7A">
                    <path d="M4.4140625 1.9960938L1.0039062 2.0136719L1.0136719 4.0136719L3.0839844 4.0039062L6.3789062 11.908203L5.1816406 13.824219C4.7816406 14.464219 4.7609531 15.272641 5.1269531 15.931641C5.4929531 16.590641 6.1874063 17 6.9414062 17L19 17L19 15L6.9414062 15L6.8769531 14.882812L8.0527344 13L15.521484 13C16.248484 13 16.917531 12.604703 17.269531 11.970703L20.873047 5.4863281C21.046047 5.1763281 21.041328 4.7981875 20.861328 4.4921875C20.681328 4.1871875 20.352047 4 19.998047 4L5.25 4L4.4140625 1.9960938 z M 6.0820312 6L18.298828 6L15.521484 11L8.1660156 11L6.0820312 6 z M 7 18 A 2 2 0 0 0 5 20 A 2 2 0 0 0 7 22 A 2 2 0 0 0 9 20 A 2 2 0 0 0 7 18 z M 17 18 A 2 2 0 0 0 15 20 A 2 2 0 0 0 17 22 A 2 2 0 0 0 19 20 A 2 2 0 0 0 17 18 z" />
                </svg>
                <span>Cart</span>
            </a>
        </li>
        <li>
            <a href="{{ route('shop.wishlist') }}" class="{{ request()->is('wishlist') ? 'active' : null}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="#7E7A7A">
                    <path d="M16.5,3C13.605,3,12,5.09,12,5.09S10.395,3,7.5,3C4.462,3,2,5.462,2,8.5c0,4.171,4.912,8.213,6.281,9.49 C9.858,19.46,12,21.35,12,21.35s2.142-1.89,3.719-3.36C17.088,16.713,22,12.671,22,8.5C22,5.462,19.538,3,16.5,3z M14.811,16.11 c-0.177,0.16-0.331,0.299-0.456,0.416c-0.751,0.7-1.639,1.503-2.355,2.145c-0.716-0.642-1.605-1.446-2.355-2.145 c-0.126-0.117-0.28-0.257-0.456-0.416C7.769,14.827,4,11.419,4,8.5C4,6.57,5.57,5,7.5,5c1.827,0,2.886,1.275,2.914,1.308L12,8 l1.586-1.692C13.596,6.295,14.673,5,16.5,5C18.43,5,20,6.57,20,8.5C20,11.419,16.231,14.827,14.811,16.11z" />
                </svg>
                <span>Wishlist</span>
            </a>
        </li>
        <li>
             <a href="{{ route('orders') }}" class="{{ request()->is('orders') ? 'active' : null}}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" fill="#7E7A7A">
                    <path d="M12 3C9.794 3 8 4.794 8 7C8 9.206 9.794 11 12 11C14.206 11 16 9.206 16 7C16 4.794 14.206 3 12 3 z M 12 5C13.103 5 14 5.897 14 7C14 8.103 13.103 9 12 9C10.897 9 10 8.103 10 7C10 5.897 10.897 5 12 5 z M 9.4355469 14.263672C6.4565469 14.814672 3 16.228 3 18.5L3 21L21 21L21 18.5C21 16.228 17.543453 14.813672 14.564453 14.263672L12 16.828125L9.4355469 14.263672 z M 8.7929688 16.449219L10.585938 18.242188L11.34375 19L5 19L5 18.5C5 18.071 6.2989688 17.074219 8.7929688 16.449219 z M 15.207031 16.449219C17.701031 17.074219 19 18.071 19 18.5L19 19L12.65625 19L13.414062 18.242188L15.207031 16.449219 z" />
                </svg>
                <span>Account</span>
            </a>
        </li>
    </ul>
</div>
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.html"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> Browse Categories
                    </a>
{{--                    //Categories--}}
                    @livewire('categories-component')
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="index.html">Home</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop.html">shop</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Our Collections</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Dresses</a></li>
                                        <li><a href="product-details.html">Blouses & Shirts</a></li>
                                        <li><a href="product-details.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-details.html">Women's Sets</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Jackets</a></li>
                                        <li><a href="product-details.html">Casual Faux Leather</a></li>
                                        <li><a href="product-details.html">Genuine Leather</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Technology</a>
                                    <ul class="dropdown">
                                        <li><a href="product-details.html">Gaming Laptops</a></li>
                                        <li><a href="product-details.html">Ultraslim Laptops</a></li>
                                        <li><a href="product-details.html">Tablets</a></li>
                                        <li><a href="product-details.html">Laptop Accessories</a></li>
                                        <li><a href="product-details.html">Tablet Accessories</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="blog.html">Blog</a></li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="contact.html"> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="login.html">Log In </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="register.html">Sign Up</a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="tel:+99365865881">(+993) 65-86-58-81 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a>
                <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-youtube.svg') }}" alt=""></a>
            </div>
        </div>
    </div>
</div>

@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

{{ $slot }}


<footer class="main">
    <section class="newsletter p-30 text-white wow fadeIn animated">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col flex-horizontal-center">
                            <img class="icon-email" src="{{ asset('assets/imgs/theme/icons/icon-email.svg') }}" alt="">
                            <h4 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h4>
                        </div>
                        <div class="col my-4 my-md-0 des">
                            <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$25 coupon for first shopping.</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="form-subcriber d-flex wow fadeIn animated">
                        <input type="email" class="form-control bg-white font-small" placeholder="Enter your email">
                        <button class="btn bg-dark text-white" type="submit">Subscribe</button>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </section>
    <section class="section-padding footer-mid">
        <div class="container pt-15 pb-20">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget-about font-md mb-md-5 mb-lg-0">
                        <div class="logo logo-width-1 wow fadeIn animated">
                            <a href="index.html"><img src="{{ asset('assets/imgs/logo/logo.png') }}" alt="logo"></a>
                        </div>
                        <h5 class="mt-20 mb-10 fw-600 text-grey-4 wow fadeIn animated">Contact</h5>
                        <p class="wow fadeIn animated">
                            <strong>Address: </strong>562 Wellington Road
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Phone: </strong>+993 65-86-58-81
                        </p>
                        <p class="wow fadeIn animated">
                            <strong>Email: </strong>contact@surfsidemedia.tkm
                        </p>
                        <h5 class="mb-10 mt-30 fw-600 text-grey-4 wow fadeIn animated">Follow Us</h5>
                        <div class="mobile-social-icon wow fadeIn animated mb-sm-5 mb-md-0">
                            <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-facebook.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-twitter.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-instagram.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-pinterest.svg') }}" alt=""></a>
                            <a href="#"><img src="{{ asset('assets/imgs/theme/icons/icon-youtube.svg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <h5 class="widget-title wow fadeIn animated">About</h5>
                    <ul class="footer-list wow fadeIn animated mb-sm-5 mb-md-0">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('term.conditions') }}">Terms &amp; Conditions</a></li>
                        <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-3">
                    <h5 class="widget-title wow fadeIn animated">My Account</h5>

                    <ul class="footer-list wow fadeIn animated">
                        <li><a href="#">My Account</a></li>
                        <li><a href="{{ route('shop.cart') }}">View Cart</a></li>
                        <li><a href="{{ route('shop.wishlist') }}">My Wishlist</a></li>
                        <li><a href="#">Track My Order</a></li>
                        <li><a href="{{ route('orders') }}">Orders</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mob-center">
                    <h5 class="widget-title wow fadeIn animated">Install App</h5>
                    <div class="row">
                        <div class="col-md-8 col-lg-12">
                            <p class="wow fadeIn animated">From App Store or Google Play</p>
                            <div class="download-app wow fadeIn animated mob-app">
                                <a href="#" class="hover-up mb-sm-4 mb-lg-0"><img class="active" src="{{ asset('assets/imgs/theme/app-store.jpg') }}" alt=""></a>
                                <a href="#" class="hover-up"><img src="{{ asset('assets/imgs/theme/google-play.jpg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-12 mt-md-3 mt-lg-0">
                            <p class="mb-20 wow fadeIn animated">Secured Payment Gateways</p>
                            <img class="wow fadeIn animated" src="{{ asset('assets/imgs/theme/payment-method.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container pb-20 wow fadeIn animated mob-center">
        <div class="row">
            <div class="col-12 mb-20">
                <div class="footer-bottom"></div>
            </div>
            <div class="col-lg-6">
                <p class="float-md-left font-sm text-muted mb-0">
                    <a href="{{ route('privacy.policy') }}">Privacy Policy</a> | <a href="{{ route('term.conditions') }}">Terms & Conditions</a>
                </p>
            </div>
            <div class="col-lg-6">
                <p class="text-lg-end text-start font-sm text-muted mb-0">
                    &copy; <strong class="text-brand">SurfsideMedia</strong> All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Vendor JS-->
<script src="{{ asset('assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('assets/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('assets/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.vticker-min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.theia.sticky.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.elevatezoom.js') }}"></script>
<!-- Template  JS -->
<script src="{{ asset('assets/js/main.js?v=3.3') }}"></script>
<script src="{{ asset('assets/js/shop.js?v=3.3') }}"></script>
@livewireScripts
@stack('scripts')
</body>

</html>
