<?php include("../application/view/_templates/header_standard.php"); ?>

<div class="wrapper">

    <div class="startoranoChatBubbleWrapper">

        <!-- Chatpartner Namensanzeige-->
        <div class="startoranoChatUsernameContainer startoranoMessageComponentTypeBigField">
            <p><?php print_r($this->sendername[0]->user_name); //echo $this->sender_id; 
                ?></p>
        </div>
        <?php foreach ($this->chat as $chat) { ?>
            <?php if ($chat->SenderID !== $this->user_id) { ?>
                <!-- weißes Bubble mit schwarzer Schrift -->
                <div class="startoranoChatBubbleWrapperOther">
                    <div class="startoranoUserComponentChatBubbleRow1">
                        <div class="startoranoUserComponentChatBubbleRow1ProfilePicture">
                            <img src="<?php if (empty($chat->BildID)) {
                                            echo Config::get('URL');
                                        } ?>images/svg/accountNoPicture.svg" alt="ProfilePicture">
                        </div>
                        <div class="startoranoChatBubbleWrapperOtherMessageInfo">
                            <div class="startoranoUserComponentsContainerChat startoranoChatBubble filledBlack">
                                <p><?= $chat->Text; ?></p>
                            </div>
                            <div class="startoranoChatBubbleWrapperOtherDate">
                                <small><?= $chat->Zeitstempel; ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="startoranoChatBubbleWrapperMe">
                    <div class="startoranoUserComponentsContainerChat startoranoChatBubble filledRed">
                        <p><?= $chat->Text; ?></p>
                    </div>
                    <div class="startoranoChatBubbleWrapperMeDate">
                        <small><?= $chat->Zeitstempel; ?></small>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
    <!--Nachricht Eingabefeld-->
    <form action="<?php echo Config::get('URL'); ?>openChat/nachricht" method="post">
        <input type="hidden" name="message_status" value="0">
        <input type="hidden" name="message_sender" value="<?= $this->sender_id ?>">
        <div class="startoranoChatNewMessageWrapper">
            <div class="startoranoUserComponentsContainer startoranoNewMessageContainer startoranoUserComponentTypeText">
                <input type="text" name="message_text" placeholder="deine Nachricht...">
            </div>
            <div class="startoranoChatNewMessageArrow">
                <input type="image" src="<?php echo Config::get('URL'); ?>images/svg/sendButton.svg" alt="Speichern">
            </div>
        </div>
    </form>
</div>
</div>

<!-- Footer Datei einbinden -->
<?php include("../application/view/_templates/footer_standard.php"); ?>