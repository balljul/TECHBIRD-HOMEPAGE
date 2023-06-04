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
    <title>Job Offer Dashboard</title>
</head>
<body class="admin-dash-job-offers-container">
    <?php
        require 'loginProcess.php';
        include 'navbar.php';
        include 'connect.php';
    ?>
    <h1 class="title center text-center text-uppercase"><span class="text-yellowgreen ">Techbird</span><span class="text-persiangreen"> Job Offer</span><span class="text-sherpablue"> Dashboard</span></h1>

    <?php
        // Data Validation

        $allJobOfferSQL = "SELECT * FROM `jobs`";
        $allJobOffersData= $conn->query($allJobOfferSQL);
        
        $showNothingSelected = '';
        $showOfferSelected = 'style="display: none"';


        $jobnameenNew = '';
        $jobdesciptionenNew = '';
        $jobemploymentenNew = '';
        
        $jobnamedeNew = '';
        $jobdesciptiondeNew = '';
        $jobemploymentdeNew = '';
        
        $jobnameitNew = '';
        $jobdesciptionitNew = '';
        $jobemploymentitNew = '';
        
        $reloadPage = "header('Refresh:0');";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
          if(isset($_POST['openJobOfferButton'])){
            $id = $_POST['jobOfferId'];
            $selectedOfferSql = "SELECT * FROM `jobs` WHERE `ID` = '$id'";
            $selectedOfferData = $conn->query($selectedOfferSql);
            $showNothingSelected = 'style="display: none"';
            $showOfferSelected = '';
          }

          if(isset($_POST['changeSelectedOffer'])){
            $id = $_POST['selectedOfferID'];
            $jobnameen = $_POST['jobnameEN'];
            $jobdesciptionen = $_POST['jobnameEN'];
            $jobemploymenten = $_POST['jobdescriptionEN'];

            $jobnamede = $_POST['jobnameDE'];
            $jobdesciptionde = $_POST['jobdescriptionDE'];
            $jobemploymentde = $_POST['employementDE'];

            $jobnameit = $_POST['jobnameIT'];
            $jobdesciptionit = $_POST['jobdescriptionIT'];
            $jobemploymentit = $_POST['employementIT'];

            $changeOfferSQL = "UPDATE `jobs` SET `jobnameen`='$jobnameen',`descriptionen`='$jobemploymenten',`employmenten`='$jobemploymenten',`jobnamede`='$jobnamede',`descriptionde`='$jobdesciptionde',`employmentde`='$jobemploymentde',`jobnameit`='$jobnameit',`descriptionit`='$jobdesciptionit',`employmentit`='$jobemploymentit' WHERE `ID` = '$id'";
            $conn->query($changeOfferSQL);

            $reloadPage;
          }

          if(isset($_POST['deleteSelectedOffer'])){
            $id = $_POST['selectedOfferID'];

            $deleteSql = "DELETE FROM `jobs` WHERE `ID` = $id";
            $conn->query($deleteSql);

            $reloadPage;
          }

          if(isset($_POST['saveNewOffer'])){

            $jobnameenNew = $_POST['jobnameENnew'];
            $jobdesciptionenNew = $_POST['jobdescriptionENnew'];
            $jobemploymentenNew = $_POST['employementENnew'];
            
            $jobnamedeNew = $_POST['jobnameDEnew'];
            $jobdesciptiondeNew = $_POST['jobdescriptionDEnew'];
            $jobemploymentdeNew = $_POST['employementDEnew'];
            
            $jobnameitNew = $_POST['jobnameITnew'];
            $jobdesciptionitNew = $_POST['jobnameENnew'];
            $jobemploymentitNew = $_POST['jobnameENnew'];

            $newJobOfferSQL = "INSERT INTO `jobs`(`jobnameen`, `descriptionen`, `employmenten`, `jobnamede`, `descriptionde`, `employmentde`, `jobnameit`, `descriptionit`, `employmentit`) VALUES ('$jobnameenNew','$jobdesciptionenNew','$jobemploymentenNew','$jobnamedeNew','$jobdesciptiondeNew','$jobemploymentdeNew','$jobnameitNew','$jobdesciptionitNew','$jobemploymentitNew')";
            $conn->query($newJobOfferSQL);
                
            $jobnameenNew = '';
            $jobdesciptionenNew = '';
            $jobemploymentenNew = '';
            
            $jobnamedeNew = '';
            $jobdesciptiondeNew = '';
            $jobemploymentdeNew = '';
            
            $jobnameitNew = '';
            $jobdesciptionitNew = '';
            $jobemploymentitNew = '';

            $reloadPage;
          }

          if(isset($_POST['resetNewOfferForm'])){
            $jobnameenNew = '';
            $jobdesciptionenNew = '';
            $jobemploymentenNew = '';
            
            $jobnamedeNew = '';
            $jobdesciptiondeNew = '';
            $jobemploymentdeNew = '';
            
            $jobnameitNew = '';
            $jobdesciptionitNew = '';
            $jobemploymentitNew = '';

            $reloadPage;
          }

          if(isset($_POST['dublicateSelectedOffer'])){
            $jobnameen = $_POST['jobnameEN'];
            $jobdesciptionen = $_POST['jobnameEN'];
            $jobemploymenten = $_POST['jobdescriptionEN'];

            $jobnamede = $_POST['jobnameDE'];
            $jobdesciptionde = $_POST['jobdescriptionDE'];
            $jobemploymentde = $_POST['employementDE'];

            $jobnameit = $_POST['jobnameIT'];
            $jobdesciptionit = $_POST['jobdescriptionIT'];
            $jobemploymentit = $_POST['employementIT'];

            $dublicateOfferSQL = "INSERT INTO `jobs`(`jobnameen`, `descriptionen`, `employmenten`, `jobnamede`, `descriptionde`, `employmentde`, `jobnameit`, `descriptionit`, `employmentit`) VALUES ('$jobnameen','$jobdesciptionen','$jobemploymenten','$jobnamede','$jobdesciptionde','$jobemploymentde','$jobnameit','$jobdesciptionit','$jobemploymentit')";
            $conn->query($dublicateOfferSQL);

            $reloadPage;
          }
        }

        ?>
        <div class="sections-container">
          <div class="content-section currentJobOffers">
            <h1 class="heading">Current Job Offers</h1>

            <?php 
              foreach($allJobOffersData as $row){
            ?>
              <div class="offer">
                <h1><span><?php echo $row['jobnameen']; ?></span></h1>
                
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                  <input name="jobOfferId" value="<?php echo $row['ID']; ?>">
                  <button name="openJobOfferButton" type="submit"><img src="../img/icons/Admin Dash/open.png" alt="Error"></button>
                </form>
              </div>
            <?php
              }
            ?>
          </div>

          <div class="content-section show-section"<?php echo $showNothingSelected ?>>
              <h1 class="heading text-center center text-sherpablue">Nothing selected</h1>
          </div>


          <div class="content-section show-section" <?php echo $showOfferSelected ?>> 
              <?php
                foreach($selectedOfferData as $row){
                  ?>
              <div class="selectedOffer">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                  <h1 class="heading">ENGLISH</h1>
                  <div class="englishoffer">  
                        
                        <label class="job-label" for="jobnameEN">Job Title
                        <textarea name="jobnameEN"><?php echo $row['jobnameen']; ?></textarea>
                        </label>

                        <label class="job-label" for="jobdescriptionEN">Job Desciption
                        <textarea name="jobdescriptionEN"><?php echo $row['descriptionen']; ?></textarea>
                        </label>

                        <label class="job-label" for="employementEN">Employment
                        <textarea name="employementEN"><?php echo $row['employmenten']; ?></textarea>
                        </label>
                    </div>
                    <h1 class="heading">GERMAN</h1>
                    <div class="germanoffer">
                        
                        <label class="job-label" for="jobnameDE">Job Title
                        <textarea name="jobnameDE"><?php echo $row['jobnamede']; ?></textarea>
                        </label>

                        <label class="job-label" for="jobdescriptionDE">Job Desciption
                        <textarea name="jobdescriptionDE"><?php echo $row['descriptionde']; ?></textarea>
                        </label>
                        
                        <label class="job-label" for="employementDE">Employment
                        <textarea name="employementDE"><?php echo $row['employmentde']; ?></textarea>
                        </label>
                        
                    </div>
                    <h1 class="heading">Italian</h1>
                    <div class="italianoffer">
                        
                        <label class="job-label" for="jobnameIT">Job Title
                        <textarea name="jobnameIT"><?php echo $row['jobnameit']; ?></textarea>
                        </label>

                        <label class="job-label" for="jobdescriptionIT">Job Desciption
                        <textarea name="jobdescriptionIT"><?php echo $row['descriptionit']; ?></textarea>
                        </label>

                        <label class="job-label" for="employementIT">Employment
                        <textarea name="employementIT"><?php echo $row['employmentit']; ?></textarea>
                        </label>

                      </div>
                      <input name="selectedOfferID" value="<?php echo $row['ID']; ?>">
                      <button name="changeSelectedOffer" class="icon" type="submit"><img src="../img/icons/Admin Dash/save.png" alt="Error"></button>
                      <button name="deleteSelectedOffer" class="icon" type="submit"><img src="../img/icons/Admin Dash/delete.png" alt="Error"></button>
                      <button name="dublicateSelectedOffer" class="icon" type="submit"><img src="../img/icons/Admin Dash/duplicate.png" alt=""></button>
                    </div>
                  </form>           

              </div>
                  <?php
                }
              ?>
          </div>
        </div>

        <div class="sections-container ">
          <div class="newOfferSection text-center">
          <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                  <h1 class="heading">ENGLISH</h1>
                  <div class="englishoffer">  
                        
                        <label class="job-label" for="jobnameENnew">Job Title
                          <br>
                        <textarea name="jobnameENnew"><?php echo $jobnameenNew; ?></textarea>
                        </label>

                        <label class="job-label" for="jobdescriptionENnew">Job Desciption
                        <br>
                        <textarea name="jobdescriptionENnew"><?php echo $jobdesciptionenNew; ?></textarea>
                        </label>

                        <label class="job-label" for="employementENnew">Employment
                        <br>
                        <textarea name="employementENnew"><?php echo $jobemploymentenNew; ?></textarea>
                        </label>
                    </div>
                    <h1 class="heading">GERMAN</h1>
                    <div class="germanoffer">
                        
                        <label class="job-label" for="jobnameDEnew">Job Title
                        <br>
                        <textarea name="jobnameDEnew"><?php echo $jobnamedeNew; ?></textarea>
                        </label>

                        <label class="job-label" for="jobdescriptionDEnew">Job Desciption
                        <br>
                        <textarea name="jobdescriptionDEnew"><?php echo $jobdesciptiondeNew; ?></textarea>
                        </label>
                        
                        <label class="job-label" for="employementDEnew">Employment
                        <br>
                        <textarea name="employementDEnew"><?php echo $jobemploymentdeNew; ?></textarea>
                        </label>
                        
                    </div>
                    <h1 class="heading">Italian</h1>
                    <div class="italianoffer">
                        
                        <label class="job-label" for="jobnameITnew">Job Title
                        <br>
                        <textarea name="jobnameITnew"><?php echo $jobnameitNew; ?></textarea>
                        </label>

                        <label class="job-label" for="jobdescriptionITnew">Job Desciption
                        <br>
                        <textarea name="jobdescriptionITnew"><?php echo $jobdesciptionitNew; ?></textarea>
                        </label>

                        <label class="job-label" for="employementITnew">Employment
                        <br>
                        <textarea name="employementITnew"><?php echo $jobemploymentitNew; ?></textarea>
                        </label>

                      </div>
                      <button name="saveNewOffer" class="icon" type="submit"><img src="../img/icons/Admin Dash/save.png" alt="Error"></button>
                      <button name="resetNewOfferForm" class="icon" type="submit"><img src="../img/icons/Admin Dash/reset.png" alt="Error"></button>
                    </div>
                  </form>           
          </div>
        </div>


<?php
    include 'footer.php';
?>
</body>
</html>
