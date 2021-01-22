<?php
  include __DIR__."/vars.php";
  include __DIR__."/db.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- foglio di stile personale -->
    <link rel="stylesheet" href="css/style.css">
    <title>php ajax dischi</title>
  </head>
  <body>

    <!-- header -->
    <?php include __DIR__."/template/header.php" ?>
    <!-- header -->

    <!-- main -->
    <main>
      <div class="wrapper">
        <?php foreach ($database as $discContaier) { ?>
          <div class="disc-container"></div>
        <?php } ?>
      </div>
    </main>
    <!-- /main -->

    <!-- footer -->
    <?php include __DIR__."/template/footer.php" ?>
    <!-- /footer -->
  </body>
</html>
