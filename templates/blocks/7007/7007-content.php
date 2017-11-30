<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="modul-7">
    <div class="container">
        <div class="row m7-tabs-all">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#all" data-toggle="tab">All<span>8</span></a></li>
                <li><a href="#coffee" data-toggle="tab">Coffee Shop<span>4</span></a></li>
                <li><a href="#gourmet" data-toggle="tab">Gourmet<span>3</span></a></li>
                <li><a href="#recipes" data-toggle="tab">Recipes<span>4</span></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="all">
                    <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/Meat-3-800x615.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/Meat-3-800x615.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/Meat-3-800x615.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/Meat-3-800x615.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/Meat-3-800x615.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/Meat-3-800x615.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/Meat-3-800x615.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/Meat-3-800x615.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                </div>
                <div class="tab-pane" id="coffee">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/breakfast-8-300x233.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>

                </div>
                <div class="tab-pane" id="gourmet">
                    <div class="col-lg-3 col-md-3  col-sm-6 tab-content-pic">
                        <img src="images/desserts-1-300x233.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>

                </div>
                <div class="tab-pane" id="recipes">
                    <div class="col-lg-3 col-md-3 col-sm-6 tab-content-pic">
                        <img src="images/Meat-3-800x615.jpg" alt="repinsove-img">
                        <span>
                            <a>Jamie Oliver: Try Something New</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
