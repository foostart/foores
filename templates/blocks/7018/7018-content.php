<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

    <body>
        <div class="module-18">
            <div class="row">
                <div class="limit-wapper">
                    <ul>
                        <li>
                            <div class="col-md-3 col-sm-3 col-xs-6">
                                <div class="product">
                                    <a href="#"></a>
                                    <div class="productimg">
                                        <img src="image/breakfast-9-300x233.jpg" alt=""/>
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
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </body>
</html>