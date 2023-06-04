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
    <link rel="icon" href="../img/Logo/Logo Designs TECHBIRD/Icon only.svg">
    <link rel="stylesheet" href="../fonts/Teko Webfont/stylesheet.css">
    <title>Contact</title>
</head>
<body class="contact-infos-container">
    
    <?php
    include 'navbar.php';
        $TECHBIRD_CONTACT_INFOS_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_CONTACT_INFOS_TITLE'";
        
        $TECHBIRD_CONTACT_INFOS_SUBTITLE_01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_CONTACT_INFOS_SUBTITLE_01'";
        $TECHBIRD_CONTACT_INFOS_SUBTITLE_02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_CONTACT_INFOS_SUBTITLE_02'";
        $TECHBIRD_CONTACT_INFOS_SUBTITLE_03 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_CONTACT_INFOS_SUBTITLE_03'";
        $TECHBIRD_CONTACT_INFOS_SUBTITLE_04 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_CONTACT_INFOS_SUBTITLE_04'";
        $TECHBIRD_CONTACT_INFOS_SUBTITLE_05 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_CONTACT_INFOS_SUBTITLE_05'";
        $TECHBIRD_CONTACT_INFOS_SUBTITLE_06 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_CONTACT_INFOS_SUBTITLE_06'";
        $TECHBIRD_CONTACT_INFOS_SUBTITLE_07 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_CONTACT_INFOS_SUBTITLE_07'";
        $TECHBIRD_CONTACT_INFOS_SUBTITLE_08 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_CONTACT_INFOS_SUBTITLE_08'";
        $TECHBIRD_CONTACT_INFOS_SUBTITLE_09 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_CONTACT_INFOS_SUBTITLE_09'";

        $Techbird = '<span class="text-sherpablue"> TECHBIRD </span>';
    ?>

    <h1 class="heading text-uppercase text-center center text-sherpablue"><?php echo retrieveText($TECHBIRD_CONTACT_INFOS_TITLE); ?></h1>

    <div class="contact-infos-text center text-center">
        
        <h2 class="heading-2 text-persiangreen"><?php echo $Techbird ?> <?php echo retrieveText($TECHBIRD_CONTACT_INFOS_SUBTITLE_01); ?></h2>
        <br>
        <p>office@techbird.at</p>
        <br>
        <p>support@techbird.at</p>
        <br>
        <p>copyright@techbird.at</p>
        <br><br>

        <h2 class="heading-2 text-persiangreen"><?php echo $Techbird ?> <?php echo retrieveText($TECHBIRD_CONTACT_INFOS_SUBTITLE_02); ?></h2>
        <br>
        <p>+34 93 123 45 67</p>
        <br>
        <p>Barcelona@techbird.at</p>
        <br><br>

        <h2 class="heading-2 text-persiangreen"><?php echo $Techbird ?> <?php echo retrieveText($TECHBIRD_CONTACT_INFOS_SUBTITLE_03); ?></h2>
        <br>
        <p>+49 30 12345678</p>
        <br>
        <p>Berlin@techbird.at</p>
        <br><br>

        <h2 class="heading-2 text-persiangreen"><?php echo $Techbird ?> <?php echo retrieveText($TECHBIRD_CONTACT_INFOS_SUBTITLE_04); ?></h2>
        <br>
        <p>+41 31 9876543</p>
        <br>
        <p>Bern@techbird.at</p>
        <br><br>

        <h2 class="heading-2 text-persiangreen"><?php echo $Techbird ?> <?php echo retrieveText($TECHBIRD_CONTACT_INFOS_SUBTITLE_05); ?></h2>
        <br>
        <p>+32 2 345 6789</p>
        <br>
        <p>Brussels@techbird.at</p>
        <br><br>

        <h2 class="heading-2 text-persiangreen"><?php echo $Techbird ?> <?php echo retrieveText($TECHBIRD_CONTACT_INFOS_SUBTITLE_06); ?></h2>
        <br>
        <p>+358 9 1234567</p>
        <br>
        <p>Helsinki@techbird.at</p>
        <br><br>

        <h2 class="heading-2 text-persiangreen"><?php echo $Techbird ?> <?php echo retrieveText($TECHBIRD_CONTACT_INFOS_SUBTITLE_07); ?></h2>
        <br>
        <p>+351 21 987 6543</p>
        <br>
        <p>Lisbon@techbird.at</p>
        <br><br>

        <h2 class="heading-2 text-persiangreen"><?php echo $Techbird ?> <?php echo retrieveText($TECHBIRD_CONTACT_INFOS_SUBTITLE_08); ?></h2>
        <br>
        <p>+44 20 7123 4567</p>
        <br>
        <p>London@techbird.at</p>
        <br><br>

        <h2 class="heading-2 text-persiangreen"><?php echo $Techbird ?> <?php echo retrieveText($TECHBIRD_CONTACT_INFOS_SUBTITLE_09); ?></h2>
        <br>
        <p>+39 06 9876 5432</p>
        <br>
        <p>Roma@techbird.at</p>
        <br><br>
    </div>

</body>
<?php
      include 'footer.php';
  ?>
</html>