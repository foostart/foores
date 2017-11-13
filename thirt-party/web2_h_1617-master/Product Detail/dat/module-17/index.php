<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <title>Coffee Shop &#8211; Délicious</title>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/module-17-less.less', 'css/module-17-css.css');
        ?>
        <link href="css/module-17-css.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
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
                                        <p>£15.00</p>
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
                                        <p>£9.99</p>
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
                                        <p>£16.00</p>
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
                                        <p>£6.99</p>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </body>
</html>