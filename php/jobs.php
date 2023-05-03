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
    <title>Jobs</title>
</head>
<body class="jobs-container bg-light">
    
    <?php 
    include 'navbar.php';
    ?>

    <div class="jobs-entry-text center text-center bg-job-entry-text">
        <img src="../img/Headers/Jobs-Header.png" alt="">
    </div>

  <div class="job-offers-container">

    <?php
    include 'connect.php';
    
    $jobs_offer_table = "SELECT * FROM jobs";
    $results = $conn->query($jobs_offer_table);
    $count = 0;
    $joblang = $_SESSION['lang'];
    $mwdText = "";
    
    if($joblang == "en"){
      $mwdText = "m/f/d";
    }
    else if($joblang == "de"){
      $mwdText = "m/w/d";
    }
    else if($joblang == "it"){
      $mwdText = "m/f/d";
    }
    foreach($results as $row){
      
        $count++;

        // Determine if the current iteration is odd or even
        if($count % 2 == 1){
            ?>
            <div class="job-offer">
              <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['jobimage']); ?>" alt="Error">
              <div class="job-offer-text text-center center ">
                <h1 class="text-persiangreen"><?php echo $row["jobname$joblang"] ?> <span class="text-sherpablue">|</span> <span class="text-ripelemon"><?php echo $mwdText; ?></span></h1>
                <!-- <div class="triangle"></div> -->
                <p><?php echo $row["employment$joblang"] ?></p>
                <p><?php echo $row["description$joblang"] ?></p>
                <button><a href="job-entry.php"><p>Join Us</p></a></button>
              </div>
            </div>
        <?php
        
        } else {
            ?>
            <div class="job-offer">
            <div class="job-offer-text text-center center ">
            <h1 class="text-persiangreen"><?php echo $row["jobname$joblang"] ?> <span class="text-sherpablue">|</span> <span class="text-ripelemon"><?php echo $mwdText; ?></span></h1>
                <p><?php echo $row["employment$joblang"] ?></p>
                <p><?php echo $row["description$joblang"] ?></p>
                <button><a href="job-entry.php"><p>Join Us</p></a></button>
              </div>
               <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['jobimage']); ?>" alt="Error">
            </div>
          <?php
        }
    ?>

    <?php
    }
    ?>

  </div>

</body>
</html>