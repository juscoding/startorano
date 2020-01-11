<?php

/**
 * UserModel
 * Handles all the PUBLIC profile stuff. This is not for getting data of the logged in user, it's more for handling
 * data of all the other users. Useful for display profile information, creating user lists etc.
 */
class HomeModel
{
    public static function getAllProjectsInformation($user_id)
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "CALL getAnzeige(:user_id)";
        $query = $database->prepare($sql);

        // DEFAULT is the marker for "normal" accounts (that have a password etc.)
        // There are other types of accounts that don't have passwords etc. (FACEBOOK)
        $query->execute(array(':user_id' => $user_id));

        // return one row (we only have one result or nothing)
        return $query->fetchAll();
    }

}