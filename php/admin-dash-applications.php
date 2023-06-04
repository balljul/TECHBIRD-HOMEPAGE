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
    <title>Application Dashboard</title>
</head>
<body class="admin-dash-applications-container">
    <?php
        require 'loginProcess.php';
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

      // Data Validation

      $allUnseenApplicationsSQL = "SELECT * FROM `job-applications` WHERE `status` = 'u'";
      $allUnseenApplicationsData = $conn->query($allUnseenApplicationsSQL);

      $allSeenApplicationsSQL = "SELECT * FROM `job-applications` WHERE `status` = 's'";
      $allSeenApplicationsData = $conn->query($allSeenApplicationsSQL);

      $allMarkedApplicationsSQL = "SELECT * FROM `job-applications` WHERE `status` = 'm'";
      $allMarkedApplicationsData = $conn->query($allMarkedApplicationsSQL);

      $showSelectedUnseen = 'style="display: none;"';
      $showUnselectedUnseen = '';

      $showSelectedSeen = 'style="display: none;"';
      $showUnselectedSeen = '';

      $showSelectedMarked = 'style="display: none;"';
      $showUnselectedMarked = '';

      $reloadPage = "header('Refresh:0');";

      if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['jobidUnseen'])){
          $id = $_POST['jobidUnseen'];
          $selectedUnseenApplicationSQL = "SELECT * FROM `job-applications` WHERE `ID` = '$id'";
          $selectedUnseenApplicationData = $conn->query($selectedUnseenApplicationSQL);
          $showSelectedUnseen = '';
          $showUnselectedUnseen = 'style="display: none;"';
        }

        if(isset($_POST['jobidSeen'])){
          $id = $_POST['jobidSeen'];
          $selectedSeenApplicationSQL = "SELECT * FROM `job-applications` WHERE `ID` = '$id'";
          $selectedSeenApplicationData = $conn->query($selectedSeenApplicationSQL);
          $showSelectedSeen = '';
          $showUnselectedSeen = 'style="display: none;"';
        }

        if(isset($_POST['jobidMarked'])){
          $id = $_POST['jobidMarked'];
          $selectedMarkedApplicationSQL = "SELECT * FROM `job-applications` WHERE `ID` = '$id'";
          $selectedMarkedApplicationData = $conn->query($selectedMarkedApplicationSQL);
          $showSelectedMarked = '';
          $showUnselectedMarked = 'style="display: none;"';
        }

        // Buttons
        if(isset($_POST['ApplicationStarButtonUnseen'])){
          $id = $_POST['idToMark'];
          $setStatusSQL = "UPDATE `job-applications` SET `status`='m' WHERE `ID` = '$id'";
          $conn->query($setStatusSQL);
          $reloadPage;
        }

        if(isset($_POST['ApplicationSeenButtonUnseen'])){
          $id = $_POST['idToSetSeen'];
          $setStatusSQL = "UPDATE `job-applications` SET `status`='s' WHERE `ID` = '$id'";
          $conn->query($setStatusSQL);
          $reloadPage;
        }

        if(isset($_POST['ApplicationDeleteButtonUnseen'])){
          $id = $_POST['idToDelete'];
          $setStatusSQL = "DELETE FROM `job-applications` WHERE `ID` = '$id'";
          $conn->query($setStatusSQL);
          $reloadPage;
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
      <div class="content-section show-section" <?php echo $showUnselectedUnseen ?>>
        <h1 class="text-center center text-sherpablue heading">Nothing selected</h1>
      </div>
      <div class="content-section show-section" <?php echo $showSelectedUnseen ?>>
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

                <div class="buttons-container">
                  <div class="applications-button-container">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
                      <input type="text" value="<?php echo 'test' ?>">
                      <button class="CVbutton" type="submit">Download CV</button>
                    </form>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                      <input type="text" value="<?php echo 'test' ?>">
                      <button class="mailbutton" type="submit">Send an Email</button>
                    </form>
                
                  </div>

                  <div class="icon-container">
                      <form class="icon" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <input type="text" name="idToMark" value="<?php echo $row['ID'] ?>">
                        <button type="submit" name="ApplicationStarButtonUnseen"><img src="../img/icons/Admin Dash/star.png" alt="Error"></button>
                      </form>

                      <form class="icon" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <input type="text" name="idToSetSeen" value="<?php echo $row['ID'] ?>">
                        <button type="submit" name="ApplicationSeenButtonUnseen"><img src="../img/icons/Admin Dash/checked.png" alt="Error"></button>
                      </form>

                      <form class="icon" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <input type="text" name="idToDelete" value="<?php echo $row['ID'] ?>">
                        <button type="submit" name="ApplicationDeleteButtonUnseen"><img src="../img/icons/Admin Dash/delete.png" alt="Error"></button>
                      </form>

                  </div>
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
   
      <div class="content-section show-section" <?php echo $showUnselectedSeen ?>>
        <h1 class="text-center center text-sherpablue heading">Nothing selected</h1>
      </div>
      
      <div class="content-section show-section" <?php echo $showSelectedSeen ?>>
        <h1>
          <?php 
            foreach($selectedSeenApplicationData as $row){
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

                <div class="buttons-container">
                  <div class="applications-button-container">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
                      <input type="text" value="<?php echo 'test' ?>">
                      <button class="CVbutton" type="submit">Download CV</button>
                    </form>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                      <input type="text" value="<?php echo 'test' ?>">
                      <button class="mailbutton" type="submit">Send an Email</button>
                    </form>
                
                  </div>

                  <div class="icon-container">
                      <form class="icon" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <input type="text" name="idToMark" value="<?php echo $row['ID'] ?>">
                        <button type="submit" name="ApplicationStarButtonUnseen"><img src="../img/icons/Admin Dash/star.png" alt="Error"></button>
                      </form>
                      
                      <form class="icon" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <input type="text" name="idToDelete" value="<?php echo $row['ID'] ?>">
                        <button type="submit" name="ApplicationDeleteButtonUnseen"><img src="../img/icons/Admin Dash/delete.png" alt="Error"></button>
                      </form>

                  </div>
                </div>
              </div>
            <?php
            }
          ?>
        </h1>
      </div>

      <!-- Shows the content of the selected Application -->

      <div class="content-section seenApplications">
        <h1 class="heading center text-center">Seen Job Applications</h1>

        <?php 
          foreach($allSeenApplicationsData as $row){
        ?>

        <div class="application">
          <!-- Short title -->
              <h1><span><?php echo $row['fname']; ?></span><span> <?php echo $row['lname']; ?></span><span> applying for </span><span class="text-uppercase text-sherpablue"><?php echo $row['department'] ?></span></h1>
              <!-- form which contains the jobid as an hidden input and the submit icon -->
              <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" >
                <input name="jobidSeen" value='<?php echo $row['ID']; ?>'>
                <button type="submit"><img src="../img/icons/Admin Dash/open.png" alt=""></button>
              </form>
        </div>

        <?php  
          }
        ?>
      </div>

    </div>

    <!-- marked Applicaitons -->
    <div class="sections-container">
      <!-- Shows all new Applications -->
      <div class="content-section markedApplications">
        <h1 class="heading center text-center">Marked Job Applications</h1>

      <?php 
        foreach($allMarkedApplicationsData as $row){
      ?>

        <div class="application">
          <!-- Short title -->
              <h1><span><?php echo $row['fname']; ?></span><span> <?php echo $row['lname']; ?></span><span> applying for </span><span class="text-uppercase text-sherpablue"><?php echo $row['department'] ?></span></h1>
              <!-- form which contains the jobid as an hidden input and the submit icon -->
              <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" >
                <input name="jobidMarked" value='<?php echo $row['ID']; ?>'>
                <button type="submit"><img src="../img/icons/Admin Dash/open.png" alt=""></button>
              </form>
        </div>

        <?php  
          }
        ?>
      </div>

      <!-- Shows the content of the selected Application -->
      <div class="content-section show-section" <?php echo $showUnselectedMarked ?>>
        <h1 class="text-center center text-sherpablue heading">Nothing selected</h1>
      </div>

      <div class="content-section show-section" <?php echo $showSelectedMarked ?>>
        <h1>
          <?php 
            foreach($selectedMarkedApplicationData as $row){
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

                <div class="buttons-container">
                  <div class="applications-button-container">

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
                      <input type="text" value="<?php echo 'test' ?>">
                      <button class="CVbutton" type="submit">Download CV</button>
                    </form>

                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                      <input type="text" value="<?php echo 'test' ?>">
                      <button class="mailbutton" type="submit">Send an Email</button>
                    </form>
                
                  </div>

                  <div class="icon-container">

                      <form class="icon" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <input type="text" name="idToSetSeen" value="<?php echo $row['ID'] ?>">
                        <button type="submit" name="ApplicationSeenButtonUnseen"><img src="../img/icons/Admin Dash/checked.png" alt="Error"></button>
                      </form>

                      <form class="icon" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <input type="text" name="idToDelete" value="<?php echo $row['ID'] ?>">
                        <button type="submit" name="ApplicationDeleteButtonUnseen"><img src="../img/icons/Admin Dash/delete.png" alt="Error"></button>
                      </form>

                  </div>
                </div>
              </div>
            <?php
            }
          ?>
        </h1>
      </div>

      </div>
    </div>

<?php
    include 'footer.php';
?>

</body>
</html>