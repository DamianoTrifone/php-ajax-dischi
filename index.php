<?php 
    require __DIR__ . '../database.php'; #Utilizzo require perchè senza database l'applicazione non funzionerebbe
    
    // foreach ($albums as $album) {
    //     echo "<img width=100 src=" . $album["poster"] . ">";

    //      echo "<h1>" .$damiano ."</h1>";
    // }
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Boolean Playlist</title>
    </head>
    <body>
            <ul>
            <?php 
                foreach ($albums as $album) {
                    echo "<img src=" . $album["poster"] . ">";
                    echo  "<li>" . $album["title"] . "</li>";
                    echo "<li>" . $album["author"] . "</li>";
                    echo "<li>" . $album["genre"] . "</li>";
                    echo "<li>" . $album["year"] . "</li>";
                };

             ?>
            
            </ul>
        </li>
    </body>
</html>