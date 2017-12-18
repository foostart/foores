<html>
<head>
  <?php
  if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/7029.less', 'css/7029.css');
  ?>
  <link href="css/7029.css" rel="stylesheet" type="text/css" />

</head>

<body>
  <div class="Module-7029">
    <div class="chef">
      <img src="images/chef.png">
    </div>
    <div class="text">
      
        <div class="title">
          <h3>Join the team!</h3>
        </div>
        <div class="name">
            <p>We are always looking for dedicated and passionate individuals who are striving to build their career in the hospitality industry.<br>
          If you would like to be part of this award winning team please visit our Current Vacancies page and apply online.<br>
          We also offer an internship programme in our Support Office.
          </p>
        </div>
        
      <button class="hvr-sweep-to-top"> 
        Apply Now
      </button>
    </div>
      
  </div>
</body>
</html>