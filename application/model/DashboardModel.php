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

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetchAll();
    }
}
