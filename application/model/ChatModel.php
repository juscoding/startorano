
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

    

    public static function getAllSearchEntries($searchinput){    
        $database = DatabaseFactory::getFactory()->getConnection();
        
        $sql = "CALL getAllChatEntries('$searchinput');";
        $query = $database->prepare($sql);
        $query->execute();

            foreach ($query->fetchAll() as $key ) {
                //echo "<div class='startoranoUserComponentTypeSearchListElement'>";
                echo "<p>" . $key->Text . "</p>";
                //echo "</div>";
            }
        
    }
    
}
