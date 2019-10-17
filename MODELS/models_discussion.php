<?php

function __autoload($base)
{
    include ( 'models_' . $base. '.php');
}

class discussion extends base
{
    private $disc_id;
    private $user_id;
    private $message_id;
    private $state;

    public function __construct()
    {

    }


    public function getDiscId($id)
    {
        return $this->get('disc_id',$id);
    }

    public function getUserId($id)
    {
        return $this->get('user_id',$id);
    }

    public function getMessageId($id)
    {
        return $this->get('$this->message_id',$id);
    }

    public function getState($id)
    {
        return $this->get('state',$id);
    }

    /**
     * @param mixed $disc_id
     */
    public function setDiscId($disc_id)
    {
        $query = ('UPDATE DISCUSSION SET DISCUSSION.disc_id :=\'' .$disc_id.'\'');
        $this->execRequete($query);
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $query = ('UPDATE DISCUSSION SET DISCUSSION.state :=\''.$state.'\'');
        $this->execRequete($query);
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $query = ('UPDATE DISCUSSION SET DISCUSSION.user_id :=\''.$user_id.'\'');
        $this->execRequete($query);
    }

    /**
     * @param mixed $message_id
     */
    public function setMessageId($message_id)
    {
        $query = ('UPDATE DISCUSSION SET DISCUSSION.message_id :=\''.$message_id.'\'');
        $this->execRequete($query);
    }


    public function createDiscussion()
    {


    }
}




?>

