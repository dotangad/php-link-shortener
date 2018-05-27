<?php
$f = file_get_contents("../routes.json");
$urlMap = json_decode($f, true);

if(isset($_GET['supersecretpassword'])) {
  if (isset($_POST['short']) && isset($_POST['long'])) {
    if(isset($urlMap[$_POST['short']])) {
      echo 'exists';
    } else {
      $urlMap[$_POST['short']] = $_POST['long'];
      file_put_contents("../routes.json", json_encode($urlMap));
      echo 'success';
    }
  } else {
    echo '<h1></h1>';
    echo 'url.url/';
    echo '<input />';
  }
}
else {
  echo "<code>You're not supposed to be here</code>";
}
?>