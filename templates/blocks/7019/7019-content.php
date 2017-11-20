<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

    <body>
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
            </div>
        </div>

    </body>
</html>