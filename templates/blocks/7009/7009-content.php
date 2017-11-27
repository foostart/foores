<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    
        <div class="module-9">
            <div class="blank-space"></div>
            <div class="row">
                <div class="googlemap">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4875110257044!2d106.75819512698365!3d10.850476512275566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2sThu+Duc+College+of+Technology!5e0!3m2!1sen!2s!4v1511772717722"></iframe>
                </div>
            </div>
            <div class="space"></div>
            <div class="wapper">
                <div class="row">
                    <div class="main">
                        <div class="grid2-5  col-md-5 col-sm-12 col-xm-12">
                            <div class="spacespane"></div>
                            <h4>Opening Times</h4>
                            <table class="timetable">
                                <tbody>
                                    <tr>
                                        <td>Week days</td>
                                        <td></td>
                                        <td>9.00 – 18:00</td>
                                    </tr>
                                    <tr>
                                        <td>Saturday</td>
                                        <td></td>
                                        <td>10.00 – 17:00</td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td></td>
                                        <td>Closed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="grid1-5  col-md-2 col-sm-12 col-xm-12">
                            <div class="blank-space1"></div>
                            <div class="row">
                                <div class="grid1">
                                    <div class="grid1-1">
                                        <p>
                                            <img src="image/icon.JPG" alt=""/>
                                            <span></span>
                                        </p>
                                        <h4>Directions</h4>
                                        <p>London, UK<br>
                                            10, Firs Avenue, Muswell Hill
                                        </p>
                                        <p>
                                            <a href="#" class="button">
                                                <span class="text-button">View on map</span>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid2-5 lastgrid  col-md-5 col-sm-12 col-xm-12">
                            <div class="spacespane"></div>
                            <h4>Get in touch</h4>
                            <h4>+359 562 958</h4>
                            <p class="email"><a href="#">hello@yoursite.com</a></p>
                            <p>
                                <a href="#"><span class="fa fa-facebook"></span></a>
                                <a href="#"><span class="fa fa-twitter"></span></a>
                                <a href="#"><span class="fa fa-pinterest"></span></a>
                                <a href="#"><span class="fa fa-instagram"></span></a>
                            </p> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="blank-space"></div>
        </div>
  