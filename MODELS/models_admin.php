<?php

spl_autoload_register(function ($class_name) {
    include  '../MODELS/models_' . $class_name . '.php';
});

class Admin extends user
{

public function __construct()
{
}

    public function deleteMessage($message_id)
    {
        $query = ('DELETE FROM MESSAGE WHERE MESSAGE.message_id = \''.$message_id.'\'');
        $this->execquery($query);

    }

    public function deleteDiscussion($disc_id)
    {

        $query = ('DELETE FROM DISCUSSION WHERE DISCUSSION.disc_id = \''.$disc_id.'\'');
        $this->execquery($query);
    }

    public function deleteUser($user_id)
    {
        $query = ('DELETE FROM USER WHERE USER.user_id= \''.$user_id.'\'');
        $this->execquery($query);
    }


    public function updateMessage($message_id, $content)
    {
        $query = ('UPDATE MESSAGE SET MESSAGE.content = \''.$content.'\' WHERE MESSAGE.message_id = \''.$message_id.'\'');
        $this->execquery($query);
    }

    public function updateDiscussion($discussion_id, $state)
    {
        $query = ('UPDATE DISCUSSION SET DISCUSSION.state = \''.$state.'\' WHERE DISCUSSION.disc_id= \''.$discussion_id.'\'');
        $this->execquery($query);
    }



    public function createMessage($message_id, $content, $user_id)
    {

        $query = "INSERT INTO MESSAGE (message_id, content, message_date, user_id) VALUES ($message_id, $content, NOW(), $user_id)";
        $this->execquery($query);
    }

    public function createDiscussion($disc_id, $user_id, $message_id, $state)
    {

        $query = "INSERT INTO MESSAGE (disc_id, user_id, message_id, state) VALUES ($disc_id, $user_id, $message_id, $state)";
        $this->execquery($query);
    }

    public function readMessage($message_id, $content)
    {
        $query = ('SELECT content FROM MESSAGE WHERE MESSAGE.message_id = \''.$message_id.'\'');
        $this->execquery($query);
    }

    public function readDiscussion($disc_id)
    {

        $query = ('SELECT * FROM MESSAGE WHERE DISCUSSION.disc_id = \''.$disc_id.'\'');
        $this->execquery($query);
    }

}
?>