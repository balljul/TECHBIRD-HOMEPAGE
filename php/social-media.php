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
    <title>Social Media</title>
</head>
<body class="sm-container bg-light">
     <?php 
     include 'navbar.php'; 

     $TECHBIRD_SOCIAL_MEDIA_TITLE  = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_SOCIAL_MEDIA_TITLE'";
     $TECHBIRD_SOCIAL_MEDIA_CONTENT01_H1  = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_SOCIAL_MEDIA_CONTENT01_H1'";
     $TECHBIRD_SOCIAL_MEDIA_CONTENT01_H2  = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_SOCIAL_MEDIA_CONTENT01_H2'";
     $TECHBIRD_SOCIAL_MEDIA_CONTENT01_TEXT  = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_SOCIAL_MEDIA_CONTENT01_TEXT'";
    ?>

    
    <div class="heading text-center center entry-text"><h1>
        <span><span class="text-youtube-red">Youtube, </span><span class="text-facebook-blue">Facebook, </span><span class="text-linkedin-blue">Linkedin</span></span>
        <br/>
        <span class="text-ripelemon"><?php echo retrieveText($TECHBIRD_SOCIAL_MEDIA_TITLE); ?></span>
    </h1></div>

    <div class="social-media-icons icon">
        <a class="hover-element-link" href="https://www.facebook.com/people/Techbird-Austria/pfbid0s4QKdfG3fX73kMT8bXUM8pLGPA4zMQ4arSL5QQmD3gVZNiNYToLJnSWgaMbsZTzxl/"><img src="../img/icons/Social Media Icons/facebook.png" alt="Error"></a>
        <a class="hover-element-link" href="https://github.com/balljul/TECHBIRD-HOMEPAGE"><img src="../img/icons/Social Media Icons/github.png" alt="Error"></a>
        <a class="hover-element-link" href="https://www.linkedin.com/in/techbird-austria-b68774279/"><img src="../img/icons/Social Media Icons/linkedin.png" alt="Error"></a>
        <a class="hover-element-link" href="https://www.instagram.com/techbird_austria/"><img src="../img/icons/Social Media Icons/instagram.png" alt="Error"></a>
        <a class="hover-element-link" href="https://twitter.com/TechbirdAustria"><img src="../img/icons/Social Media Icons/twitter.png" alt="Error"></a>
        <a class="hover-element-link" href="https://www.youtube.com/channel/UCzjnWgfwJ09l5DkJ1gBIkyA"><img src="../img/icons/Social Media Icons/youtube.png" alt="Error"></a>
    </div>

    <div class="sm-text full-height bg-social-media-text bg-image">
        <h1 class="heading-2 text-uppercase center text-center">
            <span class="text-ripelemon"><?php echo retrieveText($TECHBIRD_SOCIAL_MEDIA_CONTENT01_H1); ?></span>
            <br/>
            <span class="text-light"><?php echo retrieveText($TECHBIRD_SOCIAL_MEDIA_CONTENT01_H2); ?></span>
        </h1>
        <h2 class="sm-text-subtext-with-icon-nextToIt">
            <div class="icon"><img src="../img/icons/Social Media Icons/social-media-illustration.png" alt="Error"></div>
            <div class="text-light text text-center"><p>
            <?php echo retrieveText($TECHBIRD_SOCIAL_MEDIA_CONTENT01_TEXT); ?>
            </p></div>
        </h2>

    </div>

    <?php
      include 'footer.php';
    ?>

</body>
</html>