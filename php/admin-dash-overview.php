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
    <title>Admin Dashboard</title>
</head>
<body class="admin-dash-overview-container">
    <?php
        include 'navbar.php';
    ?>

        <h1 class="overview-title text-uppercase center text-center">
            <span class="text-yellowgreen">TECHBIRD</span>
            <span class="text-persiangreen">Admin</span>
            <span class="text-sherpablue">Dashboard</span>
        </h1>

    <div class="overview-content-container">

        
        <div class="overview-linked-window">
            <a href="admin-dash-applications.php">
                <h1 class="heading">
                    <span class="text-persiangreen">Application</span>
                    <span class="text-sherpablue">Dashboard</span>
                </h1>
            </a>
        </div>
        

        <div class="overview-linked-window">
            <a href="admin-dash-job-offers.php">
                <h1 class="heading text-center center">
                    <span class="text-persiangreen">Job Offer</span>
                    <span class="text-sherpablue">Dashboard</span>
                </h1>
            </a>
        </div>
        

    </div>

<?php
    include 'footer.php';
?>
</body>
</html>