<!-- Header mit Seitenname START -->

<div class="startoranoComponentHeaderSiteName">
    <p>neuer Benutzername</p>
</div>

<!-- Header mit Seitenname END -->

<form class="wrapper" action="<?php echo Config::get('URL'); ?>user/editUserName_action" method="post">

    <?php $this->renderFeedbackMessages(); ?>

    <!-- TextInput START -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="text" name="user_name" autocomplete="off" placeholder="Name..." required>
    </div>
    <!-- TextInput END -->

    <input type="hidden" name="csrf_token" value="<?= Csrf::makeToken(); ?>" />

    <!-- pinker Button mit weißer Schrift -->
    <input class="startoranoUserComponentsContainer startoranoUserComponentTypeBigButton filledRed" type="submit" value="SWAG!">


</form>

<!-- Footer Datei einbinden -->
<?php include("../application/view/_templates/footer_standard.php");?>
