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
  //Arithmatic Operators
  $a = 5 + ((20%3)/1); //Answer should be 7
  echo "You're lucky number is: " .$a;
  echo "<br />";
  //Concatenation Operators
  $x = "Hello ";
  $y = "There! ";
  $z = "How was your day?";
  $line = $x . $y . $z;
  echo $line;
  echo "<br />";
  // Logcial Operators
  $i = 5;
  $j = 5;
  $k = 10;
  $l = 25;
  if ($k > $i && $k > $j and $k < $l or $k == $i + $j || $l == $i * $j) { //Should be True
    echo "True";
  } else {
    echo "False";
  }

 ?>
</body>
</html>
