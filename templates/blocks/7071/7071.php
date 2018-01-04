<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/7071.less', 'css/7071.css');
        ?> 
        <link href="css/7071.css" rel="stylesheet" type="text/css"/>

        <script src="<?php echo $url_path ?>js/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>js/m1-slide-js.js" type="text/javascript"></script>
        <script src="<?php echo $url_path ?>js/modul1-navi-js.js" type="text/javascript"></script>
        <link href="<?php echo $url_path ?>css/font-awesome.min.css" rel="stylesheet">       

    </head> 

    <body> 
        <?php include '../7071/7071-content.php'; ?>
    </body>
</html>