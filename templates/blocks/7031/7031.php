<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Module 7031</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/7031.less', 'css/7031.css');
    ?>
    <link href="css/7031.css" rel="stylesheet" type="text/css"/>


</head>
<body>
    <div class="type-7031">
        <form action="#" method="post" class="comment-form">
                <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                      <textarea id="comment" name="comment" required="" placeholder="Write us something nice or just a funny joke..." rows="2"></textarea>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <input id="author" name="author" type="text" required="required" value="" size="30" placeholder="John Doe">
                </div>

                <div class="comment-form-email col-md-6 col-sm-12 col-xs-12 col-lg-6">
                    <span id="comment-note">Your email address will not be published.</span>
                   <input id="email" name="email" type="email" required="required" value="" size="30" placeholder="email@example.com">
                </div>

                <p class="form-submit">
                    <input name="submit" type="submit" id="submit" class="submit" value="Add message"> 
                </p>
        </form>
    </div>
</body>
</html>




