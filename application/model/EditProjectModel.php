
<?php

class EditProjectModel
{
  public static function getJobs($searchType)
  {
    $database = DatabaseFactory::getFactory()->getConnection();

    $sql = "CALL getJob('$searchType');";
    $query = $database->prepare($sql);
    $query->execute();

    foreach ($query->fetchAll() as $key) {
      echo "<div class='startoranoUserComponentTypeSearchListElement'>";
      echo "<p key=" . $key->JobID . ">" . $key->Jobbezeichnung . "</p>";
      echo "</div>";
    }
  }

  public static function writeNewAnzeigeToDataBase($AuftraggeberId, $JobId, $Titel, $Beschreibung)
  {
    $database = DatabaseFactory::getFactory()->getConnection();

    $sql = "CALL insertNewProject(:AuftraggeberId, :JobId, :Title, :Beschreibung);";
    $query = $database->prepare($sql);
    $query->execute(array(':AuftraggeberId' => Session::get('user_id'), ':JobId' => $JobId, ':Title' => $Titel, ':Beschreibung' => $Beschreibung));
  }

  public static function updateProject($AuftraggeberId, $JobId, $Titel, $Beschreibung, $username, $status)
  {

    $database = DatabaseFactory::getFactory()->getConnection();

    if (empty($username)) {
      $status = 'offen';
    } else {
      $sql = "CALL getUserID('$username');";
      $query = $database->prepare($sql);
      $query->execute();
      foreach ($query->fetchAll() as $key) {
        $user_id_auftragnehmer = $key->user_id;
      }
    }


    //$anzeigen_id = Request::get();

    switch ($status) {
      case 'erledigt':
        $status = 2;
        break;
      case 'in Bearbeitung':
        $status = 1;
        break;
      case 'offen':
        $status = 0;
        break;
    }



    $sql = "CALL updateEditedProject(:AnzeigeId, :AuftraggeberId, :JobId, :Titel, :Beschreibung, :AuftragnehmerId, :Status);";
    $query = $database->prepare($sql);
    $query->execute(
      array(
        ':AnzeigeId' => $anzeigen_id,
        ':AuftraggeberId' => Session::get('user_id'),
        ':JobId' => $JobId,
        ':Titel' => $Titel,
        ':Beschreibung' => $Beschreibung,
        ':AuftragnehmerId' => $user_id_auftragnehmer,
        ':Status' => $status
      )
    );
  }


  public static function getProjectInfoToEdit($user_id, $anzeigen_id)
  {
    //$anzeigen_id = 21;
    $fp = fopen('data.txt', 'w');
    fwrite($fp, $anzeigen_id);
    fclose($fp);

    $database = DatabaseFactory::getFactory()->getConnection();

    $sql = "Call getProjectInfoToEdit(:user_id, :anzeigen_id)";
    $query = $database->prepare($sql);
    $query->execute(array(':user_id' => $user_id, ':anzeigen_id' => $anzeigen_id));

    return $query->fetchAll();
  }

  public static function getUserCompanyType($user_id)
  {
    $database = DatabaseFactory::getFactory()->getConnection();

    $sql = "Call getUserCompanyType(:user_id)";
    $query = $database->prepare($sql);
    $query->execute(array(':user_id' => $user_id));

    return $query->fetchAll();
  }
}
