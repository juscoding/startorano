<?php

/**
 * UserController
 * Controls everything that is user-related
 */
class OpenChatController extends Controller
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
     */
    public function index()
    {
        $this->View->render('chat/openChat');
    }


    public function chats($senderid)
    {

        $this->View->render('chat/openChat', array(
            'user_name' => Session::get('user_name'),
            'user_id' => Session::get('user_id'),
            'sender_id' => $senderid,
            'sendername' => OpenChatModel::getUserName($senderid),
            'chat' => OpenChatModel::getChatDetail($senderid),
        ));
    }

    public function nachricht()
    {
        OpenChatModel::sendChat(Session::get('user_id'), Request::post('message_sender'), Request::post('message_status'), Request::post('message_text'));

        $this->View->render('chat/openChat', array(
            'user_name' => Session::get('user_name'),
            'user_id' => Session::get('user_id'),
            'sender_id' => Request::post('message_sender'),
            'sendername' => OpenChatModel::getUserName(Request::post('message_sender')),
            'chat' => OpenChatModel::getChatDetail(Request::post('message_sender')),
        ));
    }
}
