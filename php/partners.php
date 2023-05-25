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
    <title>Partners</title>
</head>

<body class="partners-container bg-light ">
    <?php 
    include 'navbar.php';

    $TECHBIRD_PARTNERS_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_PARTNERS_TITLE'";
    $TECHBIRD_PARTNERS_CONTENT01_01 =  "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_PARTNERS_CONTENT01_01'";
    $TECHBIRD_PARTNERS_CONTENT01_02 =  "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_PARTNERS_CONTENT01_02'";
    $TECHBIRD_PARTNERS_CONTENT01_03 =  "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_PARTNERS_CONTENT01_03'";
    $TECHBIRD_PARTNERS_CONTENT01_04 =  "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_PARTNERS_CONTENT01_04'";
    $TECHBIRD_PARTNERS_CONTENT01_05 =  "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_PARTNERS_CONTENT01_05'";
    $TECHBIRD_PARTNERS_CONTACT_BUTTON = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_PARTNERS_CONTACT_BUTTON'";

    ?>


    <div class="partners-heading heading text-center">
        <h1>
            <span class="text-ripelemon text-uppercase ">Techbirds </span><span class="text-persiangreen text-uppercase"><?php echo retrievetext($TECHBIRD_PARTNERS_TITLE); ?></span>
        </h1>

        <div class="partners-heading-icons icon">
            <img src="../img/icons/Company Logos/partner logos 01.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 02.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 03.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 04.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 05.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 06.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 07.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 08.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 09.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 10.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 11.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 12.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 13.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 14.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 15.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 16.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 17.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 18.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 19.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 20.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 21.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 22.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 23.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 24.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 25.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 26.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 27.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 28.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 29.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 30.png" alt="picture couldn't load">
            <img src="../img/icons/Company Logos/partner logos 31.png" alt="picture couldn't load">

        </div>
    </div>

    <div class="partners-entry-text bg-partners-entry-text bg-image full-height">
        <div class="full-height partners-entry-text-subcontainer">
            <h1 class="heading text-center center">
                <span><span class="text-persiangreen"><?php echo retrievetext($TECHBIRD_PARTNERS_CONTENT01_01); ?> </span><span class="text-dark"><?php echo retrievetext($TECHBIRD_PARTNERS_CONTENT01_02); ?></span></span>
                <br/>
                <span class="icon"><img src="../img/icons/plus-sign.png" alt=""></span>
                <br/>
                <span><span class="text-persiangreen"><?php echo retrievetext($TECHBIRD_PARTNERS_CONTENT01_03); ?> </span><span class="text-dark"><?php echo retrievetext($TECHBIRD_PARTNERS_CONTENT01_04); ?> </span></span>
                <br/>
                <span class="icon"><img src="../img/icons/equal-icon.png" alt=""></span>
                <br/>
                <span class="text-uppercase text-sherpablue"><?php echo retrievetext($TECHBIRD_PARTNERS_CONTENT01_05); ?> </span>
                <br>
                <a href="customer-contact.php">
                <button class="customer-contact-button text-light"><?php echo retrievetext($TECHBIRD_PARTNERS_CONTACT_BUTTON); ?></button>
                </a>
              </h1>
        </div>

        </div>

        <?php
          include 'footer.php';
        ?>

    </div>

</body>
</html>