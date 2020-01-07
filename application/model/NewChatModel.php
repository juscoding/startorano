<?php

class NewChatModel
{

    public static function sendNewMessage($fromUserId, $toUserId, $msgStatus, $msgContent)
    {
        
        $database = DatabaseFactory::getFactory()->getConnection();
        
        // Username mit der UserID ersetzen, da die ID zur späteren Abfrage gebraucht wird.
        $sql = "CALL getUserID('$toUserId');";
        $query = $database->prepare($sql);
        $query->execute();

        foreach ($query->fetchAll() as $key ) {
            $toUserId = $key->user_id;
        }
        
        
        // Einfügen der Nachricht in die Datenbank
        $sql = "CALL insertChatData('$fromUserId', '$toUserId', '$msgStatus', '$msgContent');";
        $query = $database->prepare($sql);

        $query->execute();
    } 

    public static function getUserName($searchUsername){    
        $database = DatabaseFactory::getFactory()->getConnection();
        
        $sql = "CALL getUser('$searchUsername');";
        $query = $database->prepare($sql);
        $query->execute();

        foreach ($query->fetchAll() as $key ) {
            echo "<div class='startoranoUserComponentTypeSearchListElement'>";
            echo "<p>" . $key->user_name . "</p>";
            echo "</div>";
        }
    }

    public static function getUserID($username){    
        $database = DatabaseFactory::getFactory()->getConnection();
        
        $sql = "CALL getUserID('$username');";
        $query = $database->prepare($sql);
        $query->execute();

        foreach ($query->fetchAll() as $key ) {
            $username = $key->user_id;
        }
    }
  
}