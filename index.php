
<?php if(!isset($name)){
    $name = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Form Validation </h1>

    <form action="result.php" method="POST">
        Name:
        <input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>"><br><br>
        Password:
        <input type="password" name="password" value="<?php echo htmlspecialchars($pass) ?>"><br><br>


        <input type="submit" name="submit" value="Registration">
</form>
</body>
</html>