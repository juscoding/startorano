    <!-- Header Datei einbinden -->
    <?php include("../application/view/_templates/header_standard.php"); ?>

    <form class="wrapper" action="<?php echo Config::get('URL'); ?>EditProject/createNewAnzeige" method="post">
        <!-- <input  type="hidden" name="anzeigen_id" value="4"> -->

        <!-- User Info Element START -->

        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeUserInfo">
            <div class="startoranoUserComponentTypeUserInfoRow1">
                <img src="<?php echo Config::get('URL'); ?>/images/profilePic2.png" alt="ProfilePicture">
            </div>
            <div class="startoranoUserComponentTypeUserInfoRow2">
                <div>

                    <p><?= $this->user_name; ?></p>
                    <!-- <p><?= print_r($this->editProject); ?></p> -->
                </div>
                <div>
                    <small><?php if (!empty($this->user_company_type[0]->Art)){ 
                        echo $this->user_company_type[0]->Art;
                    }; ?></small>
                </div>
            </div>
        </div>

        <input type="hidden" name="anzeigen_auftraggeber" value="<?= $this->user_name; ?>">

        <!-- User Info Element END -->

        <p class="startoranoNeueAnzeigeZwischentext">sucht im Bereich</p>

        <!-- SerachInput START -->

        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeSearch">
            <div class="startoranoUserComponentTypeSearchListElementMain">
                <input type="text" controller="add" name="getJobs" placeholder="Branche wählen..." autocomplete="off" value="<?php if(!empty($this->editProject[0]->Art)){ echo $this->editProject[0]->Art; } ?>" required>
                <img src="<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg" alt="searchIcon">
                <input type="hidden" name="anzeigen_jobId">
            </div>
            <div class="startoranoUserComponentTypeSearchListElementWrapper"></div>
        </div>
        <!-- SerachInput ENDE -->

        <p class="startoranoNeueAnzeigeZwischentext">einen Experten für</p>

        <!-- TextInput START -->
        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
            <input type="text" name="anzeigen_titel" value="<?php if(!empty($this->editProject[0]->Titel)){ echo $this->editProject[0]->Titel; } ?>" required>
        </div>
        <!-- TextInput END -->

        <!-- TextInput START -->
        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeText">
            <textarea rows="5" name="anzeigen_beschreibung" placeholder="Beschreibung..." required>
                <?php if(!empty($this->editProject[0]->Beschreibung)){ echo $this->editProject[0]->Beschreibung; } ?>
            </textarea>
        </div>
        <!-- TextInput END -->


        <p class="startoranoNeueAnzeigeZwischentext">angenommen von</p>

        <!-- UserSearch START -->
        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeSearch">
            <div class="startoranoUserComponentTypeSearchListElementMain">
                <input type="text" controller="NewChat" name="message_recipient" placeholder="Bearbeiter" value="<?php if(!empty($this->editProject[0]->user_name)){ echo $this->editProject[0]->user_name; } ?>" autocomplete="off">
                <img src="<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg" alt="searchIcon">
            </div>
            <div class="startoranoUserComponentTypeSearchListElementWrapper"></div>
        </div>
        <!-- UserSearch ENDE -->

        <!-- DropDownInput START -->
        <div class="startoranoUserComponentsContainer startoranoUserComponentTypeDropDown">
            <div class="startoranoUserComponentTypeDropDownListElement startoranoUserComponentTypeDropDownListElementFirst closed">
                <input type="hidden" name="anzeigen_status">
                <p><?php
                if(!empty($this->editProject[0]->Status)){
                    switch ($this->editProject[0]->Status) {
                        case 0: ?> Status
                            <?php break; ?>
                        <?php
                        case 1: ?> in Bearbeitung
                            <?php break; ?>
                        <?php
                        case 2: ?> erledigt
                            <?php break; ?>
                    <?php } 
                }else{?> Status <?php } ?>
                </p>
                <img src="<?php echo Config::get('URL'); ?>images/svg/arrowDownIcon.svg" alt="arrowDownIcon">
            </div>
            <div class="startoranoUserComponentTypeDropDownListElement startoranoUserComponentTypeDropDownListElementLoaded">
                <p>erledigt</p>
            </div>
            <div class="startoranoUserComponentTypeDropDownListElement startoranoUserComponentTypeDropDownListElementLoaded">
                <p>in Bearbeitung</p>
            </div>
            <div class="startoranoUserComponentTypeDropDownListElement startoranoUserComponentTypeDropDownListElementLoaded">
                <p>offen</p>
            </div>
        </div>
        <!-- DropDownInput END -->


        <!-- pinker Button mit weißer Schrift -->
        <input class="startoranoUserComponentsContainer startoranoUserComponentTypeBigButton filledRed" type="submit" value="Speichern">

    </form>
    <div class="startoranoDeviderFooter"></div>

    <!-- Footer Datei einbinden -->
    <?php include("../application/view/_templates/footer_standard.php"); ?>