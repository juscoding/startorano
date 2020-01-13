<!-- Header mit Seitenname START -->

<div class="startoranoComponentHeaderSiteName">
    <p>neue E-Mail</p>
</div>

<!-- Header mit Seitenname END -->

<form class="wrapper" action="<?php echo Config::get('URL'); ?>user/editUserEmail_action" method="post">

    <?php $this->renderFeedbackMessages(); ?>

    <!-- TextInput START -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
        <input type="text" name="user_email" autocomplete="off" placeholder="E-Mail..." required>
    </div>
    <!-- TextInput END -->

    <!-- pinker Button mit weißer Schrift -->
    <input class="startoranoUserComponentsContainer startoranoUserComponentTypeBigButton filledRed" type="submit" value="SWAG!">


</form>

<!-- Footer Datei einbinden -->
<?php include("../application/view/_templates/footer_standard.php");?>
