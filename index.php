<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="./styles/style.css">
  <head></head>
  <body>
    <?php include './timer.php'?>

    <div id="tomato">
      <?php if (!$start) {
        echo 'START';
      } else {
        echo $time;
      } ?>
    </div>

  </body>
</html>