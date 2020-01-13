 <!-- Header Datei einbinden -->
 <?php include("../application/view/_templates/header_standard.php"); ?>
 <div class="wrapper">
     <?php foreach ($this->allProjects as $Projects) { ?>
         <!-- Job-Element START -->
         <div class="startoranoUserComponentsContainer startoranoUserComponentTypeJobElement">
             <div class="startoranoUserComponentTypeJobElementRow1">
                 <div class="startoranoUserComponentTypeJobElementRow1ProfilePicture">
                     <img src="<?php echo Config::get('URL'); ?>images/profilePic.png" alt="ProfilePicture">
                 </div>
                 <div class="startoranoUserComponentTypeJobElementRow1ProfileInfo">
                     <div class="startoranoUserComponentTypeJobElementRow1ProfileInfoRow1">
                         <p><?= $Projects->Firmenname; ?></p>
                     </div>
                     <div class="startoranoUserComponentTypeJobElementRow1ProfileInfoRow2">
                         <small><?= $Projects->Art; ?></small>
                     </div>
                 </div>
                 <div class="startoranoUserComponentTypeJobElementRow1Bookmark <?= is_null($Projects->isStored) ? "" : "bookmarkChecked"; ?>">
                     <img key="<?= $Projects->AnzeigeID; ?>" src="<?php echo Config::get('URL'); ?>images/svg/<?= is_null($Projects->isStored) ? "bookmarkOff" : "bookmarkOn"; ?>.svg" alt="bookmarkIcon">
                 </div>
             </div>
             <div class="startoranoUserComponentTypeJobElementRow2">
                 <div class="startoranoUserComponentTypeJobElementRow2JobInfo">
                     <div class="startoranoUserComponentTypeJobElementRow2JobInfoRow1">
                         <p><?= $Projects->Titel; ?></p>
                     </div>
                     <div class="startoranoUserComponentTypeJobElementRow2JobInfoRow2">
                         <p><?= $Projects->Beschreibung; ?></p>
                     </div>
                 </div>
             </div>

             <div class="startoranoUserComponentTypeJobElementRow3">
                 <div class="startoranoUserComponentTypeJobElementRow3PostTime">
                     <small><?= $Projects->Zeitstempel; ?></small>
                 </div>
                 <!-- Aufruf der EditProject index.php  -->
                 <a name="nachricht" href="<?php echo Config::get('URL'); ?>home/nachricht/<?= $Projects->AuftraggeberID; ?>">
                     <div class="startoranoUserComponentTypeJobElementRow3SmallButton">
                         <input class="startoranoUserComponentsContainer startoranoUserComponentTypeSmallButton filledRed" type="button" value="Anschreiben">
                     </div>
                 </a>
             </div>
         </div>
         <!-- Job Element END -->
     <?php } ?>
 </div>
 <!-- Footer Datei einbinden -->
 <?php include("../application/view/_templates/footer_standard.php"); ?>