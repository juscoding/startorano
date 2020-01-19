<!-- Header mit Seitenname START -->

<div class="startoranoComponentHeaderSiteName">
    <p>neue Nachricht</p>
</div>

<!-- echo out the system feedback (error and success messages) -->
<?php $this->renderFeedbackMessages(); ?>




<form class="startoranoLoginWrapper" method="post" action="<?php echo Config::get('URL'); ?>NewChat/sendNewMsg">
    <!-- Angemeldeter Benutzer -->
    <input type="hidden" name="message_sender" value="<?= Session::get('user_id'); ?>" />
    
    <!-- SerachInput Empfänger -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeSearch">
        <div class="startoranoUserComponentTypeSearchListElementMain">
            <input type="text" controller="NewChat" name="message_recipient" placeholder="Empfänger..." autocomplete="off" value="<?php if(!empty($this->recipient[0]->user_name)){echo $this->recipient[0]->user_name;}?>" required/>
            <img src="<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg" alt="searchIcon">
        </div>
        <div class="startoranoUserComponentTypeSearchListElementWrapper"></div>
    </div>

    <!-- TextInput E-Mail -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeTextMessage">
        <input type="text" name="message_content" placeholder="Text" required>
    </div>

    <!-- Status -->
    <input type="hidden" name="message_status" value="0" />
    
    <!-- pinker Button mit weißer Schrift -->
    <input class="startoranoUserComponentsContainer startoranoUserComponentTypeBigButton filledRed" type="submit" value="Senden!">


</form>