<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

    <div class="type-843">
        <!-- BEGIN FOOTER -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="logo-footer col-md-3 col-xs-6">
                        <div class="logo">
                            <img src="<?php echo $url_path ?>/images/footer-logo.png" alt=""/>
                        </div>
                        <div class="address">
                            <p style="display: initial;"> 507-Union Trade Center,Udhana Darvaja Surata</p>
                            <p style="display: inline-block;"> Call us: 0123-456-789</p>
                            <p style="display: block;" class="support"><a href="#"> support@templatemela.com</a></p>
                        </div>
                        <div class="link">
                            <ul>
                                <li><a href="#" class="fa fa-facebook-square"></a></li>
                                <li><a href="#" class="fa fa-twitter-square"></a></li>
                                <li><a href="#" class="fa fa-google-plus-square"></a></li>
                                <li><a href="#" class="fa fa-pinterest-square"></a></li>
                                <li><a href="#" class="fa fa-linkedin-square"></a></li>
                                <li><a href="#" class="fa fa-rss-square"></a></li>
                                <li><a href="#" class="fa fa-share-alt-square"></a></li>
                                <li><a href="#" class="fa fa-youtube-square"></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- BEGIN COLUMNS -->
                    <div class="columns col-md-3 col-xs-6">
                        <div class="title">
                            <h6>MY ACCOUNT</h6>
                        </div>
                        <div class="list">
                            <ul>
                                <li><a href="#"> Ask In forum</a></li>
                                <li><a href="#"> Help Desk</a></li>
                                <li><a href="#"> Payment Method</a></li>
                                <li><a href="#"> Promotions</a></li>
                                <li><a href="#"> Terms & Condition</a></li>
                                <li><a href="#"> Payment Method</a></li>
                                <li><a href="#"> Shipping Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END COLUMNS -->
                    <!-- BEGIN COLUMNS -->
                    <div class="columns col-md-3 col-xs-6">
                        <div class="title">
                            <h6>SHOP</h6>
                        </div>
                        <div class="list">
                            <ul>
                                <li><a href="#">Accessories</a></li>
                                <li><a href="#">Balcony Tables</a></li>
                                <li><a href="#">Bar Units</a></li>
                                <li><a href="#">Fine Art</a></li>
                                <li><a href="#">Beds</a></li>
                                <li><a href="#">Rules</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END COLUMNS -->
                    <!-- BEGIN COLUMNS -->
                    <div class="columns col-md-3 col-xs-6">
                        <div class="title">
                            <h6>SELLERS</h6>
                        </div>
                        <div class="list">
                            <ul>
                                <li><a href="#">Seller Login</a></li>
                                <li><a href="#">Seller Signup</a></li>
                                <li><a href="#">Seller Handbook</a></li>
                                <li><a href="#">Shipping & Refund</a></li>
                                <li><a href="#"> Wholesale Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- END COLUMNS -->
                </div>
            </div>
            <div class="container">
                <div class="border-bottom">
                </div> 
                <div class="sub-footer">
                    <div class="menu-sub">
                        <ul>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="#">Search Terms</a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="#">Advanced Search</a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="copy">
                        <p>© 2016 Magento Demo Store. All Rights Reserved.</p>
                    </div>
                    <div class="link-sub col-md-12 col-sm-12 col-xs-12">
                        <div class="image" >
                            <img class="img_icon" src="<?php echo $url_path ?>/images/hinh1.jpg" alt="hinh1">  
                            <img class="img_icon" src="<?php echo $url_path ?>/images/hinh2.jpg" alt="hinh2">  
                            <img class="img_icon" src="<?php echo $url_path ?>/images/hinh3.jpg" alt="hinh3"> 
                            <img class="img_icon" src="<?php echo $url_path ?>/images/hinh4.jpg" alt="hinh4"> 
                            <img class="img_icon" src="<?php echo $url_path ?>/images/hinh5.jpg" alt="hinh5">  
                            <img class="img_icon" src="<?php echo $url_path ?>/images/hinh7.jpg" alt="hinh7"> 
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!-- END FOOTER -->
    </div>




