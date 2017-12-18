<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
        <link href="https://fonts.googleapis.com/css?family=Handlee" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
    <a href="fonts/FontAwesome.otf"></a>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/7026.less', 'css/7026.css');
    ?>
    <link href="css/7026.css" rel="stylesheet" type="text/css"/>
    <script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery.js" type="text/javascript"></script>


</head>
<body>
    <div class="type-7026">
        <div class="row">
            <div class="col-md-10 col-md-push-1"> 
                <h3 style="text-align: center;">If you want to become a great chef, you have to work with great chefs. And that’s exactly what I did.</h3>
                <h6 class="vamtam-font-style-2 with-color" style="text-align: center;">Michael Strahan</h6>
                <span class="blank-space " style="height:10px"></span>
                <p style="text-align: center;">❈</p>
            </div>
        </div>
    </div>        
</body>
</html>




