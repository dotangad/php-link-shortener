<?php
$f = file_get_contents("routes.json");
$urlMap = json_decode($f, true);

$serverURI = explode('/', $_SERVER['REQUEST_URI']);
$short = $serverURI[sizeof($serverURI) - 1];

if(isset($urlMap[$short])) {
  header('Location: ' . $urlMap[$short]);
} else {
  echo "<code>You're not supposed to be here</code>";
}
?>