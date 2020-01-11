<?php

class StoredProjectsController extends Controller
{
    public function __construct()
    {
        parent::__construct();

        Auth::checkAuthentication();
    }

    public function index()
    {
        $this->View->render('storedProjects/index', array(
            'storedProjects' => StoredProjectsModel::getStoredProjects(Session::get('user_id')))
        );
    }
}
