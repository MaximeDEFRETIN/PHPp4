<html>
    <head>
        <title>Exercice 4</title>
    </head>
    <body>
<?php
  $n1 = 63;
  $n2 = 78;
  function string($n1, $n2){
      if ($n1 > $n2) {
          return $n1 . ' est plus grand que ' . $n2;
      }
      elseif ($n1 < $n2) {
      return $n2. ' est plus grand que ' . $n1;
  }
  elseif ($n1 = $n2) {
      return $n2. ' vaut ' . $n1;  
}
  };
  echo string($n1, $n2);
?>
    </body>
</html>