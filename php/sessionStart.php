<?php 

session_start();

    if(!isset($_SESSION['lang'])){
        $_SESSION['lang'] = "en";
    }

    $_SESSION['langSwitchSetActiveEN'] = ""; 
    $_SESSION['langSwitchSetActiveDE'] = "";
    $_SESSION['langSwitchSetActiveIT'] = "";

    if($_SESSION['lang'] == ""){

        $_SESSION['lang'] = "en";
        $_SESSION['langSwitchSetActiveEN'] = "selected";
        $_SESSION['langSwitchSetActiveDE'] = "";
        $_SESSION['langSwitchSetActiveIT'] = "";

    }
    else{

        if($_SESSION['lang'] == "en"){
            $_SESSION['langSwitchSetActiveEN'] = "selected"; 
            $_SESSION['langSwitchSetActiveDE'] = "";
            $_SESSION['langSwitchSetActiveIT'] = "";
        }
        else if($_SESSION['lang'] == "de"){   
            $_SESSION['langSwitchSetActiveEN'] = ""; 
            $_SESSION['langSwitchSetActiveDE'] = "selected";
            $_SESSION['langSwitchSetActiveIT'] = "";

        }
        else if($_SESSION['lang'] == "it"){   
            $_SESSION['langSwitchSetActiveEN'] = ""; 
            $_SESSION['langSwitchSetActiveDE'] = "";
            $_SESSION['langSwitchSetActiveIT'] = "selected";

        }
    }


?> 