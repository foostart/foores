<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<div class="Module-6">
    <div class="container">
        <div class="col-md-4">
            <div class="row ">
                <div class="anhcafe">
                    <img src="anh/anh1.jpg">
                </div>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="row">
                <div class="M6-grid-1-2">
                    <p><span class="icon"></span></p>
                    <h2>Buddha:<br>
                        How to drink tea?</h2>
                    <p> The types of tea are white tea, green tea, yellow tea, oolong tea, black tea, and pu-erh tea. “When you have the title ‘white tea’ or ‘green tea’, you’re actually describing the process by which it has been made,” Woollard says.                   </p>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="M7">
                <div class='row'>

                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Bottom Carousel Indicators -->
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner">        
                            <!-- Quote 1 -->
                            <div class="item active">
                                <blockquote>
                                    <div class="row">
                                        <div class="product">
                                            <a href="#" class="woocommerce-LoopProduct-link"></a>
                                            <div class="col-sm-12 text-center">
                                                <div class="owl-carousel owl-theme">
                                                    <div class="item"><h4>1</h4></div>
                                                    <div class="item"><h4>2</h4></div>
                                                    <div class="item"><h4>3</h4></div>
                                                    <div class="item"><h4>4</h4></div>
                                                    <div class="item"><h4>5</h4></div>
                                                    <div class="item"><h4>6</h4></div>
                                                    <div class="item"><h4>7</h4></div>
                                                    <div class="item"><h4>8</h4></div>
                                                    <div class="item"><h4>9</h4></div>
                                                    <div class="item"><h4>10</h4></div>
                                                    <div class="item"><h4>11</h4></div>
                                                    <div class="item"><h4>12</h4></div>
                                                </div>  
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
                                                <img class="img-circle" src="anh/anh7.jpg">
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
                                            <img class="img-circle" src="anh/anh8.jpg">
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
        </div>
    </div>

    <div class="anhdau">
        <div class="container">
            <div class="row">
                <p>
                    <img src="anh/anh3.jpg">
                </p>
            </div>
        </div>
    </div>
</div>

