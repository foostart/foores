<?php
    $url_host = $_SERVER['HTTP_HOST'];

    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];

    $url_path = str_replace('\\', '/', $url_path);
    ?>

    <div class="type-7028">
        <div class="banner">
            <div class="container"> 
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-75c4bf309c7d79acd2294b80eef4cf00">
                            <div class="team-member has-content">
                                <div class="thumbnail">
                                    <a href="#" title="Brad Farmerie"><img src="images/people-1.jpg"> </a>
                                    <div class="share-icons clearfix">
                                        <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-google-plus" aria-hidden="true"></i></span></a>
                                        <a href="#" title=""><span class="icon shortcode theme  use-hover" style=""></span></a>
                                        <a href="#" title=""><span class="icon shortcode   use-hover" style=""><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
                                        <a href="#" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                    </div>
                                </div>
                                <div class="team-member-info">
                                    <h4>
<a href="#" title="Brad Farmerie">
Brad Farmerie </a>
</h4>
                                    <h6 class="regular-title-wrapper team-member-position"> CEO &amp; FOUNDER </h6>
                                    <div class="team-member-phone"><a href="#" title="Call Brad Farmerie">Tel: 947 577 575</a></div>
                                    <div><a href="#" title="email Brad Farmerie">chef@vamtam.com</a></div>
                                    <div class="team-member-bio">
                                        <p>Brad Farmerie took a year hiatus from college to move to London and witness firsthand the culinary revolution taking place in the UK.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-bd484cad0af4a7cf5a4cfaa414e711e6">
                            <div class="team-member has-content">
                                <div class="thumbnail">
                                    <a href="#" title="Brad Farmerie"><img src="images/people-2.jpg"></a>
                                    <div class="share-icons clearfix">
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                    </div>
                                </div>
                                <div class="team-member-info">
                                    <h4>
<a href="#" title="Brad Farmerie">
Brad Farmerie </a>
</h4>
                                    <h6 class="regular-title-wrapper team-member-position"> MANAGER </h6>
                                    <div class="team-member-phone"><a href="#" title="Call Brad Farmerie">Tel: 947 577 575</a></div>
                                    <div><a href="#" title="email Brad Farmerie">chef@vamtam.com</a></div>
                                    <div class="team-member-bio">
                                        <p>Brad Farmerie took a year hiatus from college to move to London and witness firsthand the culinary revolution taking place in the UK.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-2d98c10264b52a693abf61d3f75050a3">
                            <div class="team-member has-content">
                                <div class="thumbnail">
                                    <a href="#" title="Avroko"><img src="images/people-3.jpg"></a>
                                    <div class="share-icons clearfix">
                                        <a href="/" title=""><span class="icon shortcode theme  use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                    </div>
                                </div>
                                <div class="team-member-info">
                                    <h4>
<a href="#" title="Avroko">
Avroko </a>
</h4>
                                    <h6 class="regular-title-wrapper team-member-position"> MASTER CHEF </h6>
                                    <div class="team-member-phone"><a href="#" title="Call Avroko">Tel: 947 577 575</a></div>
                                    <div><a href="#" title="email Avroko">owners@vamtam.com</a></div>
                                    <div class="team-member-bio">
                                        <p>Four partners, 14 years, multiple disciplines rooted in hospitality.
                                            <br> New York-headquartered design-and-concept firm AvroKO.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-c5e303f82d25f9bc1848186f6f3051e5">
                            <div class="team-member has-content">
                                <div class="thumbnail">
                                    <a href="#" title="Dan Rafalin"><img src="images/people-4.jpg"></a>
                                    <div class="share-icons clearfix">
                                        <a href="/" title=""><span class="icon shortcode theme  use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                    </div>
                                </div>
                                <div class="team-member-info">
                                    <h4>
