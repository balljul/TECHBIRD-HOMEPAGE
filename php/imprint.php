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
    <title>Imprint</title>
</head>
<body class="imprint-container bg-light">

<?php
    include 'navbar.php';

    $TECHBIRD_IMPRINT_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TITLE'";
    $TECHBIRD_IMPRINT_TEXT_01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_01'";
    $TECHBIRD_IMPRINT_TEXT_02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_02'";
    $TECHBIRD_IMPRINT_TEXT_03 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_03'";
    $TECHBIRD_IMPRINT_TEXT_04 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_04'";
    $TECHBIRD_IMPRINT_TEXT_05 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_05'";
    $TECHBIRD_IMPRINT_TEXT_06 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_06'";
    $TECHBIRD_IMPRINT_TEXT_07 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_07'";
    $TECHBIRD_IMPRINT_TEXT_08 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_08'";
    $TECHBIRD_IMPRINT_TEXT_09 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_09'";
    $TECHBIRD_IMPRINT_TEXT_10 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_10'";
    $TECHBIRD_IMPRINT_TEXT_11 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_11'";
    $TECHBIRD_IMPRINT_TEXT_12 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_12'";
    $TECHBIRD_IMPRINT_TEXT_13 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_13'";
    $TECHBIRD_IMPRINT_TEXT_14 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_14'";
    $TECHBIRD_IMPRINT_TEXT_15 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_15'";
    $TECHBIRD_IMPRINT_TEXT_16 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_16'";
    $TECHBIRD_IMPRINT_TEXT_17 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_17'";
    $TECHBIRD_IMPRINT_TEXT_18 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_IMPRINT_TEXT_18'";

?>
<h1 class="heading text-uppercase text-persiangreen text-center center"><?php echo retrieveText($TECHBIRD_IMPRINT_TITLE); ?></h1>

<p class="imprint-text text-center center">
    
    <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_01); ?></span>
    <br>
    <br>
    <span>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_02); ?></span>
        <br>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_03); ?></span>
        <br>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_04); ?></span>
    </span>
    <br>
    <br>
    <span>
        <span class="text-persiangreen"><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_05); ?></span>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_06); ?></span>
        <br>
        <span class="text-persiangreen"><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_07); ?> </span>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_08); ?></span>
        <br>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_09); ?></span>
        <br>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_10); ?></span>
        <br>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_11); ?></span>
        <br>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_12); ?></span>
        <br>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_13); ?></span>
    </span>
    <br>
    <br>
    <span>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_14); ?></span>
        <br>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_15); ?></span>
        <br>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_16); ?></span>
    </span>
    <br>
    <br>
    <span>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_17); ?> </span>
        <br>
        <span><?php echo retrieveText($TECHBIRD_IMPRINT_TEXT_18); ?></span>
    </span>

</p>
</body>
<?php
      include 'footer.php';
  ?>
</html>