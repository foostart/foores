    <?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
    ?>
         <header>
                <!--Banner-->                     
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
                            <div class="tab-pane active" id="all">
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
                                            <a href="#">BIO</a>
                                            <a href="#">BREAKFAST</a>
                                            <a href="#">GOURMET</a>
                                            <a href="#">SWEET</a>
                                        </span>
                                        <a href="#">
                                            <h3> Almond Cookies Breakfast</h3> 
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
                                           <a href="#">BIO</a>
                                            <a href="#">BREAKFAST</a>
                                            <a href="#">PANCAKE</a>
                                        </span>
                                        <a href="#">
                                            <h3>American Breakfast Pancakes</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£6.00</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-content-pic">
                                    <div class="product">
                                        <a href="#"></a>
                                        <div class="productimg">
                                            <img src="images/main-2-300x233.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <h5>Home Chef</h5>
                                        <span class="tagged">
                                           <a href="#">DINNER</a>
                                            <a href="#">GRILLED</a>
                                            <a href="#">MEAT</a>
                                            <a href="#">ORGANIC</a>
                                        </span>
                                        <a href="#">
                                            <h3> Asian Chicken & Gegetable Stỉ Fry</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£17.00</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-content-pic">
                                    <div class="product">
                                        <a href="#"></a>
                                        <div class="productimg">
                                            <img src="images/main-9-300x233.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <h5>Home Chef</h5>
                                        <span class="tagged">
                                              <a href="#">BEEF</a>
                                            <a href="#">DINNER</a>
                                            <a href="#">GRILLED</a>
                                            <a href="#">MEAT</a>
                                        </span>
                                        <a href="#">
                                            <h3>Blueberry Sweet Rolls with Lemon Glaze</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£18.00</p>
                                        </span>
                                    </div>
                                </div>
                          </div>
                            <div class="tab-pane active" id="salads">
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
                                            <a href="#">DESSERT</a>
                                            <a href="#">HEALTHY</a>
                                            <a href="#">RECIPE</a>
                                            <a href="#">SWEET</a>
                                        </span>
                                        <a href="#">
                                            <h3> Almond Cookies Breakfast</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£6.99</p>
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
                                           <a href="#">DESSERT</a>
                                            <a href="#">HEALTHY</a>
                                            <a href="#">RECIPE</a>
                                            <a href="#">SWEET</a>
                                        </span>
                                        <a href="#">
                                            <h3>  Blueberry Homemade Tart</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£6.99</p>
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
                                           <a href="#">DESSERT</a>
                                            <a href="#">HEALTHY</a>
                                            <a href="#">RECIPE</a>
                                            <a href="#">SWEET</a>
                                        </span>
                                        <a href="#">
                                            <h3> Blueberry Recipes</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£6.99</p>
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
                                              <a href="#">DESSERT</a>
                                            <a href="#">HEALTHY</a>
                                            <a href="#">RECIPE</a>
                                            <a href="#">SWEET</a>
                                        </span>
                                        <a href="#">
                                            <h3>Blueberry Sweet Rolls with Lemon Glaze</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£9.00</p>
                                        </span>
                                    </div>
                                </div>
                          </div>
                           <div class="tab-pane active" id="soups">
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
                                            <a href="#">DESSERT</a>
                                            <a href="#">HEALTHY</a>
                                            <a href="#">RECIPE</a>
                                            <a href="#">SWEET</a>
                                        </span>
                                        <a href="#">
                                            <h3>Bluebrry-lemon Cake with lemon Cream Cheese Frosting</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£8.99</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-content-pic">
                                    <div class="product">
                                        <a href="#"></a>
                                        <div class="productimg">
                                            <img src="images/soup-1-300x233.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <h5>Home Chef</h5>
                                        <span class="tagged">
                                           <a href="#">GOURMET</a>
                                            <a href="#">HEALTHY</a>
                                            <a href="#">SEAFOOD</a>
                                            <a href="#">SOUPS</a>
                                        </span>
                                        <a href="#">
                                            <h3>Bouillabaisse Soup</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£18.00</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3 tab-content-pic">
                                    <div class="product">
                                        <a href="#"></a>
                                        <div class="productimg">
                                            <img src="images/tea-10-300x233.jpg" alt=""/>
                                        </div>
                                        <div class="addtocart">
                                            <a href="#">DABOV</a>
                                        </div>
                                        <h5>Home Chef</h5>
                                        <span class="tagged">
                                           <a href="#">AROMA</a>
                                            <a href="#">BLEND</a>
                                            <a href="#">RECIPE</a>
                                            <a href="#">SWEET</a>
                                        </span>
                                        <a href="#">
                                            <h3> Blueberry Recipes</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£6.99</p>
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
                                              <a href="#">DESSERT</a>
                                            <a href="#">HEALTHY</a>
                                            <a href="#">RECIPE</a>
                                            <a href="#">SWEET</a>
                                        </span>
                                        <a href="#">
                                            <h3>Blueberry Sweet Rolls with Lemon Glaze</h3> 
                                        </a>
                                        <span class="price">
                                            <p>£9.00</p>
                                        </span>
                                    </div>
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

    </header>