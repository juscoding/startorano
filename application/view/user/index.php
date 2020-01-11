<!-- Header Datei einbinden -->
<?php include("../application/view/_templates/header_profile.php"); ?>


<div class="startoranoProfileTabWrapper">
    <div class="startoranoProfileTabWrapperUnderflow">
        <div class="startoranoProfileTabWrapperTabs">
            <!-- Profil-Firmeninfo START -->
            <div class="startoranoUserComponentsContainer startoranoUserComponentTypeCompanyInfo">
                <div class="startoranoUserComponentTypeCompanyInfoHeadline">
                    <p>Firmeninfo</p>
                </div>
                <div class="startoranoUserComponentTypeCompanyInfoBody">
                    <p><?= $this->userInfo[0]->Firmeninfo; ?></p>
                </div>
            </div>
            <!-- Profil-Firmeninfo END -->
            <!-- User Info Element Small START -->
            <div class="startoranoUserComponentsContainer startoranoUserComponentTypeUserInfoSmall">
                <div class="startoranoUserComponentTypeUserInfoSmallTextWrapper">
                    <p><?= $this->userInfo[0]->Mitarbeiter; ?></p>
                    <small>Mitarbeiter</small>
                </div>
                <div class="startoranoUserComponentTypeUserInfoSmallTextWrapper">
                    <p><?= $this->userInfo[0]->Ort; ?></p>
                    <small>Startupsitz</small>
                </div>
            </div>
            <!-- User Info Element Small END -->
        </div>
        <div class="startoranoProfileTabWrapperTabs">
            <?php foreach ($this->userAnzeigen as $Anzeige) { ?>
                <!-- Aufruf der EditProject index.php  -->
                
                <!-- Job-Element START -->
                <a class="startoranoUserComponentsContainer startoranoUserComponentTypeJobElement" name="anzeige" href="<?php echo Config::get('URL'); ?>user/anzeige/<?=$Anzeige->AnzeigeID;?>">
                    <div class="startoranoUserComponentTypeJobElementRow1">
                        <div class="startoranoUserComponentTypeJobElementRow1ProfilePicture">
                            <img src="<?php echo Config::get('URL'); ?>/images/profilePic.png" alt="ProfilePicture">
                        </div>
                        <div class="startoranoUserComponentTypeJobElementRow1ProfileInfo">
                            <div class="startoranoUserComponentTypeJobElementRow1ProfileInfoRow1">
                                <p><?= $Anzeige->Firmenname; ?></p>
                            </div>
                            <div class="startoranoUserComponentTypeJobElementRow1ProfileInfoRow2">
                                <small><?= $Anzeige->Art; ?></small>
                            </div>
                        </div>
                        <div class="startoranoUserComponentTypeJobElementRow1Bookmark">
                            <img src="<?php echo Config::get('URL'); ?>/images/svg/bookmarkOff.svg" alt="bookmarkIcon">
                        </div>
                    </div>
                    <div class="startoranoUserComponentTypeJobElementRow2">
                        <div class="startoranoUserComponentTypeJobElementRow2JobInfo">
                            <div class="startoranoUserComponentTypeJobElementRow2JobInfoRow1">
                                <p><?= $Anzeige->Titel; ?></p>
                            </div>
                            <div class="startoranoUserComponentTypeJobElementRow2JobInfoRow2">
                                <p><?= $Anzeige->Beschreibung; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="startoranoUserComponentTypeJobElementRow3">
                        <div class="startoranoUserComponentTypeJobElementRow3PostTime">
                            <small><?= $Anzeige->Zeitstempel; ?></small>
                        </div>
                        <div class="startoranoUserComponentTypeJobElementRow3SmallButton">
                            <input class="startoranoUserComponentsContainer startoranoUserComponentTypeSmallButton filledDisabledGray" type="button" value="Anschreiben">
                        </div>
                    </div>
                </a>
               
                <!-- Job Element END -->
            <?php } ?>
        </div>
        <div class="startoranoProfileTabWrapperTabs" >
            <?php foreach ($this->doneProjects as $Projects) { ?>
                <!-- Job-Element START -->
                <div class="startoranoUserComponentsContainer startoranoUserComponentTypeJobElement clickable">
                    <div class="startoranoUserComponentTypeJobElementRow1">
                        <div class="startoranoUserComponentTypeJobElementRow1ProfilePicture">
                            <img src="<?php echo Config::get('URL'); ?>/images/profilePic.png" alt="ProfilePicture">
                        </div>
                        <div class="startoranoUserComponentTypeJobElementRow1ProfileInfo">
                            <div class="startoranoUserComponentTypeJobElementRow1ProfileInfoRow1">
                                <p><?= $Projects->Firmenname; ?></p>
                            </div>
                            <div class="startoranoUserComponentTypeJobElementRow1ProfileInfoRow2">
                                <small><?= $Projects->Art; ?></small> 
                            </div>
                        </div>
                        <div class="startoranoUserComponentTypeJobElementRow1Bookmark">
                            <img src="<?php echo Config::get('URL'); ?>/images/svg/bookmarkOff.svg" alt="bookmarkIcon">
                        </div>
                    </div>
                    <div class="startoranoUserComponentTypeJobElementRow2">
                        <div class="startoranoUserComponentTypeJobElementRow2JobInfo">
                            <div class="startoranoUserComponentTypeJobElementRow2JobInfoRow1">
                                <p><?= $Projects->Titel; ?></p>
                            </div>
                            <div class="startoranoUserComponentTypeJobElementRow2JobInfoRow2 biglimited">
                                <p><?= $Projects->Beschreibung; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="startoranoUserComponentTypeJobElementRow3">
                        <div class="startoranoUserComponentTypeJobElementRow3PostTime">
                            <small><?= $Projects->Zeitstempel; ?></small>
                        </div>
                        <div class="startoranoUserComponentTypeJobElementRow3SmallButton">
                            <?php
                            if($Projects->Status==1){?>
                                <!-- <input class="startoranoUserComponentsContainer startoranoUserComponentTypeSmallButton filledRed" type="button" value="Anschreiben"> -->
                                <img src="<?php echo Config::get('URL'); ?>/images/svg/in-progress.svg" alt="progress">
                            <?php }
                            else { ?>
                                <img src="<?php echo Config::get('URL'); ?>/images/svg/done.svg" alt="done">
                            <?php } ?> 
                        </div>
                    </div>
                </div>
                <!-- Job Element END -->
            <?php } ?>
        </div>
    </div>
</div>


<!-- Footer Datei einbinden -->
<?php include("../application/view/_templates/footer_standard.php"); ?>