<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/7007.less', 'css/7007.css');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
     
        <link href="css/7007.css" rel="stylesheet" type="text/css"/>
		
	<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/m1-slide-js.js" type="text/javascript"></script>
    <script src="js/modul1-navi-js.js" type="text/javascript"></script>

    </head> 

    <body> 
        <?php include '../7007/7007-content.php'; ?>
    </body>
</html>