<?php
require 'sessionStart.php';
?>
<!DOCTYPE html>
<html lang="en">

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


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../fonts/Teko Webfont/stylesheet.css">
    <link rel="icon" href="../img/Logo/Logo Designs TECHBIRD/Icon only.svg">    
    <title>Techbird Home</title>
</head>

<body>

<?php
  include 'navbar.php';
?>

<div class="fs-icon-container">
    <img class="icon-center"src="../img/Logo/Logo Designs TECHBIRD/Primary Logo WHITE.svg" alt="">
</div>

<?php
  $techbird_texts_table_T01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HOME_TITLE_01'";
  $techbird_texts_table_T02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HOME_TITLE_02'";
  $techbird_texts_table_T03 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_HOME_TITLE_03'";

  $test = "SELECT * FROM `texts` WHERE `textkey` = 'test'";
  ?>

<div>
  <p class="heading text-center">
    <span class="text-sherpablue"><?php echo retrieveText($techbird_texts_table_T01); ?> </span>
    <span class="text-persiangreen"><?php echo retrieveText($techbird_texts_table_T02); ?> </span>
    <span class="text-yellowgreen"><?php echo retrieveText($techbird_texts_table_T03); ?> </span>
  </p>
</div>


<div class="image-nav-home ">
    <div class="image-nav-home-item"><a href="history.php"><img src="../img/Headers/History-Header-<?php echo $_SESSION['lang']; ?>.png" alt=""></a></div>
    <div class="image-nav-home-item"><a href="employees.php"><img src="../img/Headers/Employees-Header-<?php echo $_SESSION['lang']; ?>.png" alt=""></a></div>
    <div class="image-nav-home-item"><a href="locations.php"><img src="../img/Headers/Locations-Header-<?php echo $_SESSION['lang']; ?>.png" alt=""></a></div>
    <div class="image-nav-home-item"><a href="social-media.php"><img src="../img/Headers/SocialMedia-Header-<?php echo $_SESSION['lang']; ?>.png" alt=""></a></div>
    <div class="image-nav-home-item"><a href="partners.php"><img src="../img/Headers/Customers-Header-<?php echo $_SESSION['lang']; ?>.png" alt=""></a></div>
    <div class="image-nav-home-item"><a href="jobs.php"><img src="../img/Headers/Jobs-Header-<?php echo $_SESSION['lang']; ?>.png" alt=""></a></div>

</div>
 
<?php
  include 'footer.php';
?>
</body>
</html>