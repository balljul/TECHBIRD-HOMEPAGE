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
    <link rel="icon" href="../img/Logo/Logo Designs TECHBIRD/Icon only.svg">
    <link rel="icon" href="../img/Logo/Logo Designs TECHBIRD/Icon only.svg">
    <title>Copyright</title>
</head>
<body class="copyright-container">
    <?php
        include 'navbar.php';
        $TECHBIRD_COPYRIGHT_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_TITLE'";
        $TECHBIRD_COPYRIGHT_TEXT_01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_TEXT_01' ";
        $TECHBIRD_COPYRIGHT_TEXT_02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_TEXT_02' ";
        $TECHBIRD_COPYRIGHT_TEXT_03 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_TEXT_03' ";
        $TECHBIRD_COPYRIGHT_TEXT_04 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_TEXT_04' ";
        $TECHBIRD_COPYRIGHT_TEXT_05 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_TEXT_05' ";
        
        $TECHBIRD_COPYRIGHT_SUBTITLE_01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_SUBTITLE_01' ";
        $TECHBIRD_COPYRIGHT_SUBTITLE_02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_SUBTITLE_02' ";
        $TECHBIRD_COPYRIGHT_SUBTITLE_03 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_SUBTITLE_03' ";
        $TECHBIRD_COPYRIGHT_SUBTITLE_04 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_COPYRIGHT_SUBTITLE_04' ";
        
    ?>

    <h1 class="heading text-uppercase text-sherpablue text-center center"><?php echo retrieveText($TECHBIRD_COPYRIGHT_TITLE); ?></h1>

    <div class="copyright-text center text-center">
      <p><?php echo retrieveText($TECHBIRD_COPYRIGHT_TEXT_01); ?></p>
      <br><br>
      <h2 class="heading-2"><?php echo retrieveText($TECHBIRD_COPYRIGHT_SUBTITLE_01); ?></h2>
      <br>
      <p><?php echo retrieveText($TECHBIRD_COPYRIGHT_TEXT_02); ?></p>
      <br><br>
      <h2 class="heading-2"><?php echo retrieveText($TECHBIRD_COPYRIGHT_SUBTITLE_02); ?></h2>
      <br>
      <p><?php echo retrieveText($TECHBIRD_COPYRIGHT_TEXT_03); ?></p>
      <br><br>
      <h2 class="heading-2"><?php echo retrieveText($TECHBIRD_COPYRIGHT_SUBTITLE_03); ?></h2>
      <br>
      <p><?php echo retrieveText($TECHBIRD_COPYRIGHT_TEXT_04); ?></p>
      <br><br>
      <h2 class="heading-2"><?php echo retrieveText($TECHBIRD_COPYRIGHT_SUBTITLE_04); ?></h2>
      <br>
      <p><?php echo retrieveText($TECHBIRD_COPYRIGHT_TEXT_05); ?></p>
    </div>

   
</body>
  <?php
      include 'footer.php';
    ?>
</html>