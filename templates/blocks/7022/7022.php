<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Duy</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/7022.less', 'css/7022.css');
        ?>
        <link href="css/7022.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/amination.js"></script>
        <style id="front-all-inline-css" type="text/css">
            @font-face {
                font-family: 'theme';
                src: url(./fonts/theme-icons.ttf) format('truetype');
                font-weight: normal;
                font-style: normal;
            }
        </style>
</head>
<body>
    <div class="type-7022">
        <div id="span-setting" class="open">
            <span id="toggle-style-switcher" class="open"></span>
        </div>
        <div id="style-switcher" class="open">
            <section class="style-switcher-group clearfix buttons">
                <h4>- Styles -</h4>
                <div class="section-contents">
                    <a href="#" name="Orange" class="active" style="background-color: rgb(203, 113, 82); width: 50px; height: 50px;"></a><a href="#" name="Gold" style="background-color: rgb(205, 155, 51); width: 50px; height: 50px;"></a>
                    <a href="#" name="Green" style="background-color: rgb(136, 182, 73); width: 50px; height: 50px;"></a><a href="#" name="Blue" style="background-color: rgb(95, 177, 178); width: 50px; height: 50px;"></a>
                </div>
            </section>
            <section class="style-switcher-group clearfix select">
                <h4>- Header Layout -</h4>
                <div class="section-contents">
                    <div class="clearfix">
                        <select>
                            <option value="#">Single Row</option>
                            <option value="#">Logo - Left</option>
                            <option value="#">Logo - Centered</option>
                        </select>
                    </div>
                </div>
            </section>
            <section class="style-switcher-group clearfix select">
                <h4>- Top Bar -</h4>
                <div class="section-contents">
                    <div class="clearfix">
                        <select>
                            <option value="#">Off</option>
                            <option value="#">Menu, Social Icons</option>
                            <option value="#">Social Icons, Menu</option>
                            <option value="#">Social Icons, Text</option>
                            <option value="#">Text, Menu</option>
                            <option value="#">Menu, Text</option>
                            <option value="#">Text, Social Icons</option>
                        </select>
                    </div>
                </div>
            </section>
            <section class="style-switcher-group clearfix buttons">
                <div class="section-contents"><a href="#" name="Reset">Reset</a></div>
            </section>
        </div>

        <a href="#" id="back-to-top" title="Back to top"><span class="glyphicon glyphicon-chevron-up"></span></a>
    </div>

</body>
</html>




