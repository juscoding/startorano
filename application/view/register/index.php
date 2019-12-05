<!-- Header mit Seitenname START -->

<div class="startoranoComponentHeaderSiteName">
    <p>Register</p>
</div>

<!-- echo out the system feedback (error and success messages) -->
<?php $this->renderFeedbackMessages(); ?>




<form class="startoranoLoginWrapper" method="post" action="<?php echo Config::get('URL'); ?>register/register_action">

    <!-- TextInput Firmenname -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_companyName" placeholder="Firmenname..." required>
    </div>

    <!-- TextInput Anzeigename -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_nickName" placeholder="Anzeigename..." required>
    </div>

    <!-- SerachInput Art des Unternehmens -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeSearch">
        <div class="startoranoUserComponentTypeSearchListElementMain">
            <input type="text" name="user_companyType" placeholder="Art des Unternehmens..." required>
            <img src="<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg" alt="searchIcon">
        </div>
            <?php foreach ($this->companyType as $type) { ?>
                <div class="startoranoUserComponentTypeSearchListElement">
                    <p><?= $type->Jobbezeichnung; ?></p>
                </div>
            <?php } ?>
    </div>

    <!-- SerachInput Firmensitz -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeSearch">
        <div class="startoranoUserComponentTypeSearchListElementMain">
            <input type="text" name="user_companyLocation" placeholder="Firmensitz..." required>
            <img src="<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg" alt="searchIcon">
        </div>
            <?php foreach ($this->companyType as $type) { ?>
                <div class="startoranoUserComponentTypeSearchListElement">
                    <p><?= $type->Jobbezeichnung; ?></p>
                </div>
            <?php } ?>
    </div>

    <!-- TextInput Anzahl der Mitarbeiter -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="numeric" name="user_workercount" placeholder="Anzahl der Mitarbeiter" required>
    </div>

    <!-- TextInput E-Mail -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="text" name="user_email" placeholder="E-Mail" required>
    </div>

    <!-- TextInput Passwort -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="password" name="user_password_new" pattern=".{6,}" placeholder="Passwort" required autocomplete="off" required />
    </div>

    <!-- TextInput Passwort wiederholen -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="password" name="user_password_repeat" pattern=".{6,}" required placeholder="Passwort wiederholen" autocomplete="off" required />
    </div>


 
    <!-- show the captcha by calling the login/showCaptcha-method in the src attribute of the img tag -->
    <img id="captcha" src="<?php echo Config::get('URL'); ?>register/showCaptcha" />
    
    <!-- TextInput START -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="text" name="captcha" placeholder="Buchstaben eingeben" required />
    </div>
    <!-- TextInput END -->

    <!-- quick & dirty captcha reloader -->
    <div class="startoranoLoginPasswordReset">
        <a href="#" onclick="document.getElementById('captcha').src = '<?php echo Config::get('URL'); ?>register/showCaptcha?' + Math.random(); return false">Captcha neu laden</a>
    </div>

     <!-- pinker Button mit weißer Schrift -->
    <input class="startoranoUserComponentsContainer startoranoUserComponentTypeBigButton filledRed" type="submit" value="Los!">

</form>
