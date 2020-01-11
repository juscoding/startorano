<!-- Header mit Seitenname START -->

<div class="startoranoComponentHeaderSiteName">
  <p>gespeicherte Anzeigen</p>
</div>

<!-- Header mit Seitenname END -->
<div class="wrapper">
  <?php foreach ($this->storedProjects as $Projects) { ?>
    <!-- Aufruf der EditProject index.php  -->

    <!-- Job-Element START -->
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeJobElement">
      <div class="startoranoUserComponentTypeJobElementRow1">
        <div class="startoranoUserComponentTypeJobElementRow1ProfilePicture">
          <img src="<?php echo Config::get('URL'); ?>images/profilePic.png" alt="ProfilePicture">
        </div>
        <div class="startoranoUserComponentTypeJobElementRow1ProfileInfo">
          <div class="startoranoUserComponentTypeJobElementRow1ProfileInfoRow1">
            <p><?= $Projects->AuftraggeberFirma; ?></p>
          </div>
          <div class="startoranoUserComponentTypeJobElementRow1ProfileInfoRow2">
            <small><?= $Projects->AuftraggeberFirmaArt; ?></small>
          </div>
        </div>
        <div class="startoranoUserComponentTypeJobElementRow1Bookmark bookmarkChecked">
          <img key="<?= $Projects->AnzeigenID; ?>" src="<?php echo Config::get('URL'); ?>images/svg/bookmarkOn.svg" alt="bookmarkIcon">
        </div>
      </div>
      <div class="startoranoUserComponentTypeJobElementRow2">
        <div class="startoranoUserComponentTypeJobElementRow2JobInfo">
          <div class="startoranoUserComponentTypeJobElementRow2JobInfoRow1">
            <p><?= $Projects->AnzeigenTitel; ?></p>
          </div>
          <div class="startoranoUserComponentTypeJobElementRow2JobInfoRow2">
            <p><?= $Projects->AnzeigenBeschreibung; ?></p>
          </div>
        </div>
      </div>

      <div class="startoranoUserComponentTypeJobElementRow3">
        <div class="startoranoUserComponentTypeJobElementRow3PostTime">
          <small><?= $Projects->AnzeigenZeitstempel; ?></small>
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
  <div style="height: 60px"></div>
</div>

<!-- Footer Datei einbinden -->
<?php include("../application/view/_templates/footer_standard.php"); ?>