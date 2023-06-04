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
    <title>Project Resources</title>
</head>
<body class="project-ressources-container">
  
        
    <?php 
      include 'connect.php';
      include 'navbar.php';

      function getSourceIcon($key){
        switch($key){
          case 'git': 
            return '<img src="../img/icons/Ressources/git-icon.png" alt="Error Loading the Image">';
            break;
          case 'pdf':
            return '<img src="../img/icons/Ressources/pdf-icon.png" alt="Error Loading the Image">';
            break;
          case 'code':
            return '<img src="../img/icons/Ressources/code-icon.png" alt="Error Loading the Image">';
            break;
          case 'webtool':
            return '<img src="../img/icons/Ressources/webtool-icon.png" alt="Error Loading the Image">';
            break;
        }
      }          
    ?>


    <h1 class="text-uppercase center text-center heading">
        <span class="text-yellowgreen">TECHBIRD</span>
        <span class="text-persiangreen">Project</span>
        <span class="text-sherpablue">Resources</span>
    </h1>
    
    <div class="sourcecards-container">
      <?php
        $sourceSQL = "SELECT * FROM `resources`";
        $sources = $conn->query($sourceSQL);

        foreach($sources as $data){
          ?>
            <div class="sourcecard icon">
                <?php	 echo getSourceIcon($data['type']); ?>
                <h1 class="text-light-gray heading-2"><?php echo $data['title']; ?> </h1>
                <a href="<?php echo $data['link']; ?>"><p class="text-yellowgreen">Click for Source</p></a>
              
            </div>
          <?php
        }
      ?>
    </div>


    <?php	
      include 'footer.php';
    ?>
</body>
</html>