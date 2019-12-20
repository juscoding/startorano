<?php include("../application/view/_templates/header_chat.php"); ?>

<!-- <div class="container"> -->
<div class="startoranoMessengerStartWrapper">
  <div class="startoranoMessengerStartTitle">
    <p>Nachrichten</p>
  </div>
  <div class="startoranoMessengerStartButton">
    <input class="startoranoUserComponentsContainer startoranoUserComponentTypeSmallButton filledRed" type="button" value="neue Nachricht">
  </div>
</div>
<div class="wrapper">
  <!-- <div class="box"> -->

  <!-- echo out the system feedback (error and success messages) -->
  <?php $this->renderFeedbackMessages(); ?>
  <div class="startoranoChatComponentWrapper">

    <!-- Alle gesendeten Chats anzeigen -->
    <?php
    foreach ($this->SendChats as $s_chat) { ?>
      <div class="startoranoUserComponentMessageInfo">
        <div class="startoranoUserComponentMessageInfoRow1">
          <img src=<?= $s_chat->BildID; ?> alt="ProfilePicture">
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
              <div class="startoranoUserComponentMessageInfoPreviewRepliedText">
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
  </div>
<?php } ?>

<!-- Alle empfangenen Chats anzeigen -->
<?php
foreach ($this->ReceivedChats as $r_chat) { ?>
  <div class="startoranoUserComponentMessageInfo">
    <div class="startoranoUserComponentMessageInfoRow1">
      <img src=<?= $r_chat->BildID; ?> alt="ProfilePicture">
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
        <div class="startoranoUserComponentMessageInfoUnreadPreviewUnreadText">
          <p><?= $r_chat->Text; ?></p>
        </div>
      <?php } else { ?>
        <div class="startoranoUserComponentMessageInfoPreview">
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
  </div>
<?php } ?>

</div>

<!-- Footer Datei einbinden -->
<?php include("../application/view/_templates/footer_standard.php"); ?>

<script>

(function($){
    "use strict";
    
    function limitMessages(){
    		$(".limited").each(function(){
            var text = $(this).text();
            $(this).text(text.substr(0, 25) + "...");
        });
    }

    $(document).ready(function(){
        limitMessages();
    });
})(jQuery);
</script>