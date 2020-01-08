  <!-- Header mit Profile START -->

  <div class="startoranoComponentHeaderProfile">
    <div class="startoranoComponentHeaderProfieLogo">
      <p>startorano</p>
    </div>
    <div class="startoranoComponentHeaderProfileInfo">
      <div class="startoranoComponentHeaderProfileInfoImage">
        <img src="<?php echo Config::get('URL'); ?>/images/profilePic2.png" alt="profilePic">
      </div>
      <div class="startoranoComponentHeaderProfileInfoText">
        <div class="startoranoComponentHeaderProfileInfoTextCompanyName">
          <p><?= $this->user_name; ?></p>
        </div>
        <div class="startoranoComponentHeaderProfileInfoTextCompanyType">
          <p>Programmer</p>
        </div>
        <div class="startoranoComponentHeaderProfileInfoTextCompanySlogan">
          <p><?= $this->userInfo[0]->Slogan; ?></p>
        </div>
        <div class="startoranoComponentHeaderProfileInfoTextCompanyExperience">
          <div class="startoranoComponentHeaderProfileInfoTextCompanyExperienceRow1">
            <p>Neuling</p>
            <p>Fortgeschritten</p>
          </div>
          <div class="startoranoComponentHeaderProfileInfoTextCompanyExperienceRow2">
            <div class="startoranoComponentHeaderProfileInfoTextCompanyExperienceRow2Progressbar1"></div>
            <div class="startoranoComponentHeaderProfileInfoTextCompanyExperienceRow2Progressbar2"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="startoranoComponentHeaderProfileTabs">
      <div class="startoranoComponentHeaderProfileTabsPointsText">
        <div class="startoranoComponentHeaderProfileTabsPoints">
          <p>Details</p>
        </div>
        <div class="startoranoComponentHeaderProfileTabsPoints">
          <p>Anzeigen</p>
        </div>
        <div class="startoranoComponentHeaderProfileTabsPoints">
          <p>Projekte</p>
        </div>
      </div>
      <div class="startoranoComponentHeaderProfileTabsPointsUnderline">
        <div></div>
      </div>
    </div>
  </div>
  
  <!-- Header mit Profile END -->