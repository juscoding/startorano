<?php

class OpenChatModel
{

    public static function getChatDetail($id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "Call getChatDetails(:sender_id, :loggedInUser)";
        $query = $database->prepare($sql);
        $query->execute(array(':sender_id' => $id, ':loggedInUser' => Session::get('user_id')));

        return $query->fetchAll();
    }

    public static function getUserName($id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "Call getUserInformation(:sender_id)";
        $query = $database->prepare($sql);
        $query->execute(array(':sender_id' => $id));

        return $query->fetchAll();
    }

    public static function sendChat($senderid, $recipient, $status, $text)
    {

        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "Call insertChatData(:sender_id, :recipient_id, :status, :text)";
        $query = $database->prepare($sql);
        $query->execute(array(
            ':sender_id' => $senderid,
            ':recipient_id' => $recipient,
            ':status' => $status,
            ':text' => $text
        ));
    }
}
