<?php

class AddController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        Auth::checkAuthentication();
    }

    public function index()
    {
        $this->View->render('add/index', array(
            'user_name' => Session::get('user_name'),
            'userinfo' => AddModel::getUserInfo(Session::get('user_id'))
        ));
    }

    public function getJobs()
    {
        AddModel::getJobs($_REQUEST["term"]);
    }

    public function createNewAnzeige()
    {
        AddModel::writeNewAnzeigeToDataBase(Request::post('anzeigen_auftraggeber'), Request::post('anzeigen_jobId'), Request::post('anzeigen_titel'), Request::post('anzeigen_beschreibung'));
        Redirect::to('user/index');
    }
}
