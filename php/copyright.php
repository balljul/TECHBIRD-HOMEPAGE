<?php  
require 'sessionStart.php';
?>
<!DOCTYPE html>
<!--------------------------------------------------
====================================================
                                                                                
                                                                                
          ,/                                                                    
            ////*                                                               
             .///***.   ,                                                       
               ///*****,  .*                                                    
                 *//*******  **                                                 
                     ********   **.                                             
                   *//   *******   **,                                          
                     //****  *****    **,             ,,.......        .....    
                       //*****.  ***     ,,     ,,,,,            .....          
                          ,*******   *, *     ,,,   . ,., ,...                  
                          **,   *****     ,*.    ,,, ,,  ,,    ...              
                            ******   .***   ,,,,,,, ,,,,    ,..                 
                             .*********.   *  ,,,, .,,,     ,,                  
                               .***.       ,   *, .,,      .,                   
                    /////    /.       ***       ,   ,,,,   .                    
   (      *((((((*        .//////******      ***  ,,,,,,                        
 ((/((  ((,     ((///   /////////*   *****  ***  ***,,                          
          (   ((((   //////.    ////****** ,*   ***.                            
   (((                                      .****                               
        ((/  .((   .,*////        /////  .*                                     
                /((((( //                                                       
               (((((((                                                          
             ((((((                                                             
          ((.                                                                   
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                
                                                                                                                                                                                  
====================================================
--------------------------------------------------->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../fonts/Teko Webfont/stylesheet.css">
    <title>Copyright</title>
</head>
<body class="copyright-container">
    <?php
        include 'navbar.php';
        $TECHBIRD_COPYRIGHT_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_TITLE'";
    ?>

    <h1 class="heading text-uppercase text-sherpablue text-center center"><?php echo retrieveText($TECHBIRD_COPYRIGHT_TITLE); ?></h1>

    <div class="copyright-text center text-center">
      <p>
        Wir legen großen Wert auf den Schutz deiner persönlichen Daten und halten uns an die geltenden Datenschutzgesetze. <br> Im Folgenden informieren wir dich darüber, welche Daten bei der Nutzung unserer Website erfasst werden und wie wir damit umgehen.
      </p>
      <br><br>
      <h2 class="heading-2">Keine Verwendung von Cookies oder ähnlichen Technologien</h2>
      <br>
      <p>
        Wir verwenden keine Cookies oder ähnliche Technologien auf unserer Website. <br> Es werden keine Daten auf deinem Gerät gespeichert oder gesammelt.
      </p>
      <br><br>
      <h2 class="heading-2">
        Verwendung von PHP Sessions
      </h2>
      <br>
      <p>
        Wir nutzen PHP Sessions, um die Interaktion zwischen deinem Browser und unserer Website zu erleichtern. <br>Dabei werden keine Daten dauerhaft auf deinem Gerät gespeichert. <br>Die Session wird automatisch beendet, sobald du deinen Browser schließt.
      </p>
      <br><br>
      <h2 class="heading-2">Verwendung von Bildern und Icons</h2>
      <br>
      <p>
      Alle auf unserer Website verwendeten Bilder und Icons sind entweder eigene Kreationen oder unterliegen den jeweiligen Urheberrechtsbestimmungen. <br>Wir besitzen alle notwendigen Rechte an den verwendeten Bildern und Icons.
      </p>
      <br><br>
      <h2 class="heading-2">Kontakt</h2>
      <br>
      <p>
      Falls du Fragen zum Datenschutz auf unserer Website hast, kannst du uns gerne kontaktieren.<br> Unsere Kontaktdaten findest du im Impressum.
      </p>
    </div>

    <?php
      include 'footer.php';
    ?>
</body>
</html>