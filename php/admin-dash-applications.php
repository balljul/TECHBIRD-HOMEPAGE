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
    <title>Application Dashboard</title>
</head>
<body class="admin-dash-applications-container">
    <?php
        include 'navbar.php';
        include 'connect.php';
    ?>

      <!-- Title Of the Page -->

    <div>
      <h1 class="title center text-center">
        <span class="text-uppercase text-yellowgreen">Techbird</span>
        <span class="text-persiangreen">Applications</span>
        <span class="text-sherpablue">Dashboard</span>
      </h1>
    </div>

    <!-- PHP Data Selection -->

    <?php

      // All the Data

      $allUnseenApplicationsSQL = "SELECT * FROM `job-applications` WHERE `status` = 'u'";
      $allUnseenApplicationsData = $conn->query($allUnseenApplicationsSQL);


      if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['jobidUnseen'])){
          $id = $_POST['jobidUnseen'];
          $selectedUnseenApplicationSQL = "SELECT * FROM `job-applications` WHERE `ID` = '$id'";
          $selectedUnseenApplicationData = $conn->query($selectedUnseenApplicationSQL);
        }
      }
    ?>


    <!-- Unseen Applications -->

    <div class="sections-container">
      <!-- Shows all new Applications -->
      <div class="content-section newApplications">
        <h1 class="heading center text-center">New Job Applications</h1>

      <?php 
        foreach($allUnseenApplicationsData as $row){
      ?>

        <div class="application">
          <!-- Short title -->
              <h1><span><?php echo $row['fname']; ?></span><span> <?php echo $row['lname']; ?></span><span> applying for </span><span class="text-uppercase text-sherpablue"><?php echo $row['department'] ?></span></h1>
              <!-- form which contains the jobid as an hidden input and the submit icon -->
              <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" >
                <input name="jobidUnseen" value='<?php echo $row['ID']; ?>'>
                <button type="submit"><img src="../img/icons/Admin Dash/open.png" alt=""></button>
              </form>
        </div>

        <?php  
          }
        ?>

      </div>



      <!-- Shows the content of the selected Application -->
      
      <div class="content-section show-section">
        <h1>
          <?php 
            foreach($selectedUnseenApplicationData as $row){
            ?>
              <div class="selected-application">
                <div class="application-title">
                  <h1 class="heading text-center center"><span><?php echo $row['fname']; ?></span><span> <?php echo $row['lname']; ?></span></h1>
                  <h2 class="heading-2 text-center center"><span> applying for </span><span class="text-sherpablue text-uppercase"> <?php echo $row['department']; ?></span></h2>
                </div>
                
                <div class="application-text">
                  <?php
                    if(!empty($row['website'])){
                      ?>
                        <p><span class="text-persiangreen">Personal Website: </span><span><a href="<?php echo $row['website']; ?>"><?php echo $row['website']; ?></span></a></p>
                      <?php
                    }
                    if(!empty($row['comment'])){
                  ?>
                      <p><span class="text-persiangreen">Comment: </span> <span> <?php echo $row['comment']; ?></span></p>
                  <?php
                    }
                  ?>

                  <p style="margin-top: 10vh;"><span class="text-yellowgreen">Email: </span> <span> <?php echo $row['email']; ?></span></p>
                  <p><span class="text-yellowgreen">Phonenumber: </span> <span> <?php echo $row['phonenumber']; ?></span></p>
                
                </div>
              </div>
            <?php
            } 
          ?>
        </h1>
      </div>

      </div>
    </div>

    <!-- Seen Applicaitons -->

    <div class="sections-container">
      <div class="content-section show-section"></div>
      <div class="content-section seenApplications">
        <h1 class="heading center text-center">Seen Job Applications</h1>
      </div>
    </div>

    <!-- marked Applicaitons -->

    <div class="sections-container">
      <div class="content-section markedApplications">
        <h1 class="heading center text-center">Marked Job Applications</h1>
      </div>
      <div class="content-section show-section">
              
      </div>
    </div>

<?php
    include 'footer.php';
?>
</body>
</html>