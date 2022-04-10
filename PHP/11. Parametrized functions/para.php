<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametrized functions</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php
    function sports($sname)
    {
        echo "$sname is a great sport<br>";
    }

    sports("Football");
    sports("Basketball");
    sports("Cricket");
    sports("Chess");
    sports("Badminton");
    ?>
</body>

</html>