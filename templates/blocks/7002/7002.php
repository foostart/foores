<html>
    <head>
        <title>https://vip-restaurant.vamtam.com/home-layouts/coffee-shop/</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        if (!class_exists('lessc')) {
            include ('../7002/libs/lessc.inc.php');
           
        }
        $less = new lessc;
        $less->compileFile('less/7002.less', 'css/modul-2-css.css');
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/modul-2-css.css" rel="stylesheet" type="text/css"/>
        

    </head>
   <body>
		<?php include '../7002/7002-content.php'; ?>
   </body>
</html>
