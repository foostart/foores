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
$less->compileFile('less/7023.less', 'css/7023.css');
?>
<!DOCTYPE html>
<html>
    <head>
    <head>
        <meta charset="UTF-8">
        <title>7023</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/owl.theme.min.css" type="text/css">
        <link href="<?php echo $url_path ?>/css/7023.css" rel="stylesheet" type="text/css"/>   
        <script type="text/javascript" src="<?php echo $url_path ?>/js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="<?php echo $url_path ?>/js/owl.carousel.min.js"></script>

        <script src="js/7023.js"></script>

    </head>
    <body>
        <?php include '../7023/7023-content.php'; ?>
    </body>
</html>