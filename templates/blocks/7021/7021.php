<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/7021.less', 'css/7021.css');
        ?>

        <link href="css/7021.css" rel="stylesheet" type="text/css"/>

</head>
<body>
    <div class="mui_ten"></div>

    <div class="type-7021">
        
        <div class="cone-top"></div>

        <!-- TOP ROW -->
        <div class="row ">
          <div class="vamtam-grid-top col-md-12">
            <div class="row ">
              <div class="grid-dot">
                <p>❈</p>
              </div>
            </div>
            <div class="vamtam-blank-space"></div>
            <div class="row ">
              <div class="grid-text">
                <p>Since I was a kid I was Massimo Bottura — I was escaping from my older brother under the table in the kitchen and from down there, where my grandmother was defending me, in the meantime she was rolling pasta, i was looking at the world from another point of view. It’s what we do in Osteria Francescana every day.
                </p>
              </div>
            </div>
            <div class="vamtam-blank-space"></div>
            <div class="row ">
              <div class="grid-dot">
                <p>❈</p>
              </div>
            </div>
           </div>
        </div>
        <!-- END TOP ROW -->

        <div class="cone-midle"></div>

        <!-- BOTTOM ROW -->
        <div class="vamtam-grid-bottom">
          
              <div class="row">
                <div class="limit-wrapper">

                <div class="col-sm-12 col-md-4">
                  <h4 class="color-accent-1">1995</h4>
                  <p>Opens Osteria Francescana, Via Stella 22 Modena Italy</p>
                </div>

                <div class="col-sm-12 col-md-4">
                <h4 class="color-accent-1">2002</h4>
                <p>Michelin Guide One-Michelin-Star. Gambero Rosso Up and Coming Chef Award.</p>
                </div>

                <div class="col-sm-12 col-md-4">
                  <h4 class="color-accent-1">2016</h4>
                  <p>The world’s 50 restaurants 1st best restaurant in the world. Michelin Guide<br>
                  three-michelin-stars.</p>
                </div>
                
                </div>
            </div>

      </div>
      <!-- END BOTTOM ROW -->

      <div class="cone-bottom"></div>

  </div>
</body>
</html>




