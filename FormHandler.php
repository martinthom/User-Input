<?php
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $theirNAme = htmlspecialchars($_POST['whatTheUserPutInAsName']);
  $theirEmail  = htmlspecialchars($_POST['whatTheUserPutInAsEmail']);
  $theirMessage  = htmlspecialchars($_POST['whatTheUserPutInAsMessage']);

  echo  $theirNAme, ' ', $theirEmail, ' ', $theirMessage;
?>