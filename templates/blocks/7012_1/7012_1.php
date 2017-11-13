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
        $less->compileFile('less/7012_1.less', 'css/7012_1.css');
        ?> 
        <link href="css/7012_1.css" rel="stylesheet" type="text/css"/>
		
	<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/m1-slide-js.js" type="text/javascript"></script>
    <script src="js/modul1-navi-js.js" type="text/javascript"></script>

    </head> 

    <body> 
        <?php include '../7012_1/7012-content.php'; ?>
    </body>
</html>