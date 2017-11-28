    <?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
    ?>
            <div class="M7">
                <div class='row'>
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>        
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">        
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="product">
                                            <a href="#" class="woocommerce-LoopProduct-link"></a>
                                            <div class="col-sm-12 text-center">
                                                <img class="img-circle" src="anh/anh1.jpg">
                                            </div>


                                            <div class="col-sm-12 text-center">
                                                <h5>Harney &amp; Sons </h5>
                                                <span class="tagged_as">

                                                    <a href="#" rel="tag">Coffee</a>
                                                    <a href="#" rel="tag">Honey</a>
                                                    <a href="#" rel="tag">Organic</a> 
                                                    <a href="#" rel="tag">Tea</a>
                                                </span>

                                                <a href="#">
                                                    <h3 class="woocommerce-loop-product__title">Wild Flower Honey</h3>
                                                </a>
                                                <span class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">£</span>60.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 2 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="product">
                                            <a href="#" class="woocommerce-LoopProduct-link"></a>
                                            <div class="col-sm-12 text-center">
                                                <img class="img-circle" src="anh/anh2.jpg">
                                            </div>
                                            <div class="col-sm-12 text-center">
                                                <h5>Harney &amp; Sons </h5>
                                                <span class="tagged_as">

                                                    <a href="#" rel="tag">Coffee</a>
                                                    <a href="#" rel="tag">Honey</a>
                                                    <a href="#" rel="tag">Organic</a> 
                                                    <a href="#" rel="tag">Tea</a>
                                                </span>

                                                <a href="#">
                                                    <h3 class="woocommerce-loop-product__title">Wild Flower Honey</h3>
                                                </a>
                                                <span class="price">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">£</span>4.90</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                            <!-- Quote 3 -->
                            <div class="item">
                                <blockquote>
                                    <div class="product">
                                        <a href="#" class="woocommerce-LoopProduct-link"></a>
                                        <div class="col-sm-12 text-center">
                                            <img class="img-circle" src="anh/anh3.jpg">
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <h5>Harney &amp; Sons </h5>
                                            <span class="tagged_as">

                                                <a href="#" rel="tag">Coffee</a>
                                                <a href="#" rel="tag">Honey</a>
                                                <a href="#" rel="tag">Organic</a> 
                                                <a href="#" rel="tag">Tea</a>
                                            </span>
                                            <a href="#">
                                                <h3 class="woocommerce-loop-product__title">Elea – Tea set with tray</h3>
                                            </a>
                                            <span class="price">
                                                <span class="woocommerce-Price-amount amount">
                                                    <span class="woocommerce-Price-currencySymbol">£</span>60.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>
                        </div>        
                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                        <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                    </div>                          

                </div>

            </div>

     