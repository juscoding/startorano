<?php

/**
 * UserController
 * Controls everything that is user-related
 */
class HomeController extends Controller
{
    /**
     * Construct this object by extending the basic Controller class.
     */
    public function __construct()
    {
        parent::__construct();

        // VERY IMPORTANT: All controllers/areas that should only be usable by logged-in users
        // need this line! Otherwise not-logged in users could do actions.
        Auth::checkAuthentication();
    }

    /**
     * Show user's PRIVATE profile
     * 'allProjects' => HomeModel::getAllProjectsInformationAuftraggeber(HomeModel::getAllProjectsInformation(Session::get('user_id'))),
     */
    public function index()
    {
        $this->View->render('home/index', array(
            'allProjects' => HomeModel::getAllProjectsInformation(Session::get('user_id'))
        ));
    }


    public function nachricht($recipient)
    {
        $this->View->render('NewChat/index', array(
            'user_name' => Session::get('user_name'),
            'test' => NewChatModel::getUserNameRecipient($recipient)
        ));
    }
}
