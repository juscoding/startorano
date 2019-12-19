<?php include("../application/view/_templates/header_chat.php");?>

<!-- <div class="container"> -->
    <div class="startoranoMessengerStartWrapper">
        <div class="startoranoMessengerStartTitle">
            <p>Nachrichten</p>
        </div>
        <div class="startoranoMessengerStartButton">
            <!-- <input class="startoranoUserComponentsContainer startoranoUserComponentTypeSmallButton filledRed" type="button" value="neue Nachricht"> -->
            <a href="<?php echo Config::get('URL'); ?>NewChat/index" class="startoranoUserComponentsContainer startoranoUserComponentTypeSmallButton filledRed">neue Nachricht</a>
          </div>
        
    </div>
    <div class="wrapper">            
    <!-- <div class="box"> -->

        <!-- echo out the system feedback (error and success messages) -->
        <?php $this->renderFeedbackMessages(); ?>
        <div class="startoranoChatComponentWrapper">

<!-- bereits gelesener Chat -->
<div class="startoranoUserComponentMessageInfo">
  <div class="startoranoUserComponentMessageInfoRow1">
    <img src="/profilePic2.png" alt="ProfilePicture">
  </div>
  <div class="startoranoUserComponentMessageInfoRow2">
    <div class="startoranoUserComponentMessageInfoUser">
      <p>droaup e. U.</p>
    </div>
    <div class="startoranoUserComponentMessageInfoPreview">
      <p>Hallo, deine Anzeige hat mich neugierig gemacht, deshalb w....</p>
    </div>
    <div class="startoranoUserComponentMessageInfoTime">
      <p>vor 2 Stunden</p>
    </div>
  </div>
</div>

<!-- ungelesener Chat -->
<div class="startoranoUserComponentMessageInfo">
  <div class="startoranoUserComponentMessageInfoRow1">
    <img src="/profilePic2.png" alt="ProfilePicture">
  </div>
  <div class="startoranoUserComponentMessageInfoRow2">
    <div class="startoranoUserComponentMessageInfoUnreadUser">
      <p>droaup e. U.</p>
    </div>
    <div class="startoranoUserComponentMessageInfoUnreadPreviewUnread">
      <div class="startoranoUserComponentMessageInfoUnreadPreviewUnreadText">
        <p>Hallo, deine Anzeige hat mich neugierig gemacht, deshalb w....</p>
      </div>
      <div class="startoranoUserComponentMessageInfoUnreadPreviewUnreadImage">
        <img src="/dot-unreadMessage.svg" alt="dot">
      </div>
    </div>
    <div class="startoranoUserComponentMessageInfoTime">
      <p>vor 2 Stunden</p>
    </div>
  </div>
</div>

<!-- geantwortet auf Chat -->
<div class="startoranoUserComponentMessageInfo">
  <div class="startoranoUserComponentMessageInfoRow1">
    <img src="/profilePic2.png" alt="ProfilePicture">
  </div>
  <div class="startoranoUserComponentMessageInfoRow2Send">
    <div class="startoranoUserComponentMessageInfoUser">
      <p>droaup e. U.</p>
    </div>
    <div class="startoranoUserComponentMessageInfoPreviewReplied">
      <div class="startoranoUserComponentMessageInfoPreviewRepliedImage">
        <img src="/replied-Message.svg" alt="reply">
      </div>
      <div class="startoranoUserComponentMessageInfoPreviewRepliedText">
        <p>Hallo, deine Anzeige hat mich neugierig gemacht, deshalb w....</p>
      </div>
    </div>
    <div class="startoranoUserComponentMessageInfoTime">
      <p>vor 2 Stunden</p>
    </div>
  </div>
</div>
</div>
        
    <!-- </div> -->
<!-- </div> -->
</div>
