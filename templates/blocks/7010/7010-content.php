<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="modul-10">
    <div class="row">
        <div class="m10-description">
            <div class="m10-limit">
                <div class="row row-all">
                    <div class="m10-description-main">
                        <div class="m10-description-all">
                            <div class="col-md-3 m10-description-one col-sm-3">
                                <div class="m10-description-one-pic">
                                    <img src="images/Meat-1-292x195.jpg">
                                </div>
                                <div class="m10-description-one-meta">
                                    <a href="#">Recipes</a>
                                    <a href="#">Tips & Tricks</a>
                                </div>
                                <div class="m10-description-one-title">
                                    <a href="#">
                                        <h4>Which Lamb is the Best: American, Australian or New Zealand?</h4>
                                    </a>
                                    <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                    <div class="m10-description-one-tag">
                                        <a href="#">Bio</a>,
                                        <a href="#">Dinner</a>,
                                        <a href="#">Food</a>,
                                        <a href="#">Hand Made</a>,
                                        <a href="#">Lamb</a>,
                                        <a href="#">Recipe</a>,
                                        <a href="#">Tricks</a>
                                    </div>

                                    <div class="m10-description-one-category">
                                        <a href="#">
                                            <span  class="cate-1">
                                                Jon Madison
                                            </span></a>
                                        <a href="#">
                                            <span class="cate-2">
                                                27 Sep, 2014 
                                            </span>
                                        </a>
                                        <a href="#" class="cate-3">
                                            <span class="fa fa-comment-o">
                                                1
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3 m10-description-one col-sm-3">
                                <div class="m10-description-one-pic">
                                    <img src="images/Cocktails-2-292x195.jpg">
                                </div>
                                <div class="m10-description-one-meta">
                                    <a href="#">Recipes</a>
                                    <a href="#">Tips & Tricks</a>
                                </div>
                                <div class="m10-description-one-title">
                                    <a href="#">
                                        <h4>Which Lamb is the Best: American, Australian or New Zealand?</h4>
                                    </a>
                                    <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                    <div class="m10-description-one-tag">
                                        <a href="#">Bio</a>,
                                        <a href="#">Dinner</a>,
                                        <a href="#">Food</a>,
                                        <a href="#">Hand Made</a>,
                                        <a href="#">Lamb</a>,
                                        <a href="#">Recipe</a>,
                                        <a href="#">Tricks</a>
                                    </div>

                                    <div class="m10-description-one-category">
                                        <a href="#">
                                            <span  class="cate-1">
                                                Jon Madison
                                            </span></a>
                                        <a href="#">
                                            <span class="cate-2">
                                                27 Sep, 2014 
                                            </span>
                                        </a>
                                        <a href="#" class="cate-3">
                                            <span class="fa fa-comment-o">
                                                1
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3 m10-description-one col-sm-3">
                                <div class="m10-description-one-pic">
                                    <img src="images/Sandwiches-1-292x195.jpg">
                                </div>
                                <div class="m10-description-one-meta">
                                    <a href="#">Recipes</a>
                                    <a href="#">Tips & Tricks</a>
                                </div>
                                <div class="m10-description-one-title">
                                    <a href="#">
                                        <h4>Which Lamb is the Best: American, Australian or New Zealand?</h4>
                                    </a>
                                    <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                    <div class="m10-description-one-tag">
                                        <a href="#">Bio</a>,
                                        <a href="#">Dinner</a>,
                                        <a href="#">Food</a>,
                                        <a href="#">Hand Made</a>,
                                        <a href="#">Lamb</a>,
                                        <a href="#">Recipe</a>,
                                        <a href="#">Tricks</a>
                                    </div>

                                    <div class="m10-description-one-category">
                                        <a href="#">
                                            <span  class="cate-1">
                                                Jon Madison
                                            </span></a>
                                        <a href="#">
                                            <span class="cate-2">
                                                27 Sep, 2014 
                                            </span>
                                        </a>
                                        <a href="#" class="cate-3">
                                            <span class="fa fa-comment-o">
                                                1
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-3 m10-description-one col-sm-3">
                                <div class="m10-description-one-pic">
                                    <img src="images/Vegetarian-3-292x195.jpg">
                                </div>
                                <div class="m10-description-one-meta">
                                    <a href="#">Recipes</a>
                                    <a href="#">Tips & Tricks</a>
                                </div>
                                <div class="m10-description-one-title">
                                    <a href="#">
                                        <h4>Which Lamb is the Best: American, Australian or New Zealand?</h4>
                                    </a>
                                    <p>Lamb is a very subjective item. Many people feel that New Zealand or Australian is…</p>
                                    <div class="m10-description-one-tag">
                                        <a href="#">Bio</a>,
                                        <a href="#">Dinner</a>,
                                        <a href="#">Food</a>,
                                        <a href="#">Hand Made</a>,
                                        <a href="#">Lamb</a>,
                                        <a href="#">Recipe</a>,
                                        <a href="#">Tricks</a>
                                    </div>

                                    <div class="m10-description-one-category">
                                        <a href="#">
                                            <span  class="cate-1">
                                                Jon Madison
                                            </span></a>
                                        <a href="#">
                                            <span class="cate-2">
                                                27 Sep, 2014 
                                            </span>
                                        </a>
                                        <a href="#" class="cate-3">
                                            <span class="fa fa-comment-o">
                                                1
                                            </span>
                                        </a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="m10-button">
                        <p class="c1-btn">
                            <a href="#">
                                <span class="span-hover">Load more</span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>