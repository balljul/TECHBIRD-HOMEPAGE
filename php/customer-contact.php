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

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $errorIndex = 8;

  // Contact Person Testing

  if(empty($_POST['contactperson'])){
    $contactpersonErr = "Your Name is required!";
  }
  else if((!preg_match("/^[a-zA-Z-' ]*$/",$_POST['contactperson']))){
      $contactpersonErr = "Only letters and white space allowed";
  }
  else{
      $contactperson = test_input($_POST['contactperson']);
      $errorIndex--;
  }

  // Companyname Testing

  if(empty($_POST['companyname'])){
    $companynameErr = "Company Name is required!";
  }
  else{
      $companyname = test_input($_POST['companyname']);
      $errorIndex--;
  }

  // url gets tested by html tag type="url"
  if(empty($_POST['website']) == TRUE){
    $website = "";
    $errorIndex--;
  }
  else{
    $website = $_POST['website'];
    $errorIndex--;
  }

  // Personal Phone
  if(empty($_POST['personalphone'])){
    $personalphoneErr = "Phonenumber is required!";
  }
  else{
      $personalphone = test_input($_POST['personalphone']);
      $errorIndex--;
  }
  
  // Company Phone
  if(empty($_POST['companyphone'])){
    $companyphoneErr = "Phonenumber is required!";
  }
  else{
      $companyphone = test_input($_POST['companyphone']);
      $errorIndex--;
  }

  // Personal Email

  if(empty($_POST['personalemail'])){
    $personalemailErr = "Email is required!";
  }
  else if(!filter_var($_POST['personalemail'], FILTER_VALIDATE_EMAIL)){
      $personalemailErr = "Invalid email format";
  }
  else{
      $personalemail = test_input($_POST['personalemail']);
      $errorIndex--;
  }


  // Company Email

   if(empty($_POST['companyemail'])){
    $companyemailErr = "Email is required!";
  }
  else if(!filter_var($_POST['companyemail'], FILTER_VALIDATE_EMAIL)){
      $companyemailErr = "Invalid email format";
  }
  else{
      $companyemail = test_input($_POST['companyemail']);
      $errorIndex--;
  }

  // Contactreason is a select form
  $reason = $_POST['reason'];

  // Comment
  if(empty($_POST['comment'])){
    $comment = "";
    $errorIndex--;
  }
  else{
    $comment = test_input($_POST['comment']);
    $errorIndex--;
  }

  if($errorIndex == 0){
    $submitRequestSQL = "INSERT INTO `customer-requests`(`contactperson`, `companyname`, `companywebsite`, `personalphone`, `companyphone`, `personalemail`, `companyemail`, `reason`, `comment`) VALUES ('$contactperson','$companyname','$website','$personalphone','$companyphone','$personalemail','$companyemail','$reason','$comment')";
    $conn->query($submitRequestSQL);
    $contactperson = $companyname = $website = $personalphone = $companyphone = $personalemail = $companyemail = $reason = $comment = "";
    $contactpersonErr = $companynameErr = $websiteErr = $personalphoneErr = $companyphoneErr = $personalemailErr = $companyemailErr = $reasonErr = "";
    $errorIndex = 8;
  }
  else{
    $errorIndex = 8;
  }

}

?>

<form class="center text-center contact-form " method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <label for="contactperson">Your Name: <span class="error"><?php echo $contactpersonErr;	?></span></label>
    <br>
    <input type="text" name="contactperson" id="contactperson" value="<?php echo $contactperson ?>">

    <br>

    <label for="companyname">Company Name: <span class="error"><?php echo $companynameErr;	?></span></label>
    <br>
    <input type="text" name="companyname" id="companyname" value="<?php echo $companyname ?>">

    <br>

    <label for="website">Company Homepage: <span class="error"><?php echo $websiteErr;	?></span></label>
    <br>
    <input type="url" name="website" id="website" value="<?php echo $website ?>">

    <br>

    <label for="personalphone">Personal Phonenumber: <span class="error"><?php echo $personalphoneErr;	?></span></label>
    <br>
    <input type="tel" name="personalphone" id="personalphone" value="<?php echo $personalphone ?>">

    <br>

    <label for="companyphone">Company Phonenumber: <span class="error"><?php echo $companyphoneErr;	?></span></label>
    <br>
    <input type="tel" name="companyphone" id="companyphone" value="<?php echo $companyphone ?>">

    <br>

    <label for="personalemail">Personal Email: <span class="error"><?php echo $personalemailErr;	?></span></label>
    <br>
    <input type="text" name="personalemail" id="personalemail" value="<?php echo $personalemail ?>">

    <br>

    <label for="companyemail">Company Email: <span class="error"><?php echo $companyemailErr;	?></span></label>
    <br>
    <input type="text" name="companyemail" id="companyemail" value="<?php echo $companyemail ?>">

    <br>

    <label for="reason">Contactreason: <span class="error"><?php echo $reasonErr;	?></span></label>
    <br>
    <select name="reason" id="reason">
        <option value="question">I got a question</option>
        <option value="partnership">I want to look into out service</option>
        <option value="other">Other reasons</option>
    </select>

    <br>

    <label for="comment">Comment: <span class="error"></label>
    <br>
    <textarea name="comment" id="comment"><?php echo $comment; ?></textarea>

    <br>

    <button type="submit">Submit</button>
    
</form>

<?php 
  include 'footer.php';
?> 
</body>
</html>