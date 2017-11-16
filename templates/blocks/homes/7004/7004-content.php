<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="m4">
    <div class="module-4_1">
        <div class="container">
            <div class="row">
                <div class="lavender-grid">
                    <div class="menu-center">
                        <div class="sep-before"> 
                            <div class="sep-line"></div>
                        </div>
                        <div class="content">
                            <h2 class="text-divider-double">
                                We offer
                            </h2>
                            <div class="text-divider-subtitle">Today Specials</div>
                        </div>
                        <div class="sep-after">
                            <div class="sep-line"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="m4_2">
                <div class="row">
                    <div class="col-md-5 content1">
                        <div class="m4-limit">
                            <div class="m4-limit-thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img src="anh/anh5.jpg" class="attachment-full size-full"> </a>
                            </div>
                            <h4 class="m4-limit-services-title">
                                <a href="/" title="Child Friendly">Coffee & Tea</a>
                            </h4>
                            <div class="m4-services-content">
                                <p>Based in Barcelona, Pudding Bar was designed for spending the afternoon with the kids.Its delicious smooth blend and various varieties seductively charm you at the start of your day.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

