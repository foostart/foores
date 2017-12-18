<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>7026</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>  
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/7026.less', 'css/7026.css');
        ?>
        <link href="css/7026.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div class="type-7026">
            <div class = "container-fluid">    
                <div class="row">
                    <div class="col-md-10 col-md-push-1"> 
                        <h3 style="text-align: center;">If you want to become a great chef, you have to work with great chefs. And that’s exactly what I did.</h3>
                        <h6 class="vamtam-font-style-2 with-color" style="text-align: center;">Michael Strahan</h6>
                        <span class="blank-space " style="height:10px"></span>
                        <p style="text-align: center;">❈</p>
                    </div>
                </div>
            </div>
        </div>        
    </body>
    </html>