<a href="#" title="Dan Rafalin">
Dan Rafalin </a>
</h4>
                                    <h6 class="regular-title-wrapper team-member-position"> SOUS CHEF </h6>
                                    <div class="team-member-phone"><a href="tel:http://947%20577%20575" title="Call Dan Rafalin">Tel: 947 577 575</a></div>
                                    <div><a href="mailto:http://manager@vamtam.com" title="email Dan Rafalin">manager@vamtam.com</a></div>
                                    <div class="team-member-bio">
                                        <p>Dan Rafalin has been immersed in the culinary world from the beginning of his career when he received a Grand Diplôme in culinary arts.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="vamtam-blank-space " style="height:30px"></div>
        <div class="limit-wrapper">
            <div class="row ">
                <div class="vamtam-grid grid-1-1  vamtam-first-level grid-1-1  first unextended animation-fade-in animated-active no-extended-padding animation-ended" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-083ade3e8a5e7ad59adcbd80ecbc98f0">
                    <p style="text-align: center;">❈</p>
                </div>
            </div>
        </div>
        <div class="vamtam-blank-space  vamtam-hide-lowres" style="height:60px"></div>

        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-d90e3ce874009dccb5049e017004defd">
                            <div class="team-member has-content">
                                <div class="thumbnail">
                                    <a href="#" title="Evan Mattew"><img src="images/people-5.jpg"></a>
                                    <div class="share-icons clearfix">
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode theme  use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                    </div>
                                </div>
                                <div class="team-member-info">
                                    <h4>
<a href="#" title="Evan Mattew">
Evan Mattew </a>
</h4>
                                    <h6 class="regular-title-wrapper team-member-position"> ASSISTANT </h6>
                                    <div class="team-member-phone"><a href="#
                                    <div><a href="#" title="email Evan Mattew">fish@vamtam.com</a></div>
                                    <div class="team-member-bio">
                                        <p>Evan Mattew&nbsp;prepares fish dishes and often does all fish butchering as well as appropriate sauces. This station may be combined with the saucier position…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-03d2d503e30cb0057cf3933968865f7e">
                            <div class="team-member has-content">
                                <div class="thumbnail">
                                    <a href="#" title="Mat Hobs"><img src="images/people-6.jpg"></a>
                                    <div class="share-icons clearfix">
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode theme  use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                    </div>
                                </div>
                                <div class="team-member-info">
                                    <h4>
<a href="#" title="Mat Hobs">
Mat Hobs </a>
</h4>
                                    <h6 class="regular-title-wrapper team-member-position"> WAITER </h6>
                                    <div class="team-member-phone"><a href="#" title="Call Mat Hobs">Tel: 947 577 575</a></div>
                                    <div><a href="#" title="email Mat Hobs">roast@vamtam.com</a></div>
                                    <div class="team-member-bio">
                                        <p>Mat Hobs prepares roasted and braised meats and their appropriate sauce.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-dc36b510efca2312da1ca57a2607220a">
                            <div class="team-member has-content">
                                <div class="thumbnail">
                                    <a href="#" title="Paul Jones"><img src="images/people-7.jpg"> </a>
                                    <div class="share-icons clearfix">
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                    </div>
                                </div>
                                <div class="team-member-info">
                                    <h4>
<a href="#" title="Paul Jones">
Paul Jones </a>
</h4>
                                    <h6 class="regular-title-wrapper team-member-position"> WAITER </h6>
                                    <div class="team-member-phone"><a href="#" title="Call Paul Jones">Tel: 947 577 575</a></div>
                                    <div><a href="#" title="email Paul Jones">pantry@vamtam.com</a></div>
                                    <div class="team-member-bio">
                                        <p>Paul Jones is responsible for preparing cold foods including salads, cold appetizers, pâtés and other charcuterie items.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="vamtam-grid grid-1-4  vamtam-first-level grid-1-4  unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-1334949e3036f2e2e271dce1c8cf0c29">
                            <div class="team-member ">
                                <div class="thumbnail">
                                    <a href="#" title="Gregory Barron"><img src="images/people-8.jpg"></a>
                                    <div class="share-icons clearfix">
                                        <a href="/" title=""><span class="icon shortcode theme  use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                        <a href="/" title=""><span class="icon shortcode   use-hover" style=""></span></a>
                                    </div>
                                </div>
                                <div class="team-member-info">
                                    <h4>
<a href="#" title="Gregory Barron">
Gregory Barron </a>
</h4>
                                    <h6 class="regular-title-wrapper team-member-position"> WAITER </h6>
                                    <div class="team-member-phone"><a href="#" title="Call Gregory Barron">Tel: 947 577 575</a></div>
                                    <div><a href="#m" title="email Gregory Barron">pastry@vamtam.com</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>