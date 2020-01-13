<?php

/**
 * NoteModel
 * This is basically a simple CRUD (Create/Read/Update/Delete) demonstration.
 */
class AddModel
{
    public static function getJobs($searchType){    
    $database = DatabaseFactory::getFactory()->getConnection();

    $sql = "CALL getJob('$searchType');";
    $query = $database->prepare($sql);
    $query->execute();

    foreach ($query->fetchAll() as $key ) {
      echo "<div class='startoranoUserComponentTypeSearchListElement'>";
      echo "<p key=" . $key->UnternehmenID . ">" . $key->Art . "</p>";
      echo "</div>";
    }
  }

  public static function writeNewAnzeigeToDataBase($AuftraggeberId, $JobId, $Titel, $Beschreibung)
  {
      $database = DatabaseFactory::getFactory()->getConnection();

      $sql = "CALL insertNewProject(:AuftraggeberId, :JobId, :Title, :Beschreibung);";
      $query = $database->prepare($sql);
      $query->execute(array(
        ':AuftraggeberId' => Session::get('user_id'), 
        ':JobId' => $JobId, 
        ':Title' => $Titel, 
        ':Beschreibung' => $Beschreibung));
  }

  public static function getUserInfo($id){
    $database = DatabaseFactory::getFactory()->getConnection();

      $sql = "CALL getUserInformation(:userid);";
      $query = $database->prepare($sql);
      $query->execute(array(':userid' => $id));

      return $query->fetchAll();
  }

}
