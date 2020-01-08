    <!-- Header Datei einbinden -->
    <?php include("../application/view/_templates/header_standard.php");?>

    <form class="wrapper" action="<?php echo Config::get('URL'); ?>add/createNewAnzeige" method="post">

        
        <!-- User Info Element START -->
        
        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeUserInfo">
            <div class="startoranoUserComponentTypeUserInfoRow1">
                <img src="<?php echo Config::get('URL'); ?>/images/profilePic2.png" alt="ProfilePicture">
            </div>
            <div class="startoranoUserComponentTypeUserInfoRow2">
                <div>
                    <p><?= $this->user_name; ?></p>
                </div>
                <div>
                    <small>Programmer</small>
                </div>
            </div>
        </div>
        
        <input  type="hidden" name="anzeigen_auftraggeber" value="<?= $this->user_name; ?>">
        
        <!-- User Info Element END -->
        
        <p class="startoranoNeueAnzeigeZwischentext">sucht</p>
        
        <!-- SerachInput START -->
        
        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeSearch">
            <div class="startoranoUserComponentTypeSearchListElementMain">
                <input type="text" controller="add" name="getJobs" placeholder="Job wählen..." autocomplete="off" required>
                <img src="<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg" alt="searchIcon">
                <input type="hidden" name="anzeigen_jobId">
            </div>
            <div class="startoranoUserComponentTypeSearchListElementWrapper"></div>
        </div>
        
        <!-- SerachInput ENDE -->
        
        <p class="startoranoNeueAnzeigeZwischentext">für</p>
        
        <!-- TextInput START -->
        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
            <input type="text" name="anzeigen_titel" placeholder="Anzeigentitel...">
        </div>
        <!-- TextInput END -->
        
        <!-- TextInput START -->
        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
            <textarea rows="5" name="anzeigen_beschreibung" placeholder="Beschreibung..."></textarea>
        </div>
        <!-- TextInput END -->
        
        <!-- pinker Button mit weißer Schrift -->
        <input class="startoranoUserComponentsContainer startoranoUserComponentTypeBigButton filledRed" type="submit" value="SWAG!">
        
    </form>
    
    <!-- Footer Datei einbinden -->
    <?php include("../application/view/_templates/footer_standard.php");?>