<!-- Header mit Seitenname START -->

<div class="startoranoComponentHeaderSiteName">
    <p>neues Passwort</p>
</div>

<!-- Header mit Seitenname END -->

<form class="wrapper" action="<?php echo Config::get('URL'); ?>user/changePassword_action" name="new_password_form" method="post">

    <?php $this->renderFeedbackMessages(); ?>

    <!-- TextInput START -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="password" name="user_password_current" pattern=".{6,}" autocomplete="off" placeholder="aktuelles Passwort..." required>
    </div>
    <!-- TextInput END -->

    <!-- TextInput START -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="password" name="user_password_new" pattern=".{6,}" autocomplete="off" placeholder="neues Passwort..." required>
    </div>
    <!-- TextInput END -->

    <!-- TextInput START -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="password" name="user_password_repeat" pattern=".{6,}" autocomplete="off" placeholder="neues Passwort wiederholen..." required>
    </div>
    <!-- TextInput END -->

    <!-- pinker Button mit weißer Schrift -->
    <input class="startoranoUserComponentsContainer startoranoUserComponentTypeBigButton filledRed" type="submit" value="SWAG!">


</form>

<!-- Footer Datei einbinden -->
<?php include("../application/view/_templates/footer_standard.php");?>

