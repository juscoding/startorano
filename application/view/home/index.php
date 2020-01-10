 <!-- Header Datei einbinden -->
 <?php include("../application/view/_templates/header_standard.php"); ?>

 <?php foreach ($this->allProjects as $Projects) { ?>
     <!-- Job-Element START -->
     <div class="startoranoUserComponentsContainer startoranoUserComponentTypeJobElement">
         <div class="startoranoUserComponentTypeJobElementRow1">
             <div class="startoranoUserComponentTypeJobElementRow1ProfilePicture">
                 <img src="/profilePic.png" alt="ProfilePicture">
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
                 <img src="/bookmarkOff.svg" alt="bookmarkIcon">
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
             <div class="startoranoUserComponentTypeJobElementRow3SmallButton">
                 <input class="startoranoUserComponentsContainer startoranoUserComponentTypeSmallButton filledRed" type="button" value="Anschreiben">
             </div>
         </div>
     </div>
     <!-- Job Element END -->
 <?php } ?>
 <!-- Footer Datei einbinden -->
 <?php include("../application/view/_templates/footer_standard.php"); ?>