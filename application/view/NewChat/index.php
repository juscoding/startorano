<!-- Header mit Seitenname START -->

<div class="startoranoComponentHeaderSiteName">
    <p>neue Nachricht</p>
</div>

<!-- echo out the system feedback (error and success messages) -->
<?php $this->renderFeedbackMessages(); ?>




<form class="startoranoLoginWrapper" method="post" action="<?php echo Config::get('URL'); ?>NewChat/chat_action">

    <!-- SerachInput Empfänger -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeSearch">
        <div class="startoranoUserComponentTypeSearchListElementMain">
            <input type="text" name="message_recipient" placeholder="Empfänger" required>
            <img src="<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg" alt="searchIcon">
        </div>
            <!--  //foreach ($this->companyType as $type) { 
                <div class="startoranoUserComponentTypeSearchListElement">
                    <p>= $type->Jobbezeichnung; 
                </div>
             //}  -->
    </div>

    <!-- TextInput E-Mail -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeTextMessage">
        <input type="text" name="message_content" placeholder="Text" required>
    </div>


     <!-- pinker Button mit weißer Schrift -->
    <input class="startoranoUserComponentsContainer startoranoUserComponentTypeBigButton filledRed" type="submit" value="Senden!">

</form>
