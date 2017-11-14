<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
     <header>
            <!--NAVIGATOR-->
            <div class="m12-navi-boder">
                <div class="m12-navi">
                    <div class="m12-navi-logo">
                        <a href="#">Délicious</a>
                    </div>
                    <div class="m12-navi-menus toggle-transition">
                        <ul>
                            <li>
                                <a href="#">Homes</a>
                                <ul class="m12-navi-menus-subMenu">
                                    <li><a href="#" >Gourmet</a></li>
                                    <li><a href="#" class="m12-navi-menus-Activity">Coffee</a></li>
                                    <li><a href="#">Sushi</a></li>
                                </ul>

                            </li>
                            <li>
                                <a href="#">About</a>
                                <ul class="m12-navi-menus-subMenu">
                                    <li><a href="#">People</a></li>
                                    <li><a href="#">Guestbook</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Menu</a>
                                <ul class="m12-navi-menus-subMenu">
                                    <li><a href="#">Expressive</a></li>
                                    <li><a href="#">Handsome</a></li>
                                    <li><a href="#">Classic</a></li>
                                    <li><a href="#">Gallery</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Reservation</a></li>
                            <li>
                                <a href="#">Gallery</a>
                                <ul class="m12-navi-menus-subMenu">
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Coffee Shop</a></li>
                                    <li><a href="#">Sushi Bar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                                <ul class="m12-navi-menus-subMenu">
                                    <li><a href="#">Healthy Food</a></li>
                                    <li><a href="#">Recipes</a></li>
                                    <li><a href="#">Cooking</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Features</a>
                                <ul class="m12-navi-menus-subMenu">
                                    <li><a href="#">Why Buy?</a></li>
                                    <li><a href="#">Theme Options</a></li>
                                    <li><a href="#">Coming Soon</a></li>
                                    <li>
                                        <a>Blog post  ></a>
                                        <ul class="m12-navi-menus-subMenu-1">
                                            <li><a href="#">No Sidebar</a></li>
                                            <li><a href="#">Left Sidebar</a></li>
                                            <li><a href="#">Right Sidebar</a></li>
                                            <li><a href="#">Left &amp; Right Sidebar</a></li>
                                            <li><a href="#">Top Widgets</a></li> 
                                        </ul>
                                    </li>
                                    <li><a href="#">Icons</a></li>
                                </ul>
                            </li>
                            <li><a href="#" class="m12-navi-menus-Activity">Shop</a></li>
                            <li><a href="#">Contact</a></li>

                        </ul>
                    </div>
                    <div class="m12-navi-icon">
                        <div class="m12-navi-icon-cart">
                            <a class="m12-navi-cart-icon" href="#">
                                <span class="icon"></span>
                                <span class="products cart-empty">0</span>
                            </a>
                            <div class="m12-widget_shopping_cart">
                                <ul class="m12-cart_list">
                                    <li class="empty">No products in the cart.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="m12-navi-icon-search">
                            <button class="m12-search-btn"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="m12-navi-icon-mobile-btn">
                            <i class="fa fa-reorder"></i>
                        </div>
                    </div>
                </div>
            </div>
                                <!--SLIDE SHOW-->
            <div class="m12-banner">

                <div class="m12-banner-img">
                    <div class="m12-text-shadow"></div>
                    <div class="m12-banner-caption">
                        <h1>Shop</h1>
                        <div class="m12-banner-caption-line"></div>
                        <div class="m12-banner-caption-desc">Pure natural food</div>
                    </div>
                </div>

        </header>