<?php
    require __DIR__."/../vendor/autoload.php";
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
    <?php
        use \Classes\Person\Person;
        use \Database\Database;

        $person1 = new Person("Daniel", 28);
        echo $person1->getPerson();

        echo "<br>";

        echo Database::loadDatabase();

    ?>
</body>
</html>