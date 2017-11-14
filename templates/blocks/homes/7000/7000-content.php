<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
 <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/7000.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/modul-0-splash.js" type="text/javascript"></script> 
    <body>
        <div class="m-splash-screen">
            <div class="m-splash-screen-progress-wrapper">
                <img src="img/logo-dark.svg" class="attachment-full size-full">
                <div class="m-splash-screen-progress"></div>
            </div>
        </div>
    </body>
   
</html>
