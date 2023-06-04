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
    <title>Employees</title>
</head>
<body class="employees-container bg-light ">
    <?php 
      include 'navbar.php';
      
      $TECHBIRD_EMPLOYEES_TITLE_H1 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_EMPLOYEES_TITLE_H1'";
      $TECHBIRD_EMPLOYEES_TITLE_H2 = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_EMPLOYEES_TITLE_H2'";
      $TECHBIRD_EMPLOYEES_TITLE_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_EMPLOYEES_TITLE_TEXT'";    
    ?>

    <!-- Intro Text -->
    <div class="heading-text text-center full-height bg-employees-entry">
        <h1 class="heading text-ripelemon "><?php echo retrieveText($TECHBIRD_EMPLOYEES_TITLE_H1); ?></h1>
        <p class="center">
          <span class="text-persiangreen heading-2"><?php echo retrieveText($TECHBIRD_EMPLOYEES_TITLE_H2); ?></span>
          <span class="text-light ">
          <br>
          <?php echo retrieveText($TECHBIRD_EMPLOYEES_TITLE_TEXT); ?>
          </span>
        </p>
    </div>
       
    <!-- Content -->
    <div class="employee-profiles-container center text-center">
    

      <?php 
       include 'connect.php';
               
       $employees_table = "SELECT * FROM employees";
       $results = $conn->query($employees_table);
        

       foreach($results as $row){
           ?>
             <div class="employee">
               <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['employee-image']); ?>" alt="Error">
               <p ><span class="text-persiangreen"><?php echo $row['name'] ?></span><br/> <?php echo $row['position'] ?></p>
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