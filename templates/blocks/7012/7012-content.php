<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <body>
        <div class="modul-12">
            <div class="row">
                <div class="m10-title">
                    <div class="m10-title-main">
                        <div class="line-before"> 
                            <div class="under-line"></div>
                        </div>
                        <div class="content">
                            <h2 class="content-1">
                                New & Event
                            </h2>
                            <div class="content-2">Today Specials</div>
                        </div>
                        <div class="line-after">
                            <div class="under-line"></div>
                        </div>
                    </div>
                </div>
            </div>
           </div>        
    </body>
</html>