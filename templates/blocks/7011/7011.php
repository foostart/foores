<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/modul-12-css.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/7011.less', 'css/7011.css');
        ?> 
        <link href="css/7011.css" rel="stylesheet" type="text/css"/>
		


    </head> 

    <body> 
        <?php include '../7011/7011-content.php'; ?>
    </body>
</html>