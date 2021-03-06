<?php

class EditProjectController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class
     */
    public function __construct()
    {
        parent::__construct();

        // special authentication check for the entire controller: Note the check-ADMIN-authentication!
        // All methods inside this controller are only accessible for admins (= users that have role type 7)
        Auth::checkAuthentication();
    }

    public function index()
    {
        // $this->View->render('EditProject/index', array(
        //     'user_name' => Session::get('user_name'))
        // );
        $this->View->render('EditProject/index',array(
            'user_nmae' => Session::get('user_name')
        ));

    }

    public function getJobs()
    {
        AddModel::getJobs($_REQUEST["term"]);
    }

    public function createNewAnzeige()
    {
        $this->View->render('EditProject/index',array(
            'editProject' => EditProjectModel::updateProject(Request::post('anzeigen_auftraggeber'), Request::post('anzeigen_jobId'), Request::post('anzeigen_titel'), Request::post('anzeigen_beschreibung'), Request::post('message_recipient'), Request::post('anzeigen_status'), Request::post('anzeigen_id'))
        ));
    }

}
