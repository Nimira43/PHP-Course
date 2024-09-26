<?php
$num1 = 28;
$num2 = 7;
$num3 = 8.543;
$num4 = 13;

$res1 = "$num1 + $num2 = " . $num1 + $num2;
echo $res1;
echo '<br />';
$res2 = "$num1 - $num2 = " . $num1 - $num2;
echo $res2;
echo '<br />';
$res3 = "$num1 * $num2 = " . $num1 * $num2;
echo $res3;
echo '<br />';
$res4 = "$num1 / $num2 = " . $num1 / $num2;
echo $res4;
echo '<br />';
$res5 = "$num1 % $num4 = " . $num1 % $num4;
echo $res5;
echo '<br />';
# Assignment Operator
$num5 = 10;
$num5 += 20;   // also: -=   *=   /=
echo $num5;
echo '<br />';
// Functions
echo $num6 = rand(); // random number
echo '<br />';
echo $num7 = getrandMax(); // maximum random number
echo '<br />';
echo $num8 = rand(1, 20); // random number between 1 and 20
echo '<br />';
echo $num9 = round(4.7); // rounds number
echo '<br />';
echo $num10 = round($num3); // rounds number using variable
echo '<br />';
echo $num11 = ceil(4.2); // rounds number up always
echo '<br />';
echo $num12 = floor(4.99999); // rounds number down always
echo '<br />';
echo $num14 = sqrt(35); // square root
echo '<br />';
echo $num15 = pi() * $num2; // pi
echo '<br />';
echo $num16 = abs(-56); // absolute number - always a positive number
echo '<br />';
echo $num17 = max([43, 95, -3, 53, 25, 86, 36]); // finds highest number
echo '<br />';
echo $num18 = min(43, 95, -3, 53, 25, 86, 36); // finds lowest number
echo '<br />';
echo number_format(1234567.174335, 2, '.', ','); // see note below 
echo '<br />';
echo number_format(433455.599443, 2, '.', ','); // see note below
echo '<br />';
// String Functions
$string = "McLaren is my favourite Formula One team";
echo strlen($string); // length of stringr
echo '<br />';


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" href="../images/billy.png">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Basics - 2 </title>
</head>
<style>
  * {
    font-family: 'Poppins', sans-serif;
  }
</style>

<body class="bg-[#111] text-[#ff4500]">
  <header class="bg-[#ff4500] text-[#111] p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Learn PHP 2</h1>
    </div>
  </header>
  <div class="container mx-auto p-2 mt-4 bg-[#87ceeb] text-[#111]">
    <div class="p-2 border-2 border-[#111] mb-2">
      <h2 class="bg-[#ff4500]">TOPICS COVERED</h2>
      <p>Arithmetic Operators & Functions</p>
      <p>String Functions</p>
    </div>
    <div class="p-2 border-2 border-[#111] mb-2">
      <h2 class="bg-[#ff4500]">NOTES</h2>
      <p>With max() you can list numbers without the [] - max(5, 8, 2, 7). In the top example I used the [] inside of max(). Same goes for min().</p>
      <p>Number Format - arguments (decimal number, decimal places, decimal separator, thousands separator) - eg number_format(433455.599443, 2, '.', ',') which would return 433,455.60</p>
    </div>
    <div class="p-2 border-2 border-[#111]">
      <h2 class="bg-[#ff4500]">OUTPUT DEMOS</h2>
    </div>
  </div>
</body>

</html>