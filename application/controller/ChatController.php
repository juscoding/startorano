<?php

class ChatController extends Controller
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
        $this->View->render(
            'chat/index',
            array(
                'SendChats' => ChatModel::getAllLatestMessages(Session::get('user_id'), ChatModel::getLatestMessage())
            )
        );
    }

    public function chat_search()
    {

        ChatModel::getAllSearchEntries($_REQUEST["term"]);
    }
}
