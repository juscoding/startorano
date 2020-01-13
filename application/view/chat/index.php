<?php include("../application/view/_templates/header_standard.php"); ?>





<div class="startoranoMessengerStartWrapper">
  <div class="startoranoMessengerStartTitle">
    <p>Nachrichten</p>
  </div>
  <div class="startoranoMessengerStartButton">
    <a href="<?php echo Config::get('URL'); ?>NewChat/index" class="startoranoUserComponentsContainer startoranoUserComponentTypeSmallButton filledRed">neue Nachricht</a>
  </div>
</div>
<div class="wrapper">

  <?php $this->renderFeedbackMessages(); ?>
  <div class="startoranoChatComponentWrapper">
    <div class="startoranoUserComponentsContainer startoranoUserComponentTypeSearch">
      <div class="startoranoUserComponentTypeSearchListElementMain">
        <input type="text" controller="chat" name="chat_search" placeholder="Suche..." autocomplete="off" required>
        <img src="<?php echo Config::get('URL'); ?>images/svg/searchIcon.svg" alt="searchIcon">
      </div>
      <div class="startoranoUserComponentTypeSearchListElementWrapper"></div>
    </div>

    <!-- Alle gesendeten Chats anzeigen -->
    <?php
    foreach ($this->SendChats as $s_chat) { ?>
      <a class="startoranoUserComponentMessageInfo" href="<?php echo Config::get('URL'); ?>openChat/chats/<?= $s_chat->EmpfängerID; ?>">
        <div class="startoranoUserComponentMessageInfo">
          <div class="startoranoUserComponentMessageInfoRow1">
            <img src="<?php if (empty($r_chat->BildID)) {
                        echo Config::get('URL');
                      } ?>images/svg/accountNoPicture.svg" alt="ProfilePicture">
          </div>
          <div class="startoranoUserComponentMessageInfoRow2">
            <?php if ($s_chat->Status == 0) { ?>
              <div class="startoranoUserComponentMessageInfoUnreadUser">
                <p><?= $s_chat->user_name; ?></p>
              </div>
            <?php } else { ?>
              <div class="startoranoUserComponentMessageInfoUser">
                <p><?= $s_chat->user_name; ?></p>
              </div>
            <?php } ?>
            <div class="startoranoUserComponentMessageInfoPreviewReplied">
              <?php if ($s_chat->Status == 0) { ?>
                <div class="startoranoUserComponentMessageInfoPreviewRepliedImage">
                  <img src="<?php echo Config::get('URL'); ?>images/svg/replied-Message.svg" alt="reply">
                </div>
                <div class="startoranoUserComponentMessageInfoUnreadPreviewUnreadText limited">
                  <p><?= $s_chat->Text; ?></p>
                </div>

              <?php } else { ?>
                <div class="startoranoUserComponentMessageInfoPreviewRepliedImage">
                  <img src="<?php echo Config::get('URL'); ?>images/svg/replied-Message.svg" alt="reply">
                </div>
                <div class="startoranoUserComponentMessageInfoPreviewRepliedText limited">
                  <p><?= $s_chat->Text; ?></p>
                </div>
              <?php } ?>
              <?php if ($s_chat->Status == 0) { ?>
                <div class="startoranoUserComponentMessageInfoUnreadPreviewUnreadImage">
                  <img src="<?php echo Config::get('URL'); ?>images/svg/dot-unreadMessage.svg" alt="dot">
                </div>
              <?php } ?>
            </div>
            <div class="startoranoUserComponentMessageInfoTime">
              <p><?= $s_chat->Zeitstempel; ?></p>
            </div>
          </div>

        </div>
      </a>
    <?php } ?>

    <!-- Alle empfangenen Chats anzeigen -->
    <?php
    foreach ($this->ReceivedChats as $r_chat) { ?>
      <a class="startoranoUserComponentMessageInfo" href="<?php echo Config::get('URL'); ?>openChat/chats/<?= $r_chat->SenderID; ?>">
        <div class="startoranoUserComponentMessageInfoRow1">
          <img src="<?php if (empty($r_chat->BildID)) {
                      echo Config::get('URL');
                    } ?>images/svg/accountNoPicture.svg" alt="ProfilePicture">
        </div>
        <div class="startoranoUserComponentMessageInfoRow2">
          <?php if ($r_chat->Status == 0) { ?>
            <div class="startoranoUserComponentMessageInfoUnreadUser">
              <p><?= $r_chat->user_name; ?></p>
            </div>
          <?php } else { ?>
            <div class="startoranoUserComponentMessageInfoUser">
              <p><?= $r_chat->user_name; ?></p>
            </div>
          <?php } ?>

          <?php if ($r_chat->Status == 0) { ?>
            <div class="startoranoUserComponentMessageInfoUnreadPreviewUnreadText limited">
              <p><?= $r_chat->Text; ?></p>
            </div>
          <?php } else { ?>
            <div class="startoranoUserComponentMessageInfoPreview limited">
              <p><?= $r_chat->Text; ?></p>
            </div>
          <?php } ?>
          <?php if ($s_chat->Status == 0) { ?>
            <div class="startoranoUserComponentMessageInfoUnreadPreviewUnreadImage">
              <img src="<?php echo Config::get('URL'); ?>images/svg/dot-unreadMessage.svg" alt="dot">
            </div>
          <?php } ?>
          <div class="startoranoUserComponentMessageInfoTime">
            <p><?= $r_chat->Zeitstempel; ?></p>
          </div>
        </div>

      </a>
    <?php } ?>
  </div>

</div>

<!-- Footer Datei einbinden -->
<?php include("../application/view/_templates/footer_standard.php"); ?>