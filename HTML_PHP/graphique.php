<html>
  <head>
    <title>PHP and R Integration Sample</title>
  </head>
  <body>
    <div id="r-output" id="width: 100%; padding: 25px;">
    <?php
      // Execute the R script within PHP code
      // Generates output as test.png image.
      exec('test_corr.R', $output);
      $corr = substr($output[0], 3, 6);
      echo $corr;
    ?>
    <img src="test.png?var1.1" alt="R Graph"/>
    </div>
  </body>
</html>
