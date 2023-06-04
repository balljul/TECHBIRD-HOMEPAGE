
    <link rel="stylesheet" href="../fonts/Teko Webfont/stylesheet.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/footer.css">
    
    <?php 
        $TECHBIRD_FOOTER_IMPRINT_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_FOOTER_IMPRINT_TEXT'";
        $TECHBIRD_FOOTER_COPRIGHT_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_FOOTER_COPRIGHT_TEXT'";
        $TECHBIRD_FOOTER_CONTACT_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_FOOTER_CONTACT_TEXT'";
        $TECHBIRD_FOOTER_PROJECT_RESOURCES_TEXT = "SELECT * FROM `texts` WHERE `textkey` = 'TECHBIRD_FOOTER_PROJECT_RESOURCES_TEXT'";
        
    ?> 

<div class="spacing"></div>
<div class="footer-container text-center center">
    
    <div class="footer-logo">
       <a href="index.php"><img src="../img/Logo/Logo Designs TECHBIRD/Icon only.svg" alt="Error loading Logo"></a>
    </div>

    <div class="footer-socials icon center text-center">
        <a href="https://www.youtube.com/channel/UCzjnWgfwJ09l5DkJ1gBIkyA"><img src="../img/icons/Footer/youtube.png" alt=""></a>
        <a href="https://www.instagram.com/techbird_austria/"><img src="../img/icons/Footer/instagram.png" alt=""></a>
        <a href="https://www.facebook.com/people/Techbird-Austria/pfbid0rtFKLWzJqxcSQ4dXmrmgJ8Wap6MJt1qL64hgAT9EKaKGKen9SgPRUMRwXFNYuD1ul/"><img src="../img/icons/Footer/facebook.png" alt=""></a>
        <a href="https://twitter.com/TechbirdAustria"><img src="../img/icons/Footer/twitter.png" alt=""></a>
        <a href="https://github.com/balljul/TECHBIRD-HOMEPAGE"><img src="../img/icons/Footer/social.png" alt=""></a>
        <a href="https://www.linkedin.com/in/techbird-austria-b68774279/"><img src="../img/icons/Footer/linkedin.png" alt=""></a>
    </div>
    
    <div class="footer-links ">
        <a href="imprint.php"><p class="heading text-light text-uppercase center text-center"><?php echo retrieveText($TECHBIRD_FOOTER_IMPRINT_TEXT); ?></p></a>
        <a href="copyright.php"><p class="heading text-ripelemon text-uppercase center text-center"><?php echo retrieveText($TECHBIRD_FOOTER_COPRIGHT_TEXT); ?></p></a>
        <a href="contact-infos.php"><p class="heading text-yellowgreen text-uppercase center text-center"><?php echo retrieveText($TECHBIRD_FOOTER_CONTACT_TEXT); ?></p></a>
        <a href="project-resources.php"><p class="heading text-persiangreen text-uppercase center text-center"><?php echo retrieveText($TECHBIRD_FOOTER_PROJECT_RESOURCES_TEXT); ?></p></a>
    </div>

</div>
