<?php
    include 'connect.php';

    $filename = basename($_SERVER["SCRIPT_FILENAME"], '.php');
    $reloadpage = "header('LOCATION: $filename.php')";
    $sendBackToLogin = "header('LOCATION: login.php')";  
    
    if(!isset($_SESSION['loginStatus'])){
        $_SESSION['loginStatus'] = FALSE;
    }

    $sqlUsers = "SELECT * FROM `users`";
    $dataUsers = $conn->query($sqlUsers);

    if(!isset($_SESSION['loginError'])){
        $_SESSION['loginError'] = "";
    }

    if($filename == 'login'){
        if($_SESSION['loginStatus'] === TRUE){
            header("LOCATION: admin-dash-overview.php");
        }
        else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['user']) == TRUE || empty($_POST['password']) == TRUE){
                $_SESSION['loginError'] = "Either your password or your username were wrong";
                $_SESSION['loginStatus'] = FALSE;
                // $sendBackToLogin;
            }
            else{
                $user = $_POST['user'];
                $pw = $_POST['password'];
                $status = FALSE;
    
                foreach($dataUsers as $data){
                    if($user == $data['username'] && $pw == $data['password']){
                        $status = TRUE;
                        break;
                    }
                }
    
                if($status === TRUE){
                    $_SESSION['loginError'] = "";
                    $_SESSION['loginStatus'] = TRUE;
                    header("LOCATION: admin-dash-overview.php");
                }
                else if($status === FALSE){
                    $_SESSION['loginStatus'] = FALSE;
                    $_SESSION['loginError'] = "Either your password or your username were wrong";
                    // $sendBackToLogin;
                }
            }
    
        }
    }
    else if($filename !== 'login'){        
        if($_SESSION['loginStatus'] === FALSE){
            $sendBackToLogin;
        }

    }   


?>