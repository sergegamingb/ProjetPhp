<?php

include 'model_base.php';

class Discussion
{
    private $disc_id;
    private $user_id;
    private $message_id;
    private $state;

    public function __construct()
    {

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
        $this->disc_id = $disc_id;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param mixed $message_id
     */
    public function setMessageId($message_id)
    {
        $this->message_id = $message_id;
    }
}




?>

