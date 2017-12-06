<!--Jacob Stevens COP 3834C.01 Web Application Development 12/5/17  PHP 3-->
<html>
<style>
body{
  background-color: rgb(115, 11, 142);
}
</style>
<body>
  <?php

  $x = $_POST["first"];
  $y = $_POST["ratio"];
  $z = 0;

  echo "First Term:  " . $x . "<br />" . "Ratio:  " . $y;
  function tenNum($a, $b){
    if ($a == 10) {
       echo "<p>The tenth number in this iteration is: </p>" . $b . "<br />";
    }
  }
  function add($sum, $first, $ratio){
    $sum = $first;
    for ($i = 0; $i < 20; $i++) {
        tenNum($i, $first);
        $first *= $ratio;
        $sum += $first;
      }
      return $sum;
    }
  function display($z, $x, $y){
    echo "<br />";
    echo "Sum: " . add($z, $x, $y);
  }
  display($z, $x, $y);
   ?>
</body>
</html>
