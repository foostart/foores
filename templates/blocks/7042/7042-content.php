<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<header class='type-7042'>
    <div class="module-quocdat">

            <div class="container">
                <div class="row">
                    <div class="vamtam-add-ornaments-top manhphuc-level-01 col-md-12 pt40 pb20">
                        <div class="row">
                            <div class="manhphuc-grid manhphuc-level-02 col-md-12 pt005 pb005">
                                <p class="text-center">
                                    <img src="images/Capture.PNG">
                                    <h4 class="text-center fs24">SEASONAL INSPIRATION MENU</h4>
                                    <span class="vamtam-blank-space height-10"></span>
                                    <p class="vamtam-font-style-2 text-center">Cook with passion, purpose and intensity or don’t cook at all.</p>
                                </p>
                            </div>
                        </div>
                        <div class="vamtam-blank-space  vamtam-hide-lowres height-40"></div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 vamtam-add-ornaments-all pt005 pb60">
                        <div class="row">

                            <!-- Blog One -->
                            <div class="pt005 pb005 col-md-4">
                                <div class="foodpress_menu fp_single_item_box">
                                    <div class="new_ft3_layout fp_box menuItem c_100 normal_item fp_popTrig style_ft3 bghighl">
                                        <div class="new_ft_img3">
                                            <img src="images/Seafood-1.jpg" alt="" class="img-responsive">
                                            <span class="fp_price">$39</span>
                                        </div>
                                        <div class="menu_info ">
                                            <div class="fp_inner_box">
                                                <h3 class="">Head on prawns, manila clams &amp; mussels</h3>
                                                <div class="menu_description">
                                                    These small shellfish have a sweet flavour and a firm texture.
                                                    <a class="fp_popTrig fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog One -->

                            <!-- Blog Two -->
                            <div class="pt005 pb005 col-md-4">
                                <div class="foodpress_menu fp_single_item_box">
                                    <div class="new_ft3_layout fp_box menuItem c_100 normal_item fp_popTrig style_ft3 bghighl">
                                        <div class="new_ft_img3">
                                            <img src="images/Seafood-2.jpg" alt="" class="img-responsive">
                                            <span class="fp_price">$6.90</span>
                                        </div>
                                        <div class="menu_info ">
                                            <div class="fp_inner_box">
                                                <h3 class="">Campari</h3>
                                                <div class="menu_description">
                                                    Campari's bracing bitterness and lush grapefruit notes are refreshing when mixed simply with soda, drunk before dinner to awaken ...
                                                    <a class="fp_popTrig fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Two  -->

                            <!-- Blog Three -->
                            <div class="pt005 pb005 col-md-4">
                                <div class="foodpress_menu fp_single_item_box">
                                    <div class="new_ft3_layout fp_box menuItem c_100 normal_item fp_popTrig style_ft3 bghighl">
                                        <div class="new_ft_img3">
                                            <img src="images/Seafood-3.jpg" alt="" class="img-responsive">
                                            <span class="fp_price">$9.50</span>
                                        </div>
                                        <div class="menu_info ">
                                            <div class="fp_inner_box">
                                                <h3 class="">Creamy smoked salmon, leek & potato soup</h3>
                                                <div class="menu_description">
                                                    Served in deep bowls with smoked salmon and snipped chives on the top.
                                                    <a class="fp_popTrig fp_inline_btn"> Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Blog Three  -->
                                <!--
            <div class="fp_lightbox fp_popup menu view show">
                <div class="fp_content_in">
                    <div class="fp_content_inin">
                        <div class="fp_lightbox_content">

                            <a class="fplbclose">X</a>
                            <div class="fp_lightbox_body fp_pop_body fp_pop_inner">
                                <div class="fp_menucard_content fp_lightbox show">
                                    <div class="fp_popup_img fp_header image">
                                        <img src="images/Seafood-1.jpg" alt="" class="img-responsive">
                                        <div class="fp_pop_headerS">
                                            <span class="fp_popup_img_title">Head on prawns, manila clams &amp; mussels</span>
                                            <span class="fp_popup_img_subtitle">Octopus, fennel, garlic, baby corn, white wine, old bay spice, grilled bread</span>
                                            <span class="fp_popup_img_price">$39</span>
                                        </div>
                                    </div>

                                    <div class="fp_inner_box fp_details">
                                        <p class="fp_menu_type">
                                            <span>Dinner</span>
                                            <span>Lunch</span>
                                        </p>
                                        <h3>Head on prawns, manila clams &amp; mussels</h3>
                                        <div class="menu_description">
                                            <p>These small shellfish have a sweet flavour and a firm texture.</p>
                                        </div>
                                        <p class="menu_additional_details">350g</p>
                                    </div>

                                    <div class="fp_popup_option tint iconrow">
                                        <span class="fp_menudata_icon">
                                            <i title="Spicy Level" class="fa fp-chili-alt"></i>
                                        </span>
                                        <div class="fp_inner_box">
                                            <h4 class="fp_popup_option_title spicemeter2">Spicy Level <dt>1/5</dt> <span><em style="width:20%"></em></span></h4>
                                        </div>
                                    </div>

                                    <div class="fp_popup_option tint iconrow">
                                        <span class="fp_menudata_icon">
                                            <i title="Nutritions" class="fa fa-cutlery"></i>
                                        </span>
                                        <div class="fp_inner_box">
                                            <h4 class="fp_popup_option_title">Nutritions</h4>
                                            <div class="fp_nutritions">
                                                <p class="fp_text"><b>calories</b> 250kcal<br><b>fiber</b> 2.0g<br><b>carbohydrates</b> 4.5g<br><b>protein</b> 1.7g<br></p>
                                                <p class="fp_text"><b>cholesterol</b> 50mg<br><b>sodium</b> 175mg<br><b>fat</b> 3.0g<br></p>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="fp_popup_option fp_ingredients tint iconrow">
                                        <span class="fp_menudata_icon">
                                            <i title="Ingredients" class="fa fa-book"></i>
                                        </span>
                                        <div class="fp_inner_box">
                                            <h4 class="fp_popup_option_title">Ingredients</h4>
                                            <div class="clear"></div>
                                            <div class="fp_text ffgeo">
                                                <p>Our menu contains allergens. If you suffer from a food allergy or intolerance please let a member of the restaurant team know upon placing your order.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>>