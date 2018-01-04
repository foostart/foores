<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-7050">
	<div class="container">
		<div class="row">
			<div class="col-md-4 content-menu">
                <div class="row-content-7050">
                    <div class="img-type-7050">
                        <img src="img/hinh1.jpg" alt="img-reponsive">
                        <span class="fp_price">$7</span>
                    </div>
                    <div class="menu-info-7050">
                        <div class="content-menu-info-7050">
                            <h3>Blueberry Sweet Rolls with Lemon Glaze</h3>
                            <div class="menu_description-7050">Butter, blueberries, lemon, heavy cream - an irresistible sweet-sour combination of tastes.</div>
                        </div>
                    </div>
                </div>
                <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="Coffee &amp; Strawberry Jam French Toast with Strawberry Butter Combo Menu">
                            Coffee &amp; Strawberry Jam French Toast with Strawberry Butter Combo Menu
                            <span class="fp_price">$11</span>
                        </h3> 
                        <div class="menu_description-7050">
                            Hot coffee in the company of fresh bread toast topped with homemade strawberry butter, warm maple syrup, and fresh ...
                        </div>
                    </div>
                </div>
                 <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="American Brunch Combo Menu">
                            American Brunch Combo Menu
                            <span class="fp_price">$15</span>
                        </h3> 
                        <div class="menu_description-7050">
                            Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.
                        </div>
                    </div>
                </div>
                 <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="Pain au chocolat">
                            Pain au chocolat
                            <span class="fp_price">$4</span>
                        </h3> 
                        <div class="menu_description-7050">
                           Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for an impressive and indulgent addition to ...
                        </div>
                    </div>
                </div>
                 <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="Traditional pancakes with maple syrup butter &amp; berry jam">
                            Traditional pancakes with maple syrup butter &amp; berry jam
                            <span class="fp_price">$5</span>
                        </h3> 
                        <div class="menu_description-7050">
                            Milk, eggs, strawberries, butter, maple syrup
                        </div>
                    </div>
                </div>
			</div>
			<div class="col-md-4">
                <div class="row-content-7050">
    				<div class="img-type-7050">
    					<img src="img/hinh2.jpg" alt="img-reponsive">
                        <span class="fp_price">$7</span>
    				</div>
                     <div class="menu-info-7050">
                        <div class="content-menu-info-7050">
                            <h3>Blueberry banana pancakes</h3>
                            <div class="menu_description-7050">Banana, almond milk, vanilla, cinnamon, blueberry topping.</div>
                        </div>
                    </div>
                </div>
                 <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="Creamy mascarpone cake with passion fruit sauce">
                           Creamy mascarpone cake with passion fruit sauce
                            <span class="fp_price">$8</span>
                        </h3> 
                        <div class="menu_description-7050">
                        </div>
                    </div>
                </div>
                <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="Fig and lemon cake">
                           Fig and lemon cake
                            <span class="fp_price">$7</span>
                        </h3> 
                        <div class="menu_description-7050">
                        </div>
                    </div>
                </div>
                 <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="Chocolate Cherry Cake with Meringue Butter Cream">
                           Chocolate Cherry Cake with Meringue Butter Cream
                            <span class="fp_price">$8</span>
                        </h3> 
                        <div class="menu_description-7050">
                            Vanilla, milk, dark chocolate, cherries, eggs, butter
                        </div>
                    </div>
                </div>
                 <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="Blueberry Sweet Rolls with Lemon Glaze">
                           Blueberry Sweet Rolls with Lemon Glaze
                            <span class="fp_price">$7</span>
                        </h3> 
                        <div class="menu_description-7050">
                            Butter, blueberries, lemon, heavy cream - an irresistible sweet-sour combination of tastes.
                        </div>
                    </div>
                </div>
			</div>
			<div class="col-md-4">
                <div class="row-content-7050">
    				<div class="img-type-7050">
    					<img src="img/hinh3.jpg" alt="img-reponsive">
                        <span class="fp_price">$7</span>
    				</div>
                     <div class="menu-info-7050">
                        <div class="content-menu-info-7050">
                            <h3>American Brunch Combo Menu</h3>
                            <div class="menu_description-7050">Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.</div>
                        </div>
                    </div>
                </div>
                <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="Coffee &amp; Strawberry Jam French Toast with Strawberry Butter Combo Menu">
                            Coffee &amp; Strawberry Jam French Toast with Strawberry Butter Combo Menu
                            <span class="fp_price">$11</span>
                        </h3> 
                        <div class="menu_description-7050">
                            Hot coffee in the company of fresh bread toast topped with homemade strawberry butter, warm maple syrup, and fresh ...
                        </div>
                    </div>
                </div>
                 <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="American Brunch Combo Menu">
                            American Brunch Combo Menu
                            <span class="fp_price">$15</span>
                        </h3> 
                        <div class="menu_description-7050">
                            Freshly scrambled eggs with applewood smoked bacon, tomatoes, green onions and cheddar cheese.
                        </div>
                    </div>
                </div>
                 <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="Pain au chocolat">
                            Pain au chocolat
                            <span class="fp_price">$4</span>
                        </h3> 
                        <div class="menu_description-7050">
                           Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for an impressive and indulgent addition to ...
                        </div>
                    </div>
                </div>
                 <div class="row-menuitem-7050">
                    <div class="fp_inner_box">
                        <h3 title="Traditional pancakes with maple syrup butter &amp; berry jam">
                            Traditional pancakes with maple syrup butter &amp; berry jam
                            <span class="fp_price">$5</span>
                        </h3> 
                        <div class="menu_description-7050">
                            Milk, eggs, strawberries, butter, maple syrup
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>