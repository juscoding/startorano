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

    <!-- Alle Chats anzeigen -->
    <?php
    foreach ($this->SendChats as $s_chat) { ?>
     <?php if ($s_chat->SenderID == Session::get('user_id')) { ?>
      <a class="startoranoUserComponentMessageInfo" href="<?php echo Config::get('URL'); ?>openChat/chats/<?= $s_chat->EmpfängerID; ?>">
     <?php } else{?>
      <a class="startoranoUserComponentMessageInfo" href="<?php echo Config::get('URL'); ?>openChat/chats/<?= $s_chat->SenderID; ?>">
      <?php } ?>
        <div class="startoranoUserComponentMessageInfo">
          <div class="startoranoUserComponentMessageInfoRow1">
            <img src="<?php if (empty($r_chat->BildID)) {
                        echo Config::get('URL');
                      } ?>images/svg/accountNoPicture.svg" alt="ProfilePicture">
          </div>
          <div class="startoranoUserComponentMessageInfoRow2">
            <?php if ($s_chat->Status == 0) { ?>
              <div class="startoranoUserComponentMessageInfoUnreadUser">
                <p><?= $s_chat->chatpartner; ?></p>
              </div>
            <?php } else { ?>
              <div class="startoranoUserComponentMessageInfoUser">
                <p><?= $s_chat->chatpartner; ?></p>
              </div>
            <?php } ?>
            <div class="startoranoUserComponentMessageInfoPreviewReplied">
              <?php if ($s_chat->SenderID == Session::get('user_id')) { ?>
                <div class="startoranoUserComponentMessageInfoPreviewRepliedImage">
                  <img src="<?php echo Config::get('URL'); ?>images/svg/replied-Message.svg" alt="reply">
                </div>
                <div class="startoranoUserComponentMessageInfoUnreadPreviewUnreadText limited">
                  <p><?= $s_chat->Text; ?></p>
                </div>

              <?php } else { ?>
                <div class="startoranoUserComponentMessageInfoUnreadPreviewUnreadText limited">
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

</div>

<!-- Footer Datei einbinden -->
<?php include("../application/view/_templates/footer_standard.php"); ?>