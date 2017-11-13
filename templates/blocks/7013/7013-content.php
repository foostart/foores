<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <body>
        <div class="modul-7">

            <div class="modul-7">

                <div class="row m7-tabs-all">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#all" data-toggle="tab">All</a></li>
                        <li><a href="#salads" data-toggle="tab">Salads</a></li>
                        <li><a href="#soups" data-toggle="tab">Soups</a></li>
                        <li><a href="#main" data-toggle="tab">Main</a></li>
                        <li><a href="#desserts" data-toggle="tab">Desserts</a></li>
                        <li><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                        <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
                        <li><a href="#accessories" data-toggle="tab">Accessories</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="all">
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/Meat-3-800x615.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/Brunch-2-800x615.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/Seafood-2-800x615.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/sushi-1-800x615.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="salads">
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/sushi-1-800x615.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-4-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/desserts-1-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-7-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="soups">
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/drink-7-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-5-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/main-5-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/main-1-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="main">
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/desserts-2-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/drink-7-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/drink-6-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/drink-2-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="desserts">
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-5-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-8-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-7-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-6-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="breakfast">
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/main-10-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/main-5-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/main-3-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/main-3-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="drinks">
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/desserts-8-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/desserts-1-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/desserts-3-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/desserts-4-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="accessories">
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-6-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-2-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-10-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-3 tab-content-pic">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="images/breakfast-9-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">CAPPUCCINO</a>
                                        <a href="#">COFFEE</a>
                                    </span>
                                    <a href="#">
                                        <h3>Mix of Croissants Breakfast</h3> 
                                    </a>
                                    <span class="price">
                                        <p>£5.00</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>