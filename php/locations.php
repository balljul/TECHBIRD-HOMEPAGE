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
    <title>Locations</title>
</head>

<body class="bg-light locations-container">
    
    <?php
    include 'navbar.php';

    $TECHBRID_LOCATIONS_TITLE_01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_TITLE_01'";
    $TECHBRID_LOCATIONS_TITLE_02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_TITLE_02'";
    $TECHBRID_LOCATIONS_TITLE_03 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_TITLE_03'";
    $TECHBRID_LOCATIONS_TITLE_04 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_TITLE_04'";
    $TECHBRID_LOCATIONS_TITLE_05 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_TITLE_05'";

    $TECHBRID_LOCATIONS_BARCELONA_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_BARCELONA_TITLE'";
    $TECHBRID_LOCATIONS_BARCELONA_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_BARCELONA_TEXT'";
    
    $TECHBRID_LOCATIONS_BERLIN_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_BERLIN_TITLE'";
    $TECHBRID_LOCATIONS_BERLIN_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_BERLIN_TEXT'";
    
    $TECHBRID_LOCATIONS_BERN_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_BERN_TITLE'";
    $TECHBRID_LOCATIONS_BERN_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_BERN_TEXT'";
    
    $TECHBRID_LOCATIONS_BRUSSELS_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_BRUSSELS_TITLE'";
    $TECHBRID_LOCATIONS_BRUSSELS_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_BRUSSELS_TEXT'";
    
    $TECHBRID_LOCATIONS_HELSINKI_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_HELSINKI_TITLE'";
    $TECHBRID_LOCATIONS_HELSINKI_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_HELSINKI_TEXT'";
    
    $TECHBRID_LOCATIONS_LISBON_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_LISBON_TITLE'";
    $TECHBRID_LOCATIONS_LISBON_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_LISBON_TEXT'";
    
    $TECHBRID_LOCATIONS_LONDON_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_LONDON_TITLE'";
    $TECHBRID_LOCATIONS_LONDON_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_LONDON_TEXT'";
    
    $TECHBRID_LOCATIONS_ROMA_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_ROMA_TITLE'";
    $TECHBRID_LOCATIONS_ROMA_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_ROMA_TEXT'";
    
    $TECHBRID_LOCATIONS_VIENNA_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_VIENNA_TITLE'";
    $TECHBRID_LOCATIONS_VIENNA_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBRID_LOCATIONS_VIENNA_TEXT'";
    
    ?>

<div class="">
    <div class="location-header-text ">
        <h1 class="heading text-center text-uppercase">
            <span class="text-gray"><?php echo retrieveText($TECHBRID_LOCATIONS_TITLE_01); ?></span>
            <span class="text-sherpablue"><?php echo retrieveText($TECHBRID_LOCATIONS_TITLE_02); ?> </span>
            <span class="text-persiangreen"><?php echo retrieveText($TECHBRID_LOCATIONS_TITLE_03); ?> </span>
            </br>
            <span class="text-yellowgreen"><?php echo retrieveText($TECHBRID_LOCATIONS_TITLE_04); ?> </span>
            <span class="text-ripelemon"><?php echo retrieveText($TECHBRID_LOCATIONS_TITLE_05); ?></span>
        </h1>
    </div>

    <div class="locations-icons-header icon text-center" >
        <a href="#location-barcelona"><img src="../img/icons/Locations/barcelona-spain.png" alt=""></a>
        <a href="#location-berlin"><img src="../img/icons/Locations/berlin-germany.png" alt=""></a>
        <a href="#location-bern"><img src="../img/icons/Locations/bern-swiss.png" alt=""></a>
        <a href="#location-brussels"><img src="../img/icons/Locations/brussels-belgium.png" alt=""></a>
        <a href="#location-helsinki"><img src="../img/icons/Locations/helsinki-finland.png" alt=""></a>
        <a href="#location-lisbon"><img src="../img/icons/Locations/lisbon-italy.png" alt=""></a>
        <a href="#location-london"><img src="../img/icons/Locations/london.png" alt="">
        <a href="#location-roma"><img src="../img/icons/Locations/roma-italy.png" alt=""></a>
        <a href="#location-vienna"><img src="../img/icons/Locations/vienna-austria.png" alt=""></a>
    </div>
</div>
 


