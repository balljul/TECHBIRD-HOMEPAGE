<?php
    include 'connect.php';

    $filename = basename($_SERVER["SCRIPT_FILENAME"], '.php');
    $reloadpage = "header('LOCATION: $filename.php')";
    $sendBackToLogin = "header('LOCATION: user-login.php')";  
    
    if(!isset($_SESSION['loginStatusU'])){
        $_SESSION['loginStatusU'] = FALSE;
    }

    $sqlPresUsers = "SELECT * FROM `presentationusers`";
    $dataPresUsers = $conn->query($sqlPresUsers);

    if(!isset($_SESSION['loginErrorU'])){
        $_SESSION['loginErrorU'] = "";
    }

    if($filename == 'user-login'){
        if($_SESSION['loginStatusU'] === TRUE){
            header("LOCATION: index.php");
        }
        else if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['userU']) == TRUE || empty($_POST['passwordU']) == TRUE){
                $_SESSION['loginErrorU'] = "Either your password or your username were wrong";
                $_SESSION['loginStatusU'] = FALSE;
                // $sendBackToLogin;
            }
            else{
                $user = $_POST['userU'];
                $pw = $_POST['passwordU'];
                $status = FALSE;
    
                foreach($dataPresUsers as $data){
                    if($user == $data['username'] && $pw == $data['password']){
                        $status = TRUE;
                        break;
                    }
                }
    
                if($status === TRUE){
                    $_SESSION['loginErrorU'] = "";
                    $_SESSION['loginStatusU'] = TRUE;
                    header("LOCATION: index.php");
                }
                else if($status === FALSE){
                    $_SESSION['loginStatusU'] = FALSE;
                    $_SESSION['loginErrorU'] = "Either your password or your username were wrong";
                    // $sendBackToLogin;
                }
            }
    
        }
    }
    else if($filename !== 'user-login'){        
        if($_SESSION['loginStatusU'] === FALSE){
            header('LOCATION: user-login.php');
        }

    }   


?>