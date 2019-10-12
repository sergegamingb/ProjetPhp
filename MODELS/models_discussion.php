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


    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * @return mixed
     */
    public function getDiscId()
    {
        return $this->disc_id;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
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

