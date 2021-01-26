<?php
  include __DIR__."/db.php";

  header("Content-type: application/json");

  if($_GET["genre"] == "All" || empty($_GET["genre"])) {

    echo json_encode($database);

  } else {

    $filteredDB = array_filter($database,
      function($value) {
        return $value["genre"] == $_GET["genre"];
      });

    echo json_encode($filteredDB);
  }

?>
