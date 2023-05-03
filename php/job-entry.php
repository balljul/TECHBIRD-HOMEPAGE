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
    <title>Job Entry</title>
</head>
<body class="bg-light job-entry-container">
    
<?php 
    include 'navbar.php';     
    include 'connect.php';

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $fnameErr = $lnameErr = $departmentErr = $emailErr = $applicationErr = $phonenumberErr = $websiteErr = ""; 
    $fname = $lname = $department = $email = $application = $comment = $website = $phonenumber = "";


    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $errorIndex = 7;

        if(empty($_POST['fname'])){
            $fnameErr = "First Name is required!";
        }
        else if((!preg_match("/^[a-zA-Z-' ]*$/",$_POST['fname']))){
            $fnameErr = "Only letters and white space allowed";
        }
        else{
            $fname = test_input($_POST['fname']);
            $errorIndex--;
        }

        if(empty($_POST['lname'])){
            $lnameErr = "Last Name is required!";
        }
        else if((!preg_match("/^[a-zA-Z-' ]*$/",$_POST['lname']))){
            $lnameErr = "Only letters and white space allowed";
        }
        else{
            $lname = test_input($_POST['lname']);
            $errorIndex--;
        }

        if(empty($_POST['department'])){
            $departmentErr = "Department is required!";
        }
        else{
            $department = test_input($_POST['department']);
            $errorIndex--;
        }   

        if(empty($_POST['phonenumber'])){
            $phonenumberErr = "Phonenumber is required!";
        }
        else{
            $phonenumber = test_input($_POST['phonenumber']);
            $errorIndex--;
        }

        if(empty($_POST['email'])){
            $emailErr = "Email is required!";
        }
        else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
        else{
            $email = test_input($_POST['email']);
            $errorIndex--;
        }

        if(empty($_POST['website'])){
            $website = "";
            $errorIndex--;
        }
        else if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $_POST['website'])){
            $websiteErr = "invalid URL";
        }
        else{
            $website = test_input($_POST['website']);
            $errorIndex--;
        }

        if(empty($_POST['application'])){
            $applicationErr = "Your Application is required!";
        }
        else{
            $application = test_input($_POST['application']);
            $errorIndex--;
        }

        if(empty($_POST['comment'])){
            $comment = "";
        }
        else{
            $comment = test_input($_POST['comment']);
        }

        if($errorIndex == 0){
            $sql = "INSERT INTO `job-applications`(`fname`, `lname`, `department`, `Application`, `Comment`, `email`,  `website`, `phonenumber`) VALUES ('$fname','$lname','$department','$application','$comment','$email', '$website', '$phonenumber')"; 
            $conn->query($sql); 
            $fname = $lname = $department = $email = $application = $comment = $website = $phonenumber = "";
            $fnameErr = $lnameErr = $departmentErr = $emailErr = $applicationErr = $phonenumberErr = $websiteErr = ""; 
        }
        else{
            $errorIndex = 7;
        }
        
    }


?>
   
   <form class="text-center center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>">

        <label for="fname">First Name : <span class="error"> * <?php echo $fnameErr; ?></span></label>
        <br>
        <input class="text-center" type="text" id="fname" name="fname" value="<?php echo $fname; ?>">
        <br>

        <label for="lname">Last Name : <span class="error"> * <?php echo $lnameErr; ?></span></label>
        <br>
        <input class="text-center" type="text"  id="lname" name="lname" value="<?php echo $lname; ?>">
        

        <br>

        <label for="department">Department you are applying to : <span class="error"> * <?php echo $departmentErr; ?></span></label>
        <br>
            <select class="text-center center" id="department" name="department">
                <option value="marketing">Marketing</option>
                <option value="design">Design</option>
                <option value="cs">Customer Sucess</option>
                <option value="mrac">Multilingual Research and Connections </option>
                <option value="pam">Press and Media</option>
                <option value="it">IT</option>
                <option value="sm">Social Media</option>
                <option value="sales">Sales</option>
            </select>
        
        <br>

        <label for="phonenumber">Phone Number <span class="error"> * <?php echo $phonenumberErr; ?></span></label>
        <br>
        <input  type="tel" id="phonenumber" name="phonenumber" value="<?php echo $phonenumber; ?>">
        
        
        <br>

        <label for="email">Email Address : <span class="error"> * <?php echo $emailErr; ?></span></label>
        <br>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        
        
        <br>

        <label for="website">Personal Website : <span class="error"><?php echo $departmentErr; ?></span></label>
        <br>
        <input  type="url" name="website" id="website" value="<?php echo $website; ?>">
        

        <br>

        <label for="application">Your Application(PDF-File) : <span class="error"> * <?php echo $applicationErr; ?></span></label>
        <br>
        <input  type="file" id="application" name="application" >
        
        
        <br>

        <label for="comment">Feel free to add a comment : </label>
        <br>
        <textarea id="comment" cols="30" rows="10" name="comment" "></textarea>

        <br>

        <button>Send Application</button>
   </form>

</body>
</html>