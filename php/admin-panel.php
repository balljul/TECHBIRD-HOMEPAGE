<?php
  require 'sessionStart.php'
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
<body class="bg-light admin-panel">
    <?php 
    include 'navbar.php'; 
    include 'connect.php';

    $TECHBIRD_ADMIN_PANEL_TITLE_01 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_ADMIN_PANEL_TITLE_01'";
    $TECHBIRD_ADMIN_PANEL_TITLE_02 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_ADMIN_PANEL_TITLE_02'";
    $TECHBIRD_ADMIN_PANEL_TITLE_03 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_ADMIN_PANEL_TITLE_03'";
    $TECHBIRD_ADMIN_PANEL_UNSEEN_APPLICATIONS_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_ADMIN_PANEL_UNSEEN_APPLICATIONS_TITLE'";
    $TECHBIRD_ADMIN_PANEL_SEEN_APPLICATIONS_TITLE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_ADMIN_PANEL_SEEN_APPLICATIONS_TITLE'";
    $TECHBIRD_ADMIN_PANEL_UNSEEN_APPLICATIONS_TITLE_NONEW = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_ADMIN_PANEL_UNSEEN_APPLICATIONS_TITLE_NONEW'";
    $TECHBIRD_ADMIN_PANEL_UNSEEN_APPLICATIONS_SHOW_MORE = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_ADMIN_PANEL_UNSEEN_APPLICATIONS_SHOW_MORE'";
    $TECHBIRD_ADMIN_PANEL_SEEN_APPLICATIONS_SHOW_LESS = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_ADMIN_PANEL_SEEN_APPLICATIONS_SHOW_LESS'";
    $TECHBIRD_ADMIN_PANEL_APPLICATIONS_APLLYING_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_ADMIN_PANEL_APPLICATIONS_APLLYING_TEXT'";


    ?>

    <h1 class="text-uppercase heading center text-center"><span class="text-sherpablue"><?php echo retrieveText($TECHBIRD_ADMIN_PANEL_TITLE_01) ?> </span><span class="text-persiangreen"><?php echo retrieveText($TECHBIRD_ADMIN_PANEL_TITLE_02) ?> </span><span class="text-ripelemon"><?php echo retrieveText($TECHBIRD_ADMIN_PANEL_TITLE_03) ?></span></h1>

    <div class="applications-container">
      
      <?php
        
        $job_applications_data = "SELECT * FROM `job-applications`";
        $job_applications_data_unedited = "SELECT * FROM `job-applications` WHERE `status` = 0";
        $job_applications_data_edited = "SELECT * FROM `job-applications` WHERE `status` = 1";
      
        $data = $conn->query($job_applications_data);
        $data_unedited = $conn->query($job_applications_data_unedited);
        $data_edited = $conn->query($job_applications_data_edited);
        
      ?>
      <div >
        <div class="unseen-applications">
          <?php 
          if(mysqli_num_rows($conn->query($job_applications_data_unedited)) == 0){
            ?>
              <h1 class="heading text-persiangreen"><?php echo retrieveText($TECHBIRD_ADMIN_PANEL_UNSEEN_APPLICATIONS_TITLE_NONEW); ?></h1>
              <form method="post">
                <input type="submit" name="showapplications"  value="<?php echo retrieveText($TECHBIRD_ADMIN_PANEL_UNSEEN_APPLICATIONS_SHOW_MORE) ?>"></input>
                
              </form>
            <?php
            }
          else{
              ?>
                <h1 class="heading"><span class="text-persiangreen"><?php echo mysqli_num_rows($data_unedited) ?></span><span class="text-sherpablue"><?php echo retrieveText($TECHBIRD_ADMIN_PANEL_UNSEEN_APPLICATIONS_TITLE); ?></span> </h1>
                  <?php 
                  foreach($data_unedited as $application){
                  ?>
                  <div class="application heading-2">
                    <p><span class="text-sherpablue"><?php echo $application['fname'];?> <?php echo $application['lname']; ?></span><span class="text-persiangreen"><?php echo retrieveText($TECHBIRD_ADMIN_PANEL_APPLICATIONS_APLLYING_TEXT); ?> </span><span class="text-ripelemon text-uppercase"><?php echo $application['department']; ?></span></p>
                  </div>
                  <?php
                  }
                  ?>
                  <form method="post">
                  <input type="submit" name="showapplications" value="<?php echo retrieveText($TECHBIRD_ADMIN_PANEL_UNSEEN_APPLICATIONS_SHOW_MORE) ?>"></input>
                  </form>
            <?php
          }
          ?>
        </div>
        <div class="seen-applications">
          <?php
          if(isset($_POST['showapplications'])){
            if(isset($_POST['hideapplications']))
            ?>
            <h1 class="heading"><span class="text-persiangreen"><?php echo mysqli_num_rows($data_edited) ?></span> <span class="text-sherpablue"> <?php echo retrieveText($TECHBIRD_ADMIN_PANEL_SEEN_APPLICATIONS_TITLE); ?></span> </h1>
            <?php
            foreach($data_edited as $application){
              ?>
              <div class="application heading-2">
                <p><span class="text-sherpablue"><?php echo $application['fname'];?> <?php echo $application['lname']; ?></span><span class="text-persiangreen"> <?php echo retrieveText($TECHBIRD_ADMIN_PANEL_APPLICATIONS_APLLYING_TEXT); ?> </span><span class="text-ripelemon text-uppercase"><?php echo $application['department']; ?></span></p>
              </div>
              <?php
              }
            ?>
              <form method="post">
                <input type="submit" name="hideapplications" value="<?php echo retrieveText($TECHBIRD_ADMIN_PANEL_SEEN_APPLICATIONS_SHOW_LESS); ?>">
              </form>
            <?php
          }
          ?>
        </div>
      </div>



    </div>

    <div class="job-offers-container">

    </div>
</body>
</html>