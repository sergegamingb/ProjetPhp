<?php

include 'model_base.php';
include 'model_user.php';


class Admin extends User
{




    public function deleteMessage($message_id)
    {
        $db = $GLOBALS['db'];
        $query = ('DELETE FROM MESSAGE WHERE MESSAGE.message_id = \''.$message_id.'\'');
        $db->query($query);

    }

    public function deleteDiscussion($disc_id)
    {
        $db = $GLOBALS['db'];
        $re2 = ('DELETE FROM DISCUSSION WHERE DISCUSSION.disc_id = \''.$disc_id.'\'');
        mysqli_query($re2);
        $db->query($re2);
    }

    public function deleteUser($user_id)
    {
        $db = $GLOBALS['db'];
        $re3 = ('DELETE FROM USER WHERE USER.user_id= \''.$user_id.'\'');
        mysqli_query($re3);
        $db->query($re3);
    }


    public function updateMessage($message_id, $content)
    {
        $db = $GLOBALS['db'];
        $re4 = ('UPDATE MESSAGE SET MESSAGE.content = \''.$content.'\' WHERE MESSAGE.message_id = \''.$message_id.'\'');
        mysqli_query($re4);
        $db->query($re4);
    }

    public function updateDiscussion($discussion_id, $state)
    {
        $db = $GLOBALS['db'];
        $re4 = ('UPDATE DISCUSSION SET DISCUSSION.state = \''.$state.'\' WHERE DISCUSSION.disc_id= \''.$discussion_id.'\'');
        mysqli_query($re4);
        $db->query($re4);
    }

//abpublic function updateUser($user_id)
//{
//
//}

    public function createMessage($message_id, $content, $user_id)
    {
        $db = $GLOBALS['db'];
        $re5 = "INSERT INTO MESSAGE (message_id, content, message_date, user_id) VALUES ($message_id, $content, NOW(), $user_id)";
        mysqli_query($re5);
        $db->query($re5);
    }

    public function createDiscussion($disc_id, $user_id, $message_id, $state)
    {
        $db = $GLOBALS['db'];
        $re6 = "INSERT INTO MESSAGE (disc_id, user_id, message_id, state) VALUES ($disc_id, $user_id, $message_id, $state)";
        mysqli_query($re6);
        $db->query($re6);
    }

    public function readMessage($message_id, $content)
    {
        $db = $GLOBALS['db'];
        $re7 = ('SELECT content FROM MESSAGE WHERE MESSAGE.message_id = \''.$message_id.'\'');
        mysqli_query($re7);
        $db->query($re7);
    }

    public function readDiscussion($disc_id)
    {
        $db = $GLOBALS['db'];
        $re8 = ('SELECT * FROM MESSAGE WHERE DISCUSSION.disc_id = \''.$disc_id.'\'');
        mysqli_query($re8);
        $db->query($re8);
    }

}
?>