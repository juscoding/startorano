<!-- Header Datei einbinden -->
<?php include("../application/view/_templates/header_standard.php");?>

<div class="wrapper">

    <!-- User Info Element START -->

    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeUserInfo">
        <div class="startoranoUserComponentTypeUserInfoRow1">
            <img src="<?php echo Config::get('URL'); ?>/images/profilePic2.png" alt="ProfilePicture">
        </div>
        <div class="startoranoUserComponentTypeUserInfoRow2">
            <div>
                <p>droaup e. U.</p>
            </div>
            <div>
                <small>Programmer</small>
            </div>
        </div>
    </div>

    <!-- User Info Element END -->

    <p class="startoranoNeueAnzeigeZwischentext">sucht</p>

    <!-- SerachInput START -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeSearch">
        <div class="startoranoUserComponentTypeSearchListElementMain">
            <input type="text" name="user_companyLocation" placeholder="Firmensitz..." autocomplete="off" required>
            <img src="<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg" alt="searchIcon">
        </div>
        <div class="startoranoUserComponentTypeSearchListElementWrapper"></div>
    </div>

    <!-- SerachInput ENDE -->

    <p class="startoranoNeueAnzeigeZwischentext">für</p>



</div>

<!-- Footer Datei einbinden -->
<?php include("../application/view/_templates/footer_standard.php");?>