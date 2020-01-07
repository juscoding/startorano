<?php

class NewChatController extends Controller
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

    /**
     * This method controls what happens when you move to /admin or /admin/index in your app.
     */
    public function index()
    {
        $this->View->render('NewChat/index');
    }

    /**
     * NewChat page action
     * POST-request after form submit
     */
    public function sendNewMsg()
    {
        NewChatModel::sendNewMessage(
            Request::post('message_sender'), 
            Request::post('message_recipient'), 
            Request::post('message_status'), 
            Request::post('message_content')
        );
        Redirect::to("chat/index/" . Request::post('toUserId'));

        // if ($send_successful) {
        //     Redirect::to('user/index');
        // } else {
        //     Redirect::to('chat/index');
        // }
    }

    public function message_recipient(){
        
        NewChatModel::getUserName($_REQUEST["term"]);
    }

}
