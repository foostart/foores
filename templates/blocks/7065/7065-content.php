<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-7065">
    <div class="container">
        <div class="row type-7065-tabs-all">
            <div class="col-md-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#all" data-toggle="tab">All<span>13</span></a></li>
                    <li><a href="#gourmet" data-toggle="tab">gourmet<span>8</span></a></li>
                    <li><a href="#restaurant" data-toggle="tab">Restaurant<span>10</span></a></li>
                    <li><a href="#sushi" data-toggle="tab">Sushi<span>2</span></a></li>
                    <li><a href="#wedding" data-toggle="tab">Wedding Events<span>4</span></a></li>
                </ul>   
            </div>
            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic ">
                        <img src="images/2.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>SERVED IN DEEP BOWLS WITH SMOKED SALMON AND SNIPPED CHIVES ON THE TOP.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/3.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>SERVED IN DEEP BOWLS WITH SMOKED SALMON AND SNIPPED CHIVES ON THE TOP.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/4.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/5.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/6.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/18.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/19.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/23.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/21.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/22.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/10.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/20.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                </div>
                <div class="tab-pane" id="gourmet">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic ">
                        <img src="images/3.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/4.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/7.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/24.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/18.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/19.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/23.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/21.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                </div>
                <div class="tab-pane" id="restaurant">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/2.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/3.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/24.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/4.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/5.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/6.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/18.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/19.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/23.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/21.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                </div>
                <div class="tab-pane" id="sushi">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/4.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/5.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                </div>
                 <div class="tab-pane" id="wedding">
                    <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/1.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/4.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/5.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                     <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/7.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                            <p>MIRUM EST NOTARE QUAM LITTERA GOTHICA, QUAM NUNC.</p>
                        </span>
                    </div>
                </div>
            </div>      
        </div>
        <button class="hvr-sweep-to-top"> 

                    Load more

        </button>
    </div>
</div>
