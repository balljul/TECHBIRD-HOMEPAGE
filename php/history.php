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
    <title>Document</title>
</head>
<body>
    
    
    <?php
        include 'navbar.php';

        $TECHBIRD_HISTORY_1995_H2 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_1995_H2'";
        $TECHBIRD_HISTORY_1995_TEXT_01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_1995_TEXT_01'";
        $TECHBIRD_HISTORY_1995_TEXT_02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_1995_TEXT_02'";

        $TECHBIRD_HISTORY_2005_H2 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_2005_H2'";
        $TECHBIRD_HISTORY_2005_TEXT_01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_2005_TEXT_01'";
        $TECHBIRD_HISTORY_2005_TEXT_02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_2005_TEXT_02'";

        $TECHBIRD_HISTORY_2015_H2 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_2015_H2'";
        $TECHBIRD_HISTORY_2015_TEXT_01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_2015_TEXT_01'";
        $TECHBIRD_HISTORY_2015_TEXT_02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_2015_TEXT_02'";

        $TECHBIRD_HISTORY_2025_H2 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_2025_H2'";
        $TECHBIRD_HISTORY_2025_TEXT_01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_2025_TEXT_01'";
        $TECHBIRD_HISTORY_2025_TEXT_02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HISTORY_2025_TEXT_02'";
        ?>

    <div class="history-container">
        <div class="history-bgimage" style="background-image: url(../img/Headers/History-Header.svg)" ></div>
       
        <div class="history-content history-bgimage" style="background-image: url(../img/Backgrounds/6.png)" >
            <section class="text-center">
                <h1 class="heading text-persiangreen">1995</h1>
                <h2 class="text-yellowgreen"><?php echo retrieveText($TECHBIRD_HISTORY_1995_H2); ?></h2>
                <div class="icon"><img src="../img/icons/made-in-austria icon.png" alt=""></div>
                <p class="text-light"><?php echo retrieveText($TECHBIRD_HISTORY_1995_TEXT_01); ?></br><?php echo retrieveText($TECHBIRD_HISTORY_1995_TEXT_02); ?></p>
            </section>
        </div>

        <div class="history-content history-bgimage" style="background-image: url(../img/Backgrounds/7.png)" >
            <section class="text-center">
                <h1 class="heading text-light">2005</h1>
                <h2 class="text-sherpablue"><?php echo retrieveText($TECHBIRD_HISTORY_2005_H2); ?></h2>
                <div class="icon"><img src="../img/icons/usa flag icon.png" alt=""></div>
                <p class="text-light"><?php echo retrieveText($TECHBIRD_HISTORY_2005_TEXT_01); ?></br> <?php echo retrieveText($TECHBIRD_HISTORY_2005_TEXT_02); ?></p>
            </section>
        </div>

        <div class="history-content history-bgimage" style="background-image: url(../img/Backgrounds/8.png)" >
            <section class="text-center">
                <h1 class="heading text-sherpablue">2015</h1>
                <h2 class="text-persiangreen"><?php echo retrieveText($TECHBIRD_HISTORY_2015_H2); ?></h2>
                <div class="icon"><img src="../img/icons/worldmap small icon.png" alt=""></div>
                <p class="text-dark"><?php echo retrieveText($TECHBIRD_HISTORY_2015_TEXT_01); ?></br><?php echo retrieveText($TECHBIRD_HISTORY_2015_TEXT_02); ?></p>
            </section>
        </div>

        <div class="history-content history-bgimage" style="background-image: url(../img/Backgrounds/6.png)" >
            <section class="text-center">
                <h1 class="heading text-yellowgreen">2025</h1>
                <h2 class="text-persiangreen"><?php echo retrieveText($TECHBIRD_HISTORY_2025_H2); ?></h2>
                <div class="icon"><img src="../img/icons/world map bigger icon.png" alt=""></div>
                <p class="text-light"><?php echo retrieveText($TECHBIRD_HISTORY_2025_TEXT_01); ?></br><?php echo retrieveText($TECHBIRD_HISTORY_2025_TEXT_02); ?></p>
            </section>
        </div>
    </div>

</body>
</html>