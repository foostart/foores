<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-7024">
    <div class="m24-container">

        <div class="grid-1-1">
            <div class="extended-column-inner">
                <div class="sep"></div>
                <div class="vamtam-blank-space"></div>                            
            </div>                        
        </div>                    

        <div class="limit-wrapper">
            <div class="row ">
                <div class="grid-1-6">
                    <div class="row ">
                        <div class="grid-1-1">
                            <p>&nbsp;</p>
                        </div>
                    </div>
                </div>
                <div class="grid-2-3">
                    <h4>Awards</h4>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <p>
                                    In July 2006, Ramsay won the Catey award for “Independent Restaurateur of the Year”, becoming only the third person to have won three Catey awards.
                                </p>
                                <span class="vamtam-blank-space"></span>   
                                <ul class="logos">
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h1.jpg" alt="award">
                                    </li>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h2.png" alt="award">
                                    </li>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h.png" alt="award">                         
                                    </li>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h4.jpg" alt="award">
                                    </li>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h5.gif" alt="award">
                                    </li>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h6.png" alt="award">
                                    </li>
                                </ul>
                            </div>
                            <div class="item">
                                <p>
                                    In July 2007, Ramsay won the Catey award for “Independent Restaurateur of the Year”, becoming only the third person to have won three Catey awards.
                                </p>
                                <span class="vamtam-blank-space"></span>   
                                <ul class="logos">
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h1.jpg" alt="award">
                                    </li>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h2.png" alt="award">
                                    </li>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h.png" alt="award">                         
                                    </li>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h4.jpg" alt="award">
                                    </li>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h5.gif" alt="award">
                                    </li>
                                    <li class="col-md-2 col-sm-2 col-xs-4">
                                        <img class="img-responsive" src="images/h6.png" alt="award">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
