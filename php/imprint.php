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
    <title>Imprint</title>
</head>
<body class="imprint-container bg-light">

<?php
    include 'navbar.php';

    $TECHBIRD_IMPRINT_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TITLE'";
?>
<h1 class="heading text-uppercase text-persiangreen text-center center"><?php echo retrieveText($TECHBIRD_IMPRINT_TITLE); ?></h1>

<p class="imprint-text text-center center">
    
    <span>Angaben gemäß  Informationspflicht laut §5 E-Commerce Gesetz, §14  Unternehmensgesetzbuch, §63  Gewerbeordnung und Offenlegungspflicht laut §25 Mediengesetz.</span>
    <br>
    <br>
    <span>
        <span>TECHBIRD</span>
        <br>
        <span>RINGSTRAßE 199,</span>
        <br>
        <span>1010 Wien, Innere Stadt</span>
    </span>
    <br>
    <br>
    <span>
        <span class="text-persiangreen">Unternehmensgegenstand:</span>
        <span>IT-Dienstleistungen</span>
        <br>
        <span class="text-persiangreen">UID-Nummer: </span>
        <span>ATU12345678</span>
        <br>
        <span>GLN: 128973562</span>
        <br>
        <span>GISA: 56836294</span>
        <br>
        <span>Firmenbuchnummer: </span>
        <br>
        <span>Firmenbuchgericht:</span>
        <br>
        <span>Firmensitz:</span>
    </span>
    <br>
    <br>
    <span>
        <span>Tel.: +43 660 6149774</span>
        <br>
        <span>Fax.: 6238 / 23847</span>
        <br>
        <span>E-Mail: office@techbird.at</span>
    </span>
    <br>
    <br>
    <span>
        <span>Geschäftsführung: Julius Ball </span>
        <br>
        <span>Datenschutzverantwortlicher: Samuel Seebacher</span>
    </span>

</p>

<?php
    include 'footer.php';
?>
</body>
</html>