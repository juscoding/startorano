<?php

class ChatModel
{

    public static function getAllSendChats()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "CALL getAllSendChats(:user_id);";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id')));

        return $query->fetchAll();
    }

    public static function getAllReceivedChats()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "CALL getAllReceivedChats(:user_id);";
        $query = $database->prepare($sql);
        $query->execute(array(':user_id' => Session::get('user_id')));

        return $query->fetchAll();
    }

    
}
