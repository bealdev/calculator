<?php
function simpleCalc($num1,$num2,$op){
  $answer = '';
  switch($op){
    case '+':
      $answer =  $num1 + $num2;
      break;
    case '-':
      $answer =  $num1 - $num2;
      break;
    case 'x':
      $answer =  $num1 * $num2;
      break;
    case '/':
      $answer =  $num1 / $num2;
      break;
    default:
      $answer =  "Invalid Number";
  }

  return $answer;
}
?>

<form action='calc.php' method='post'>
  First Number: <input type='number' name='num1'><br>
  Operator: <input type='textbox' name='op'><br>
  Second Number: <input type='number' name='num2'><br>
  <input type='submit'>
</form>

<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];

echo simpleCalc($num1,$num2,$op);


?>
