<?php
    require 'functions.php';
    $connection = dbconnect();
     
    $result = $connection->query("SELECT * FROM `projecten`")


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time()?>">
    <title>Projecten</title>
</head>
<body>
<section class="testimonial">
                <div class="small-container">
                    <div class="row">
                    <?php foreach($result as $row): ?>
                        <div class="col-3">
                            <i class="quote"></i>
                            <p class="text"><?php echo $row['beschrijving'] ?></p>
                            
                            <figure class="projects-img" style="background-image: url(/database/img/<?php echo $row['foto'];?>)" > </figure>
                            <h3><?php echo $row['titel']?></h3>
                            <a target="blanck" href="details.php?id=<?php echo $row['id'];?>" class="btn">Full Project</a>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </section>
</body>

</html>

