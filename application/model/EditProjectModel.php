
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


    $anzeigen_id = 4;
    $fp2 = fopen('data2.txt', 'w');
    fwrite($fp2, $status);
    fclose($fp2);

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

    $fp = fopen('data.txt', 'w');
    fwrite($fp, $anzeigen_id);
    fwrite($fp, Session::get('user_id'));
    fwrite($fp, $JobId);
    fwrite($fp, $Titel);
    fwrite($fp, $Beschreibung);
    fwrite($fp, $user_id_auftragnehmer);
    fwrite($fp, $status);
    fclose($fp);

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
    $anzeigen_id = 4;
    $database = DatabaseFactory::getFactory()->getConnection();

    $sql = "Call getProjectInfoToEdit(:user_id, :anzeigen_id)";
    $query = $database->prepare($sql);
    $query->execute(array(':user_id' => $user_id, ':anzeigen_id' => $anzeigen_id));

    return $query->fetchAll();
  }
}
