<?php

include 'model_base.php';
include 'model_user.php';

class Admin extends User
{

    public function __construct()
    {

    }

    public function deleteMessage($message_id)
    {
        $re = ('DELETE FROM MESSAGE WHERE MESSAGE.message_id = $message_id');
        mysqli_query($re);

    }

    public function deleteDiscussion($disc_id)
    {
        $re2 = ('DELETE FROM DISCUSSION WHERE DISCUSSION.disc_id = $disc_id');
        mysqli_query($re2);
    }

    public function deleteUser($user_id)
    {
        $re3 = ('DELETE FROM USER WHERE USER.user_id=$user_id');
        mysqli_query($re3);
    }


    public function updateMessage($message_id, $user_id)
    {
        $re4 = ('UPDATE MESSAGE SET MESSAGE.content = $content WHERE MESSAGE.message_id = $message_id');
        mysqli_query($re4);
    }

    public function updateDiscussion($discussion_id, $state)
    {
        $re4 = ('UPDATE DISCUSSION SET DISCUSSION.state = $state WHERE DISCUSSION.disc_id= $disc_id');
        mysqli_query($re4);
    }

//apublic function updateUser($user_id)
//{
//
//}

    public function createMessage($message_id, $content, $user_id)
    {
        $re5 = "INSERT INTO MESSAGE (message_id, content, message_date, user_id) VALUES ($message_id, $content, NOW(), $user_id)";
        mysqli_query($re5);
    }

    public function createDiscussion($disc_id, $user_id, $message_id, $state)
    {
        $re6 = "INSERT INTO MESSAGE (disc_id, user_id, message_id, state) VALUES ($disc_id, $user_id, $message_id, $state)";
        mysqli_query($re6);
    }

    public function readMessage($message_id, $content)
    {
        $re7 = ('SELECT content FROM MESSAGE WHERE MESSAGE.message_id = $message_id');
        mysqli_query(re7);
    }

    public function readDiscussion($disc_id)
    {
        $re8 = ('SELECT * FROM MESSAGE WHERE DISCUSSION.disc_id = $disc_id');
        mysqli_query(re8);
    }

}
?>