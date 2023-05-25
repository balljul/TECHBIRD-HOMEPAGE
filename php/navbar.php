
<?php
include 'text-retrieve.php';
$filename = basename($_SERVER["SCRIPT_FILENAME"], '.php');
// echo $filename;


$TECHBIRD_NAVBAR_HISTORY = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_NAVBAR_HISTORY'";
$TECHBIRD_NAVBAR_LOCATIONS = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_NAVBAR_LOCATIONS'";
$TECHBIRD_NAVBAR_PARTNERS = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_NAVBAR_PARTNERS'";

$TECHBIRD_NAVBAR_EMPLOYESS = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_NAVBAR_EMPLOYESS'";
$TECHBIRD_NAVBAR_SOCIAL_MEDIA = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_NAVBAR_SOCIAL_MEDIA'";
$TECHBIRD_NAVBAR_JOBS = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_NAVBAR_JOBS'";

$TECHBIRD_LANGSWITCH_SUBMIT_BUTTON =  "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_LANGSWITCH_SUBMIT_BUTTON'";
?>



<link rel="stylesheet" href="../fonts/Teko Webfont/stylesheet.css">
<link rel="stylesheet" href="../css/navbar.css">

<div class="bg-light nav-container" >
        
    <!-- Logic -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST['langSwitch']) == TRUE ){
            $_SESSION['lang'] = $_POST['langSwitch'];
            
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

        if(isset($_POST['logout-btn']) == TRUE){
            $_SESSION['loginStatus'] = FALSE;
        }
    }

    ?>

    <!-- Language Switch and Logout-->
    <div class="navbar-head">

        <div class="langSwitch">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?> ">
                <select class="text-sherpablue" name="langSwitch" id="langSwitch">
                    <option value="en" <?php echo $_SESSION['langSwitchSetActiveEN'] ?>><p>Englisch</p></option>
                    <option value="de" <?php echo $_SESSION['langSwitchSetActiveDE'] ?>><p>Deutsch</p></option>
                    <option value="it" <?php echo $_SESSION['langSwitchSetActiveIT'] ?>><p>Italiano</p></option>
                </select>
                <button class="text-sherpablue" type="submit" name="submit"><?php echo retrieveText($TECHBIRD_LANGSWITCH_SUBMIT_BUTTON); ?></button>
            </form>
        </div>
       
        <?php if($filename == 'admin-dash-overview' || $filename == 'admin-dash-job-offers' || $filename == 'admin-dash-applications'){ ?>
            <div class="logout-btn">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <button name="logout-btn" type="submit">Logout</button>
                </form>
            </div>
        <?php } ?>

    
    </div>
    <!-- Navbar itself -->
    <nav class="navbar">
 
        <div class="nav-contents nav-left-side">
            <p class="nav-text text-center"> <a href="history.php"><?php echo retrieveText($TECHBIRD_NAVBAR_HISTORY) ?></a> </p>
            <p class="nav-text text-center"><a href="locations.php"><?php echo retrieveText($TECHBIRD_NAVBAR_LOCATIONS) ?></a></p>
            <p class="nav-text text-center"><a href="partners.php"><?php echo retrieveText($TECHBIRD_NAVBAR_PARTNERS) ?></a></p>
        </div>

        <div class="nav-logo" >
            <a href="index.php"><img src="../img/Logo/Logo Designs TECHBIRD/Icon only.svg" alt=""></a>
        </div>

        <div class="nav-contents nav-right-side">
            <p class="nav-text text-center"><a href="employees.php"><?php echo retrieveText($TECHBIRD_NAVBAR_EMPLOYESS) ?></a></p>
            <p class="nav-text text-center"><a href="social-media.php"><?php echo retrieveText($TECHBIRD_NAVBAR_SOCIAL_MEDIA) ?></a></p>
            <p class="nav-text text-center"><a href="jobs.php"><?php echo retrieveText($TECHBIRD_NAVBAR_JOBS) ?></a></p>
        </div>

    </nav>

</div>

