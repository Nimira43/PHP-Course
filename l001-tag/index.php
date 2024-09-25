<?php
echo 'Hello!';
echo '<br />';
print 'Hello from Print';
echo '<br />';
echo 'One', 'Two', 'Three'; // Cannot do this with print
echo '<br />';

/*
    Multi
    Line
    Comment
    */
// Variables -----------------------------------------------------------
$title = 'Learn PHP';
// Data Types ----------------------------------------------------------
$name = 'Lenny';
var_dump($name); # gives data types
echo '<br />';
echo getType($name); # gives data type
$age = 52;
echo '<br />';
var_dump($age);
echo '<br />';
$pi = 3.14;
var_dump($pi);
echo '<br />';
$active = true;
var_dump($active);
echo '<br />';
$things = ['apple', 34, '45', true, 45.938];
var_dump($things);
echo '<br />';
$person = new stdClass(); #object
var_dump($person);
echo '<br />';
$car = null;
var_dump($car);
echo '<br />';
# Resource - data type - this can be something like a file 
$shopping_list = fopen('resource.txt', 'r');
var_dump($shopping_list);
echo '<br />';
# String and String Concatenation -----------------------------------------
$firstname = 'Bob';
$lastname = 'Jones';
$fullname = $firstname . $lastname; # the . concats the strings. JS uses +
echo $fullname;
echo '<br />';
$fullname2 = $firstname . ' ' . $lastname;
echo $fullname2;
echo '<br />';
# Don't need below tag in a pure PHP file.
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
    <title>PHP Lessons 1- </title>
</head>
<style>
    * {
        font-family: 'Poppins', sans-serif;
    }
</style>

<body class="bg-[#111] text-[#ff4500]">
    <header class="bg-[#ff4500] text-[#111] p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $title ?></h1>
        </div>
    </header>
    <div class="container mx-auto p-2 mt-4 bg-[#87ceeb] text-[#111]">
        <div>
            <h2 class="bg-[#ff4500]">NOTES</h2>
            <p>Anything in the PHP tags is rendered by the Server</p>
            <p><?php echo 'Using echo to print out something to the screen'; ?></p>
            <p><?= 'This is the shorthand PHP echo tag'; ?></p>
            <?php echo '<h1>Using HTML tags within PHP echo.</h1>'; ?>
            <h2 class="bg-[#ff4500]">TOPICS COVERED</h2>
            <ul>
                <li>Tags, Printing and Comments</li>
                <li>Variables</li>
                <li>Data Types - String, Integer, Float, Boolean, Array, Object, Null, Resource</li>
                <li>Strings and Concatenation</li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div>
                <h2 class="bg-[#ff4500]">OUTPUT DEMOS</h2>
                <?= $fullname ?><br />
                <?= 'Hello there ' . $fullname2 . '<br />' ?>
                <?= "Hello there $fullname2" ?><br />
                <?= 'Isn\'t it. Ain\'t it. She\'s here. Escapin\' characters' ?><br />
            </div>
        </div>
    </div>
</body>

</html>