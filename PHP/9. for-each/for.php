<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for-each</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    $subjects = array("SE", "PHP", "LINUX", "DAA", "OR");
    echo "My forth sem subjects are: <br> <br>";
    foreach ($subjects as $sub) {
        echo "$sub <br>";
    }
    ?>
</body>

</html>