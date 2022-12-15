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
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    if(strlen($name) > 3 && strpos($mail, "@") && strpos($mail, ".") && is_numeric($age)){
        echo "Accesso Riuscito";
    }else{
        echo "Accesso Negato";
    };
    ?>

    <form action="" method="get">
     <label for="name">Name</label>
     <input type="text" name="name" id="name">
     <label for="mail">Mail</label>
     <input type="text" name="mail" id="mail">
     <label for="age">Age</label>
     <input type="text" name="age" id="age">   
     <button>Accedi</button>
    </form>
</body>
</html>