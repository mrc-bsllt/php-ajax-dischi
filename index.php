<?php
  include __DIR__."/vars.php";
  include __DIR__."/db.php"
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
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

          <div class="disc-container">
            <img src="img/<?= $discContaier["cover"]; ?>" alt="<?= $discContaier["title"]; ?>">
            <div class="text">
              <a href="#">
                <h3><?= $discContaier["title"]; ?></h3>
              </a>
              <a href="#">
                <h4><?= $discContaier["author"]; ?></h4>
              </a>
              <span><?= $discContaier["year_pubblication"]; ?></span>
            </div>
          </div>

        <?php } ?>
      </div>
    </main>
    <!-- /main -->

    <!-- footer -->
    <?php include __DIR__."/template/footer.php" ?>
    <!-- /footer -->
  </body>
</html>
