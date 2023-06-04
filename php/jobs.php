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
    <title>Jobs</title>
</head>
<body class="jobs-container ">
    
    <?php 
    include 'navbar.php';
    ?>

    <div class="jobs-entry-text center text-center bg-job-entry-text">
        <img src="../img/Headers/Jobs-Header-<?php echo $_SESSION['lang']; ?>.png" alt="">
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

    $count = 1;
    $bg = '';
    $textlr = '';
    $textClr = '';
    $bg_pos = '';


    foreach($results as $row){
      if($count == 5){
        $count = 1;
      }
      else if($count == 0){
        $count = 1;
      }

      if($count % 4 == 0){
        $bg = 'style="background-image: url(../img/Backgrounds/joboffers/Job-BG-04.png);"';
        $textlr = 'text-left';
        $textClr = 'text-light';
        $bg_pos = 'bg-right';
    
      }
      else if($count % 3 == 0){
        $bg = 'style="background-image: url(../img/Backgrounds/joboffers/Job-BG-03.png);"';
        $textlr = 'text-right';
        $textClr = 'text-light';
        $bg_pos = 'bg-left';
      }
      else if($count % 2 == 0){
        $bg = 'style="background-image: url(../img/Backgrounds/joboffers/Job-BG-02.png);"';
        $textlr = 'text-left';
        $textClr = 'text-sherpablue';
        $bg_pos = 'bg-right';
      }
      else if($count % 1 == 0){
        $bg = 'style="background-image: url(../img/Backgrounds/joboffers/Job-BG-01.png);"';
        $textlr = 'text-right';
        $textClr = 'text-sherpablue';
        $bg_pos = 'bg-left';
      }
            
     
        ?>

            <div class="job-offer <?php echo $bg_pos; ?>" <?php echo $bg; ?>>
              <div class="<?php echo $textlr; ?> <?php echo $textClr; ?> text-center center">
                <h1 class="text-uppercase heading "><?php echo $row["jobname$joblang"] ?> <span> | </span> <span><?php echo $mwdText; ?></span></h1>
                <p class="heading-2"><?php echo $row["employment$joblang"]; ?></p>
                <p class="jobdescription"><?php echo $row["description$joblang"] ?></p>

                <form action="job-entry.php" >
                  <button type="submit" class="job-entry-button <?php echo "element$count"; ?>">Join us</button>
                </form>
              </div>
            </div>
            

    <?php
      $count++;
      }
    ?>

  </div>

<?php
  include 'footer.php';
?>
</body>
</html>