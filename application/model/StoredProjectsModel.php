<?php

class StoredProjectsModel
{

  public static function getStoredProjects($user_id)
  {
      $database = DatabaseFactory::getFactory()->getConnection();

      $sql = "Call 	getStoredProject(:user_id)";
      $query = $database->prepare($sql);
      $query->execute(array(':user_id' => $user_id));

      return $query->fetchAll();
  }
}