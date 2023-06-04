<?php

function retrieveText($sql){
    include 'connect.php';
    $data = $conn->query($sql);
 
    foreach($data as $text){
        return $text[$_SESSION['lang']];
    }
    
}

?> 