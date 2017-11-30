    <?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
    ?>

         <!--banner-->
        <div class="m3">
            <div class="m3-container">
                <div class="m3-content">
                      <!--Brunch -->
                    <div class="col-xs-12 col-sm-12 col-md-12 m3-content-menu">
                        <span class="m3-content-menu-icon"></span>
                        <h3>Menu</h3>
                        <h5>Today Specials</h5>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 m3-content-menu">
                        <!--Breakfast - 1 -->
                        <div class="m3-content-menu-food">
                            <h2>Breakfast</h2>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Cashew Chicken With Stir-Fry Vegetables &amp; Green Salad<span class="price">$22</span></h3>
                            <div class="m3-content-menu-food-description">Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.</div>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Optic Big Breakfast Combo Menu<span class="price">$20</span></h3>
                            <div class="m3-content-menu-food-description"></div>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Coffee and Pain au chocolat (Chocolate croissant) Combo Menu
                                <span class="price">$11 each</span></h3>
                                <div class="m3-content-menu-food-description">Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...</div>
                        </div>

                        <!--Breakfast - 2 -->
                        <div class="m3-content-menu-food">
                            <h2>Breakfast</h2>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Cashew Chicken With Stir-Fry Vegetables &amp; Green Salad<span class="price">$22</span></h3>
                            <div class="m3-content-menu-food-description">Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.</div>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Optic Big Breakfast Combo Menu<span class="price">$20</span></h3>
                            <div class="m3-content-menu-food-description"></div>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Coffee and Pain au chocolat (Chocolate croissant) Combo Menu
                                <span class="price">$11 each</span></h3>
                                <div class="m3-content-menu-food-description">Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...</div>
                        </div>

                    </div>
                          <!--Happy  hour-->
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 m3-content-menu">
                        <div class="m3-content-menu-food">
                            <h2>Breakfast</h2>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Cashew Chicken With Stir-Fry Vegetables &amp; Green Salad<span class="price">$22</span></h3>
                            <div class="m3-content-menu-food-description">Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.</div>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Optic Big Breakfast Combo Menu<span class="price">$20</span></h3>
                            <div class="m3-content-menu-food-description"></div>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Coffee and Pain au chocolat (Chocolate croissant) Combo Menu
                                <span class="price">$11 each</span></h3>
                                <div class="m3-content-menu-food-description">Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...</div>
                        </div>
                    </div>

                         <!--Happy  hour-->
                    
                    <div class="col-xs-12 col-sm-12 col-md-4 m3-content-menu">
                        <div class="m3-content-menu-food">
                            <h2>Breakfast</h2>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Cashew Chicken With Stir-Fry Vegetables &amp; Green Salad<span class="price">$22</span></h3>
                            <div class="m3-content-menu-food-description">Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.</div>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Optic Big Breakfast Combo Menu<span class="price">$20</span></h3>
                            <div class="m3-content-menu-food-description"></div>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Coffee and Pain au chocolat (Chocolate croissant) Combo Menu
                                <span class="price">$11 each</span></h3>
                                <div class="m3-content-menu-food-description">Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...</div>
                        </div>
                    </div>
                          
                        
                        <div class="clearfix"></div>
                    </div>
                    <div class="m3-parallax">
                        <div class="m3-background"> </div>
                    </div>
                </div>
            </div>    
        
