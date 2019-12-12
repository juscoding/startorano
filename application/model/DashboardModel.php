<?php

/**
 * NoteModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class DashboardModel
{
    public static function getAllJobs()
    {
        $database = DatabaseFactory::getFactory()->getConnection();

        $sql = "CALL getJobs();";
        $query = $database->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }
}



// public static function getPublicProfilesOfAllUsers()
//     {
//         $database = DatabaseFactory::getFactory()->getConnection();

//         $sql = "SELECT users.user_id, account_type.user_account_type, users.user_name, users.user_firstname, users.user_lastname, users.user_email, users.user_active, users.user_has_avatar, users.user_deleted, COUNT(CASE WHEN chat.msgRead = 0 THEN 1 END) AS msgread FROM users INNER JOIN account_type ON users.user_account_type = account_type.id LEFT JOIN chat ON users.user_id = chat.fromUserId GROUP BY chat.fromUserId ORDER BY `users`.`user_id` ASC";
//         $query = $database->prepare($sql);
//         $query->execute();

//         $all_users_profiles = array();

//         foreach ($query->fetchAll() as $user) {

//             // all elements of array passed to Filter::XSSFilter for XSS sanitation, have a look into
//             // application/core/Filter.php for more info on how to use. Removes (possibly bad) JavaScript etc from
//             // the user's values
//             array_walk_recursive($user, 'Filter::XSSFilter');

//             $all_users_profiles[$user->user_id] = new stdClass();
//             $all_users_profiles[$user->user_id]->user_id = $user->user_id;
//             $all_users_profiles[$user->user_id]->user_account_type = $user->user_account_type;
//             $all_users_profiles[$user->user_id]->user_name = $user->user_name;
//             $all_users_profiles[$user->user_id]->user_firstname = $user->user_firstname;
//             $all_users_profiles[$user->user_id]->user_lastname = $user->user_lastname;
//             $all_users_profiles[$user->user_id]->user_email = $user->user_email;
//             $all_users_profiles[$user->user_id]->user_active = $user->user_active;
//             $all_users_profiles[$user->user_id]->user_deleted = $user->user_deleted;
//             $all_users_profiles[$user->user_id]->user_avatar_link = (Config::get('USE_GRAVATAR') ? AvatarModel::getGravatarLinkByEmail($user->user_email) : AvatarModel::getPublicAvatarFilePathOfUser($user->user_has_avatar, $user->user_id));
//             $all_users_profiles[$user->user_id]->msgread = $user->msgread;
//         }

//         return $all_users_profiles;
//     }
