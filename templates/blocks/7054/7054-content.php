<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-7054">
    <div class="container">
        <div class="sep-text single centered">
            <div class="sep-text-before"> 
                <div class="sep-text-line">
                </div>
            </div>
            <div class="content">
                <h3>Breakfast</h3>
            </div>
            <div class="sep-text-after">
                <div class="sep-text-line">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">

                 <!--- 1 ---->
                <div class="img-products">
                    <div class="menu-products">
                        <img src="../7054/images/8.jpg" alt="img-reponsive">
                        <span class="pd-price">$8</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Antioxidant Fruits Mix</h3>
                        </div>
                    </div>
                </div>
                
                <br>
                
                <!--- 2 ---->
                <div class="img-products">
                    <div class="menu-products">
                        <img src="../7054/images/Desserts-3-800x535.jpg" alt="img-reponsive">
                        <span class="pd-price">$4</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Pain au chocolat</h3>
                            <p>Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for an impressive and indulgent addition to ...</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <!--- 3 ---->
                <div class="img-products">
                    <div class="menu-products">
                        <img src="../7054/images/Desserts-12-700x469.jpg" alt="img-reponsive">
                        <span class="pd-price">$5</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Traditional pancakes with maple syrup butter & berry jam</h3>
                            <p>Milk, eggs, strawberries, butter, maple syrup</p>
                        </div>
                    </div>
                </div>
                
                <br>
                
                <!--- 4 ---->
                <div class="img-products">
                    <div class="menu-products">
                        <img src="../7054/images/Desserts-11-800x535.jpg" alt="img-reponsive">
                        <span class="pd-price">$5</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Blueberry banana pancakes</h3>
                            <p>Banana, almond milk, vanilla, cinnamon, blueberry topping</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <!--- 5 ---->
                <div class="img-products">
                    <div class="menu-products">
                        <img src="../7054/images/Desserts-10-700x469.jpg" alt="img-reponsive">
                        <span class="pd-price">$7</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Fig and lemon cake</h3>
                        </div>
                    </div>
                </div>
                
                <br>
                
                <!--- 6 ---->
                <div class="img-products">
                    <div class="menu-products">
                        <img src="../7054/images/Sandwiches-1-800x535.jpg" alt="img-reponsive">
                        <span class="pd-price">$7</span>
                    </div>    

                    <div class="menu_info">
                        <div class="fp_inner_box">
                            <h3>Sun-Dried Tomato Bruschetta</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        
        </div>
    </div>
</div>

