<form id="style_form" action="index.php" method="GET">
<select name="css">
<option value="style1">style1</option>
<option value="style2">style2</option>
</select>
<input type="submit" value="Appliquer" />
</form>


<?php
$style = 'style1';

if(isset($_COOKIE['style'])){
    $style = $_COOKIE['style'];
}

if(isset($_GET['css'])){
    setcookie('style' , $_GET['css']) ;
    $style = $_GET['css'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php echo "<link rel= 'stylesheet' href = {$style} />" ; ?>
</head>
</html>
