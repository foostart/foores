<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

        <div class="module-17">
            <div class="row">
                <div class="limit-wapper">
                    <h5 class="textmid">Related</h5>
                    <ul>
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="image/salad.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BIO</a>
                                        <a href="#">GOURMET</a>
                                        <a href="#">HEALTHY</a>
                                        <a href="#">ORGANIC</a>
                                        <a href="#">SALAD</a>
                                    </span>
                                    <a href="#">
                                        <h3>Carrot, Orange and Sesame Salad</h3> 
                                    </a>
                                    <span class="price">
                                        £15.00
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="image/breakfast-2-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BIO</a>
                                        <a href="#">BREAKFAST</a>
                                        <a href="#">HONEY</a>
                                        <a href="#">SWEET</a>
                                    </span>
                                    <a href="#">
                                        <h3>Skinny Blueberry Buttermilk Muffins</h3> 
                                    </a>
                                    <span class="price">
                                        £9.99
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="image/salad-6-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BIO</a>
                                        <a href="#">HEALTHY</a>
                                        <a href="#">SALAD</a>
                                    </span>
                                    <a href="#">
                                        <h3>Hot Red Carpet</h3> 
                                    </a>
                                    <span class="price">
                                        £16.00
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="image/desserts-6-300x233.jpg" alt=""/>
                                    </div>
                                    <div class="addtocart">
                                        <a href="#">Add to Cart</a>
                                    </div>
                                    <h5>Home Chef</h5>
                                    <span class="tagged">
                                        <a href="#">BIO</a>
                                        <a href="#">DESSERT</a>
                                        <a href="#">HEALTHY</a>
                                    </span>
                                    <a href="#">
                                        <h3>Raw Blueberry Cheesecake (Vegan)</h3> 
                                    </a>
                                    <span class="price">
                                        £6.99
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>