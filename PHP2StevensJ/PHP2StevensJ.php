<!--Jacob Stevens COP 3834C.01 Web Application Development 11/27/17  PHP1-->
<html>
<style>
body{
  background-color: rgb(115, 11, 142);
}
</style>
<head>
  <meta charset="UTF-8">
</head>
<body>
<?php
  $arr = array("1","1");
  $sum = 2;
  echo "<h2>Fibonacci Sequence:</h2>";
  echo "<p>";
  echo $arr[0] . " " . $arr[1] . " ";
  for ($i=2; $i < 30; $i++) {
    $arr[$i] = $arr[$i-1] + $arr[$i-2];
    echo $arr[$i];
    echo " ";
    $sum += $arr[$i];
  }
  echo "</p>";
  echo "<h2>Sum of Fibonacci</h2>";
  echo "<p>" . $sum . "</p>";
 ?>
</body>
</html>
