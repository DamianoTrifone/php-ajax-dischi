<?php 
    require __DIR__ . '../database.php'; #Utilizzo require perchè senza database l'applicazione non funzionerebbe
    
    foreach ($albums as $album) {
        echo json_encode($album);
    }
; ?>
