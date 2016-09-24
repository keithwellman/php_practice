<?php
function isBitten() {
  return $result = rand(0,1) == 1;
}

echo '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Keith Wellman">
    <meta name="description" content="Charlie Ate My Lunch!">
    <title>Did Charlie eat your lunch?</title>
  </head>
  <body>';

  if (isBitten()) {
    echo "<p>Charlie ate my lunch!</p>";
  }
  else {
    echo "<p>Charlie did not eat my lunch!</p>";
  }


echo '</body>
</html>';
  ?>
