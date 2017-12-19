    <?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
    ?>

         <!--banner-->
    <div class="type-7038">
        <div class="m3">
            <div class="m3-container">
                <div class="m3-content">
                    <div class="col-xs-12 col-sm-2 col-md-3  m3-content-left"></div>
                      <!--Brunch -->
                    <div class="col-xs-12 col-sm-4 col-md-6 m3-content-menu">
                        <span class="m3-content-menu-icon"><img src="img/cookie.JPG"></span>
                        <h3>Brunch</h3>
                        <h5>Today Specials</h5>
                        <div class="m3-content-menu-food">
                            <ul class="menu">
                                <li>
                                    <a href="#" class="active">Fish</a>
                                    <a href="#">Meat</a>
                                    <a href="#">Vegetarian</a>
                                    <a href="#">Sandwiches</a>
                                </li>
                            </ul>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Alder Grilled Chinook Salmon<span class="price">$33</span></h3>
                            <div class="m3-content-menu-food-description">Candied salmon, basil potato puree, baby kale marsala eggplant confit & balsamic butter sauce.</div>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Head on prawns, manila clams & mussels<span class="price">$39</span></h3>
                            <div class="m3-content-menu-food-description">These small shellfish have a sweet flavour and a firm texture.</div>
                        </div>
                        <div class="m3-content-menu-food">
                            <h3>Creamy smoked salmon, leek & potato soup
                                <span class="price">$9.50</span></h3>
                                <div class="m3-content-menu-food-description">Served in deep bowls with smoked salmon and snipped chives on the top.</div>
                        </div>

                        <div class="m3-content-menu-food">
                            <h3>Alder grilled seafood paella
                                <span class="price">$37</span></h3>
                                <div class="m3-content-menu-food-description">Shell-on king prawns, monkfish, onion, paella rice, garlic, smoked paprika, cayenne pepper (optional), saffron, tomatoes, mussels, peas, broad beans, ...</div>
                        </div>
                        </div>

                         
                          <!--Happy  hour-->
                        <div class="col-xs-12 col-sm-2 col-md-3 m3-content-right"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="m3-parallax">
                        
                    </div>
                </div>
            </div> 
        </div>   
        
