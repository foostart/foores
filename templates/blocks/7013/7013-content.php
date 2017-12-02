<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="modul-7013">
    <div class="modul-7013">
        <div class="row m7013-tabs-all">
            <div class="col-md-12 col-sm-12 col-xs-12">
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
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/1.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/2.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/3.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/4.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/14.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/6.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/7.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  

                </div>
                <div class="tab-pane" id="salads">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/9.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/10.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/11.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/12.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                </div>
                <div class="tab-pane" id="soups">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/13.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/14.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/15.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/16.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                </div>
                <div class="tab-pane" id="main">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/17.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/18.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/19.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/20.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div> 
                </div>
                <div class="tab-pane" id="desserts">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/21.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/22.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/23.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/24.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  

                </div>
                <div class="tab-pane" id="breakfast">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/25.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/26.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/27.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/28.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                </div>
                <div class="tab-pane" id="drinks">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/29.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/30.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/31.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/32.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                </div>
                <div class="tab-pane" id="accessories">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  
                      <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/34.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  

                      <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/35.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  

                      <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <div class="product">
                            <a href="#"></a>
                            <div class="productimg">
                                <img src="images/36.jpg" alt=""/>
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

                            <p class="price">£5.00</p>

                        </div>
                    </div>  


                </div>
            </div>
        </div>
    </div>
</div>
