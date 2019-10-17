<?php

function __autoload($base)
{
    include ( 'models_' . $base. '.php');
}

class Discussion
{
    private $disc_id;
    private $user_id;
    private $message_id;
    private $state;

    public function __construct()
    {
          $query=('SELECT * FROM DISCUSSION');
          $this->execrequete($query);
    }


    public function getDiscId($pseudo)
    {
        return $this->get('disc',$pseudo);
    }

    public function getUserId($pseudo)
    {
        return $this->get('user',$pseudo);
    }

    public function getMessageId($pseudo)
    {
        return $this->get('message',$pseudo);
    }

    public function getState($pseudo)
    {
        return $this->get('state',$pseudo);
    }

    /**
     * @param mixed $disc_id
     */
    public function setDiscId($disc_id)
    {
        $query = ('UPDATE DISCUSSION SET DISCUSSION.disc_id =\'' .$disc_id.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $query = ('UPDATE DISCUSSION SET DISCUSSION.state =\''.$state.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $query = ('UPDATE DISCUSSION SET DISCUSSION.user_id =\''.$user_id.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $message_id
     */
    public function setMessageId($message_id)
    {
        $query = ('UPDATE DISCUSSION SET DISCUSSION.message_id =\''.$message_id.'\'');
        $this->execquery($query);
    }
}




?>

