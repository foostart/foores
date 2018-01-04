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
$less->compileFile('less/7062.less', 'css/7062.css');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>7062</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/7062.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/modul-0-splash.js" ></script>
        <link rel='stylesheet' id='fp_res_jquery_ui_style-css' href='//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.min.css' type='text/css' media='all' />


    </head> 
    <body>
        <?php include './7062-content.php'; ?>
    </body>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/datepicker.min.js" ></script>
    <script >
        $(function () {
            $("#datepicker").datepicker();
        });
    </script>


    <script >
        $(document).ready(function () {
            $("#text-require").click(function () {
                $(".error-mes1").css('color', 'red');
                $(".error-mes1").show();
            });

        });
    </script>

</html>