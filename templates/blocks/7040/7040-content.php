<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-7040">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <div class="SoftDrinks">
                        <div class="sep-text single centered">
                            <div class="sep-text-before"> 
                                <div class="sep-text-line">
                                </div>
                            </div>
                            <div class="content">
                                <h3>Soft Drinks </h3>
                            </div>
                            <div class="sep-text-after">
                                <div class="sep-text-line">
                                </div>
                            </div>
                            <div class="text-drink">
                                Coffee Specials
                            </div>
                        </div>
                        <div class="img-drinks">
                            <img src="images/header-small-1.jpg" alt="img-reponsive">
                        </div>
                        <div class="menu-coffe">
                            <h3>Caffè macchiato
                                <span class="fp_price">$5.90</span>
                            </h3>
                            <div class="menu_description">
                                An espresso coffee drink with a small amount of milk, usually foamed.
                            </div>
                        </div>
                        <div class="menu-coffe">
                            <h3>Caffè macchiato
                                <span class="fp_price">$5.90</span>
                            </h3>
                            <div class="menu_description">
                                An espresso coffee drink with a small amount of milk, usually foamed.
                            </div>
                        </div>      <div class="menu-coffe">
                            <h3>Caffè macchiato
                                <span class="fp_price">$5.90</span>
                            </h3>
                            <div class="menu_description">
                                An espresso coffee drink with a small amount of milk, usually foamed.
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-2">
                <div class="row">
                    <div class="contact">
                        <div class="txt-contact">
                            <h3>Contact</h3>
                            <p>Book your table for lunch or dinner.</p>
                            <h4>+359 562 958</h4>
                        </div>
                        <a>
                            <span class="reservation">RESERVATION</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="row">
                    <div class="SoftDrinks">
                        <div class="sep-text single centered">
                            <div class="sep-text-before"> 
                                <div class="sep-text-line">
                                </div>
                            </div>
                            <div class="content">
                                <h3>Soft Drinks </h3>
                            </div>
                            <div class="sep-text-after">
                                <div class="sep-text-line">
                                </div>
                            </div>
                            <div class="text-drink">
                                Coffee Specials
                            </div>
                        </div>
                        <div class="img-drinks">
                            <img src="images/header-small-1.jpg" alt="img-reponsive">
                        </div>
                        <div class="menu-coffe">
                            <h3>Caffè macchiato
                                <span class="fp_price">$5.90</span>
                            </h3>
                            <div class="menu_description">
                                An espresso coffee drink with a small amount of milk, usually foamed.
                            </div>
                        </div>
                        <div class="menu-coffe">
                            <h3>Caffè macchiato
                                <span class="fp_price">$5.90</span>
                            </h3>
                            <div class="menu_description">
                                An espresso coffee drink with a small amount of milk, usually foamed.
                            </div>
                        </div>      <div class="menu-coffe">
                            <h3>Caffè macchiato
                                <span class="fp_price">$5.90</span>
                            </h3>
                            <div class="menu_description">
                                An espresso coffee drink with a small amount of milk, usually foamed.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
