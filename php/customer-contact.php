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
    <title>Customer Contact</title>
</head>
<body class="bg-light customer-contact-container">

<?php

include 'navbar.php';
include 'connect.php';

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$contactperson = $companyname = $website = $personalphone = $companyphone = $personalemail = $companyemail = $reason = $comment = "";
$contactpersonErr = $companynameErr = $websiteErr = $personalphoneErr = $companyphoneErr = $personalemailErr = $companyemailErr = $reasonErr = "";


?>

<form class="center text-center" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="contactperson">Your Name</label>
    <br>
    <input type="text" name="contactperson" id="contactperson">

    <br>

    <label for="companyname">Company Name</label>
    <br>
    <input type="text" name="companyname" id="companyname">

    <br>

    <label for="website">Company Homepage</label>
    <br>
    <input type="url" name="website" id="website">

    <br>

    <label for="personalphone">Personal Phonenumber</label>
    <br>
    <input type="tel" name="phonenumber" id="phonenumber">

    <br>

    <label for="companyphone">Company Phonenumber</label>
    <br>
    <input type="tel" name="companyphone" id="companyphone">

    <br>

    <label for="personalemail">Personal Email</label>
    <br>
    <input type="text" name="personalemail" id="personalemail">

    <br>

    <label for="companyemail">Company Email</label>
    <br>
    <input type="text" name="companyemail" id="companyemail">

    <br>

    <label for="reason">Contactreason</label>
    <br>
    <select name="reason" id="reason">
        <option value="question">I got a question</option>
        <option value="partnership">I want to look into out service</option>
        <option value="other">Other reasons</option>
    </select>

    <br>

    <label for="comment">Enter Reason here: </label>
    <br>
    <textarea name="comment" id="comment"></textarea>

    <br>

    <button type="submit">Submit</button>
    
</form>
</body>
</html>