<!-- Header mit Seitenname START -->

<div class="startoranoComponentHeaderSiteName">
    <p>Login</p>
</div>

<!-- Header mit Seitenname END -->

<?php $this->renderFeedbackMessages(); ?>

<form class="startoranoLoginWrapper" action="<?php echo Config::get('URL'); ?>login/login" method="post">
    <!-- TextInput START -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="text" name="user_name" placeholder="Benutzername oder E-Mail" autocomplete="off" required >
    </div>
    <!-- TextInput END -->

    <!-- TextInput START -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="password" name="user_password" placeholder="Passwort" required>
    </div>
    <!-- TextInput END -->

    <?php if (!empty($this->redirect)) { ?>
        <input type="hidden" name="redirect" value="<?php echo $this->encodeHTML($this->redirect); ?>" />
    <?php } ?>


    <div class="startoranoLoginPasswordReset">
        <a href="<?php echo Config::get('URL'); ?>login/requestPasswordReset">Passwort vergessen</a>
    </div>

    <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />
    
    <!-- pinker Button mit weißer Schrift -->
    <input class="startoranoUserComponentsContainer startoranoUserComponentTypeBigButton filledRed" type="submit" value="Los!">
</form>

