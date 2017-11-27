<!DOCTYPE html>
<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/843.less', 'css/843.css');
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width = divice - width, initial - scale = 1.0">

        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
        <a href="fonts/FontAwesome.otf"></a>
        <link href="css/843.css" rel="stylesheet" type="text/css"/>
        
        <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/jquery.js" type="text/javascript"></script>

        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $url_path ?>/css/843.css" rel="stylesheet" type="text/css">

        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js" type="text/javascript"></script>

        <?php
            if (!class_exists('lessc')) {
                include ('./libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('less/843.less', 'css/843.css');
        ?>

    </head>
    <body>
        <?php 
            include "./698-content.php";
        ?>
    </body>
</html>




