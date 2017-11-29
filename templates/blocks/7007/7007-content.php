<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<!--show product-->
<div class="modul-7004">
    <div class="row m7007-tabs-all">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#all" data-toggle="tab">All<span>8</span></a></li>
                <li><a href="#coffee" data-toggle="tab">Coffee Shop<span>4</span></a></li>
                <li><a href="#gourmet" data-toggle="tab">Gourmet<span>3</span></a></li>
                <li><a href="#recipes" data-toggle="tab">Recipes<span>4</span></a></li>
            </ul>
        </div>

        <!--tab content-->
        <div class="tab-content">
            <div class="tab-pane active" id="all">
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/Meat-3-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Jamie Oliver: Try Something New</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/Seafood-2-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Creamy Leek & Potato Soup</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/Brunch-2-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Top 10 breakfast spots in Paris</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/Coffee-3-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Caffe Latte Recipe</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/sushi-1-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>7 Tips for the Best Sushi Party Ever</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/Sushi-2-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Sushi Lovers or Beginners</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/tea-7-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Coffee for Your Health</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6  tab-content-pic">
                    <img src="images/people-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Coffee with a friend is like capturing</a>
                        </h3>
                    </span>
                </div>
            </div>
            <div class="tab-pane" id="coffee">
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/Brunch-2-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Top 10 breakfast spots in Paris</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/Coffee-3-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Caffe Latte Recipe</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/tea-7-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Coffee for Your Health</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/people-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Coffee with a friend is like capturing</a>
                        </h3>
                    </span>
                </div>
            </div>
            <div class="tab-pane" id="gourmet">
                <div class="col-md-3 col-sm-6  tab-content-pic">
                    <img src="images/Seafood-2-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Creamy Leek & Potato Soup</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6  tab-content-pic">
                    <img src="images/Brunch-2-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Top 10 breakfast spots in Paris</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6  tab-content-pic">
                    <img src="images/Coffee-3-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Caffe Latte Recipe</a>
                        </h3>
                    </span>
                </div>
            </div>
            <div class="tab-pane" id="recipes">
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/Meat-3-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Jamie Oliver: Try Something New</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/Coffee-3-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Caffe Latte Recipe</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/sushi-1-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>7 Tips for the Best Sushi Party Ever</a>
                        </h3>
                    </span>
                </div>
                <div class="col-md-3 col-sm-6 tab-content-pic">
                    <img src="images/Sushi-2-800x615.jpg" alt="reponsive-img">
                    <span>
                        <h3>
                            <a>Sushi Lovers or Beginners</a>
                        </h3>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
