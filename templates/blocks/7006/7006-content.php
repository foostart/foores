<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="Module-6">
    <div class="container">
        <div class="col-md-4">
            <div class="row ">
                <div class="anhcafe">
                    <img src="anh/anh1.jpg" alt="anh1">
                </div>
            </div>
        </div>  
        <div class="col-md-4">
            <div class="row">
                <div class="M6-grid-1-2">
                    <p><span class="icon shortcode theme  use-hover" style="color:#cb7152;font-size:50px !important;"><i class="fa fa-coffee" aria-hidden="true"></i></span>
                    </p>
                    <h2>Buddha:<br>
                        <h2>How to drink tea?</h2>
                    <p> The types of tea are white tea, green tea, yellow tea, oolong tea, black tea, and pu-erh tea. “When you have the title ‘white tea’ or ‘green tea’, you’re actually describing the process by which it has been made,” Woollard says.                   </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
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
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper">
                                              <div class="swiper-slide"><img src="anh/anh6.jpg" alt="anh6"></div>
                                              <div class="swiper-slide"><img src="anh/anh7.jpg" alt="anh7"></div>
                                              <div class="swiper-slide"><img src="anh/anh8.jpg" alt="anh8"></div>
                                            </div>
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                          </div>

                                        <div class="addtocart">
                                            <a href="#">Add to Cart</a>
                                        </div>
                                        <div class="home-chef">
                                            <h5>Home Chef</h5>
                                            <span class="tagged">
                                                <a href="#">BREAKFAST</a>
                                                <a href="#">CAPPUCCINO</a>
                                                <a href="#">COFFEE</a>
                                                <a href="#">
                                                    <h3>Mix of Croissants Breakfast</h3> 
                                                </a>
                                                <span class="price">£5.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </blockquote>
                            </div>  
                        </div>
                    </div>                          

                </div>

            </div>
        
        </div>
    </div>

    <div class="anhdau">
        <div class="container">
            <div class="row">
                <p>
                    <img src="anh/anh3.jpg" alt="anh3">
                </p>
            </div>
        </div>
    </div>
</div>