<div class="locations-contents">
    <div class="locations-section bg-image-barcelona bg-image" id="location-barcelona">
        <h1 class="heading text-uppercase text-center">
            <span class="text-persiangreen">Techbird</span>
            <span class="text-ripelemon"><?php echo retrieveText($TECHBRID_LOCATIONS_BARCELONA_TITLE); ?></span>
        </h1>

        <div class="icon">
            <img src="../img/icons/Locations/barcelona-map.png" alt="">
        </div>

        <p class="center text-center text-persiangreen"><?php echo retrieveText($TECHBRID_LOCATIONS_BARCELONA_TEXT); ?></p>
    </div>

    <div class="locations-section bg-image-berlin bg-image" id="location-berlin">
        <h1 class="heading text-uppercase text-center">
            <span class="text-persiangreen">Techbird</span>
            <span class="text-ripelemon"><?php echo retrieveText($TECHBRID_LOCATIONS_BERLIN_TITLE); ?></span>
        </h1>

        <div class="icon">
            <img src="../img/icons/Locations/berlin-map.png" alt="">
        </div>

        <p class="center text-center text-persiangreen"><?php echo retrieveText($TECHBRID_LOCATIONS_BERLIN_TEXT); ?></p>
    </div>

    <div class="locations-section bg-image-bern bg-image" id="location-bern">
        <h1 class="heading text-uppercase text-center">
            <span class="text-persiangreen">Techbird</span>
            <span class="text-ripelemon"><?php echo retrieveText($TECHBRID_LOCATIONS_BERN_TITLE); ?></span>
        </h1>

        <div class="icon">
            <img src="../img/icons/Locations/bern-map.png" alt="">
        </div>

        <p class="center text-center text-persiangreen"><?php echo retrieveText($TECHBRID_LOCATIONS_BERN_TEXT); ?></p>
    </div>

    <div class="locations-section bg-image-brussels bg-image" id="location-brussels">
        <h1 class="heading text-uppercase text-center">
            <span class="text-persiangreen">Techbird</span>
            <span class="text-ripelemon"><?php echo retrieveText($TECHBRID_LOCATIONS_BRUSSELS_TITLE); ?></span>
        </h1>

        <div class="icon">
            <img src="../img/icons/Locations/brussels-map.png" alt="">
        </div>

        <p class="center text-center text-persiangreen"><?php echo retrieveText($TECHBRID_LOCATIONS_BRUSSELS_TEXT); ?></p>
    </div>

    <div class="locations-section bg-image-helsinki bg-image" id="location-helsinki">
        <h1 class="heading text-uppercase text-center">
            <span class="text-persiangreen">Techbird</span>
            <span class="text-ripelemon"><?php echo retrieveText($TECHBRID_LOCATIONS_HELSINKI_TITLE); ?></span>
        </h1>

        <div class="icon">
            <img src="../img/icons/Locations/helsinki-map.png" alt="">
        </div>

        <p class="center text-center text-persiangreen"><?php echo retrieveText($TECHBRID_LOCATIONS_HELSINKI_TEXT); ?></p>
    </div>

    <div class="locations-section bg-image-lisbon bg-image" id="location-lisbon">
        <h1 class="heading text-uppercase text-center">
            <span class="text-persiangreen">Techbird</span>
            <span class="text-ripelemon"><?php echo retrieveText($TECHBRID_LOCATIONS_LISBON_TITLE); ?></span>
        </h1>

        <div class="icon">
            <img src="../img/icons/Locations/lisbon-map.png" alt="">
        </div>

        <p class="center text-center text-persiangreen"><?php echo retrieveText($TECHBRID_LOCATIONS_LISBON_TEXT); ?></p>
    </div>

    <div class="locations-section bg-image-london bg-image" id="location-london">
        <h1 class="heading text-uppercase text-center">
            <span class="text-persiangreen">Techbird</span>
            <span class="text-ripelemon"><?php echo retrieveText($TECHBRID_LOCATIONS_LONDON_TITLE); ?></span>
        </h1>

        <div class="icon">
            <img src="../img/icons/Locations/london-map.png" alt="">
        </div>

        <p class="center text-center text-persiangreen"><?php echo retrieveText($TECHBRID_LOCATIONS_LONDON_TEXT); ?></p>
    </div>

    <div class="locations-section bg-image-roma bg-image" id="location-roma">
        <h1 class="heading text-uppercase text-center">
            <span class="text-persiangreen">Techbird</span>
            <span class="text-ripelemon"><?php echo retrieveText($TECHBRID_LOCATIONS_ROMA_TITLE); ?></span>
        </h1>

        <div class="icon">
            <img src="../img/icons/Locations/roma-map.png" alt="">
        </div>

        <p class="center text-center text-persiangreen"><?php echo retrieveText($TECHBRID_LOCATIONS_ROMA_TEXT); ?></p>
    </div>

    <div class="locations-section bg-image-vienna bg-image" id="location-vienna">
        <h1 class="heading text-uppercase text-center">
            <span class="text-persiangreen">Techbird</span>
            <span class="text-ripelemon"><?php echo retrieveText($TECHBRID_LOCATIONS_VIENNA_TITLE); ?></span>
        </h1>

        <div class="icon">
            <img src="../img/icons/Locations/vienna-map.png" alt="">
        </div>

        <p class="center text-center text-persiangreen"><?php echo retrieveText($TECHBRID_LOCATIONS_VIENNA_TEXT); ?></p>
    </div>

</div>



</body>
</html>