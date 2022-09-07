<?php
    include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $usersObj = new UsersView();
        $usersObj->showUser('Hermine');

        $usersObj2 = new UsersContr();
        $usersObj2->createUser('Ron', 'Wesley', 'ron@hogwarts.com');
        //$testObj->getUsersStmt("Harry", "Potter", "harry@hogwarts.com");
        //$testObj->getUsers();
        //$testObj->setUsersStmt("Hermine", "Grnager", "hermine@hogwarts.com");
    ?>
</body>
</html>