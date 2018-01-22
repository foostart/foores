<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-7067">
    <div class="container">
        <div class="title">
            <h4>FEATURED POSTS</h4>
        </div>
        <div class="row full">    
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="fb_khung">
                    <div class="post-media">
                        <div class="fb_thumbnail">
                            <a href="#" title="Which Lamb is the Best: American, Australian or New Zealand?" class="has-border">
                                <img src="<?php echo $url_path ?>/images/anh1.jpg " alt="reponsive-img" width="360px" heigth="267px" class="attachment-full size-full img-responsive">  
                            </a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="fb_content">
                            <h4>
                                <a href="" title="Which Lamb is the Best: American, Australian or New Zealand?">Which Lamb is the Best: American, Australian or New Zealand?</a>
                            </h4>
                            <div class="post-actions">
                                <div class="post-author meta-author">
                                    <a href="">
                                        <span class="icon-pen">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                        Jon Madison
                                    </a>
                                </div>
                                <div class="post-date meta-author">
                                    <a href="" title="Which Lamb is the Best: American, Australian or New Zealand?">
                                    27 Sep, 2014 </a>
                                </div>
                                <div class="comment-count">
                                    <a href="">
                                        <span>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </span>
                                        1
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- kết thúc -->

            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="fb_khung">
                    <div class="post-media">
                        <div class="fb_thumbnail">
                            <a href="#" title="The Caipirinha Is The Brazilian Cocktail You’ve Been Too Afraid To Pronounce" class="has-border">
                                <img src="<?php echo $url_path ?>/images/anh2.jpg " alt="reponsive-img" width="360px" heigth="267px" class="attachment-full size-full img-responsive">  
                            </a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="fb_content">
                            <h4>
                                <a href="" title="The Caipirinha Is The Brazilian Cocktail You’ve Been Too Afraid To Pronounce" class="entry-title">The Caipirinha Is The Brazilian Cocktail You’ve Been Too Afraid To Pronounce</a>
                            </h4>
                            <div class="post-actions">
                                <div class="post-author meta-author">
                                    <a href="">
                                        <span class="icon-pen">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                        Jon Madison
                                    </a>
                                </div>
                                <div class="post-date meta-author">
                                    <a href="" title="The Caipirinha Is The Brazilian Cocktail You’ve Been Too Afraid To Pronounce">
                                    1 Sep, 2014 </a>
                                </div>
                                <div class="comment-count">
                                    <a href="">
                                        <span>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </span>
                                        0
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- kết thúc -->

            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="fb_khung">
                    <div class="post-media">
                        <div class="fb_thumbnail">
                            <a href="#" title="The Plum Recipes That’ll Make You Fall In Love With This Stone Fruit" class="has-border">
                                <img src="<?php echo $url_path ?>/images/anh3.jpg " alt="reponsive-img" width="360px" heigth="267px" class="attachment-full size-full img-responsive">  
                            </a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="fb_content">
                            <h4>
                                <a href="" title="The Plum Recipes That’ll Make You Fall In Love With This Stone Fruit" class="entry-title">The Plum Recipes That’ll Make You Fall In Love With This Stone Fruit</a>
                            </h4>
                            <div class="post-actions">
                                <div class="post-author meta-author">
                                    <a href="">
                                        <span class="icon-pen">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                        Jon Madison
                                    </a>
                                </div>
                                <div class="post-date meta-author">
                                    <a href="" title="The Plum Recipes That’ll Make You Fall In Love With This Stone Fruit">
                                    23 Mar, 2014 </a>
                                </div>
                                <div class="comment-count">
                                    <a href="">
                                        <span>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </span>
                                        0
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- kết thúc -->

            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="fb_khung">
                    <div class="post-media">
                        <div class="fb_thumbnail">
                            <a href="#" title="24 Reasons To Seek Out Fresh Figs">
                                <img src="<?php echo $url_path ?>/images/anh4.jpg " alt="reponsive-img" width="360px" heigth="267px" class="attachment-full size-full img-responsive">  
                            </a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="fb_content">
                            <h4>
                                <a href="" title="24 Reasons To Seek Out Fresh Figs" class="entry-title">24 Reasons To Seek Out Fresh Figs</a>
                            </h4>
                            <div class="post-actions">
                                <div class="post-author meta-author">
                                    <a href="">
                                        <span class="icon-pen">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                        Jon Madison
                                    </a>
                                </div>
                                <div class="post-date meta-author">
                                    <a href="" title="24 Reasons To Seek Out Fresh Figs">
                                    22 Mar, 2014 </a>
                                </div>
                                <div class="comment-count">
                                    <a href="">
                                        <span>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </span>
                                        0
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- kết thúc -->

            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="fb_khung">
                    <div class="post-media">
                        <div class="fb_thumbnail">
                            <a href="#" title="40 Truly Amazing Blueberry Recipes YUM!" class="has-border">
                                <img src="<?php echo $url_path ?>/images/anh5.jpg " alt="reponsive-img" width="360px" heigth="267px" class="attachment-full size-full img-responsive">  
                            </a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="fb_content">
                            <h4>
                                <a href="" title="40 Truly Amazing Blueberry Recipes YUM!" class="entry-title">40 Truly Amazing Blueberry Recipes YUM!</a>
                            </h4>
                            <div class="post-actions">
                                <div class="post-author meta-author">
                                    <a href="">
                                        <span class="icon-pen">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                        Jon Madison
                                    </a>
                                </div>
                                <div class="post-date meta-author">
                                    <a href="" title="40 Truly Amazing Blueberry Recipes YUM!">                       
                                    10 Mar, 2014 </a>
                                </div>
                                <div class="comment-count">
                                    <a href="">
                                        <span>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </span>
                                        0
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- kết thúc -->

          

            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="fb_khung">
                    <div class="post-media">
                        <div class="fb_thumbnail">
                            <a href="#" title="How to crimp a pie" class="has-border">
                                <img src="<?php echo $url_path ?>/images/anh7.jpg " alt="reponsive-img" width="360px" heigth="267px" class="attachment-full size-full img-responsive">  
                            </a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="fb_content">
                            <h4>
                                <a href="" title="How to crimp a pie" class="entry-title">How to crimp a pie</a>
                            </h4>
                            <div class="post-actions">
                                <div class="post-author meta-author">
                                    <a href="">
                                        <span class="icon-pen">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                        Jon Madison
                                    </a>
                                </div>
                                <div class="post-date meta-author">
                                    <a href="" title="How to crimp a pie">
                                    7 Sep, 2013 </a>
                                </div>
                                <div class="comment-count">
                                    <a href="">
                                        <span>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </span>
                                        0
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- kết thúc -->

            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="fb_khung">
                    <div class="post-media">
                        <div class="fb_thumbnail">
                            <a href="#" title="The Basil Recipes That Define Summer" class="has-border">
                                <img src="<?php echo $url_path ?>/images/anh3.jpg " alt="reponsive-img" width="360px" heigth="267px" class="attachment-full size-full img-responsive">  
                            </a>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="fb_content">
                            <h4>
                                <a href="" title="The Basil Recipes That Define Summer" class="entry-title">The Basil Recipes That Define Summer</a>
                            </h4>
                            <div class="post-actions">
                                <div class="post-author meta-author">
                                    <a href="">
                                        <span class="icon-pen">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </span>
                                        Jon Madison
                                    </a>
                                </div>
                                <div class="post-date meta-author">
                                    <a href="" title="The Basil Recipes That Define Summer">
                                    23 Mar, 2014 </a>
                                </div>
                                <div class="comment-count">
                                    <a href="">
                                        <span>
                                            <i class="fa fa-comment-o" aria-hidden="true"></i>
                                        </span>
                                        0
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- kết thúc -->
        </div>
    </div>
</div>


