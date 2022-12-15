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
       
        $games = [
            ["homeTeam" => "Olimpia Milano",
            "guestTeam" => "Cantu",
            "score" => "55-60"],
            ["homeTeam" => "Olimpia Milano1",
            "guestTeam" => "Cantu1",
            "score" => "11-29"],
            ["homeTeam" => "Olimpia Milano2",
            "guestTeam" => "Cantu2",
            "score" => "16-55"],
            ["homeTeam" => "Olimpia Milano3",
            "guestTeam" => "Cantu3",
            "score" => "60-16"]
        ];
    ?>
    <ul>
        <?php for($i = 0;$i < count($games);$i++) {?>
        <li><?php echo $games[$i]["homeTeam"] ?> - <?php echo $games[$i]["guestTeam"]?> | <?php echo $games[$i]["score"] ?></li>
        <?php } ?>
    </ul>  
</body>
</html>