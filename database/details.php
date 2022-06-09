<?php
    require 'functions.php';
    $connection = dbconnect();

    if( !isset( $_GET['id']) ){
        echo "De id is niet gezet";
        exit;
    }

    $id = $_GET['id'];
    $check_int = filter_var($id, FILTER_VALIDATE_INT);
    if($check_int == false){
        echo"ditis geen getal";
        exit;
    }
     
    $statement = $connection->prepare('SELECT * FROM `projecten` WHERE id=?');
    $params = [$id];
    $statement->execute($params);
    $place = $statement->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time()?>">
    <title></title>
</head>
<body class="body" >
    
        <figure class="projects-details" style="background-image: url(/database/img/<?php echo $place['foto'];?>)" > </figure>

</body>

</html>



