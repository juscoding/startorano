  <!-- Header mit Profile START -->

  <div class="startoranoComponentHeaderProfile">
    <div class="startoranoComponentHeaderProfieLogo">
      <p>startorano</p>
      <img src="<?php echo Config::get('URL'); ?>/images/svg/menuIcon.svg" alt="menuIcon">
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
          <p><?= $this->userInfo[0]->UnternehmensArt; ?></p>
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

  <div class="startoranoComponentHeaderProfileMenuWrapper">
    <div class="startoranoComponentHeaderProfileMenuCloseTrigger"></div>
    <div class="startoranoComponentHeaderProfileMenu">
      <img src="<?php echo Config::get('URL'); ?>/images/svg/closeIcon.svg" alt="closeIcon">
      <p class="startoranoComponentHeaderProfileMenuHeadline">menu</p>
      <div class="startoranoComponentHeaderProfileMenuItemWrapper">
        <ul>
          <li>
            <a href="<?php echo Config::get('URL'); ?>user/editusername">
              <img src="<?php echo Config::get('URL'); ?>/images/svg/profileIcon.svg" alt="profileIcon">
              <p>Username ändern</p>
            </a>
          </li>
          <li>
            <a href="<?php echo Config::get('URL'); ?>user/edituserEmail">
              <img src="<?php echo Config::get('URL'); ?>/images/svg/emailIcon.svg" alt="emailIcon">
              <p>E-Mail ändern</p>
            </a>
          </li>
          <li>
            <a href="<?php echo Config::get('URL'); ?>user/changePassword">
              <img src="<?php echo Config::get('URL'); ?>/images/svg/passwordIcon.svg" alt="passwordIcon">
              <p>Passwort ändern</p>
            </a>
          </li>
          <li>
            <a href="<?php echo Config::get('URL'); ?>storedProjects/index">
              <img src="<?php echo Config::get('URL'); ?>/images/svg/bookmarkOff.svg" alt="bookmarkIcon">
              <p>Gespeichert</p>
            </a>
          </li>
          <li>
            <a href="<?php echo Config::get('URL'); ?>login/logout">
              <img src="<?php echo Config::get('URL'); ?>/images/svg/logoutIcon.svg" alt="logoutIcon">
              <p>Abmelden</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <!-- Header mit Profile END -->