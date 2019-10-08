<?php

include 'base.php';

class Message
{
    private $message_id;
    private $content;
    private $message_date;
    private $user_id;

    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getMessageDate()
    {
        return $this->message_date;
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
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param mixed $message_date
     */
    public function setMessageDate($message_date)
    {
        $this->message_date = $message_date;
    }

    /**
     * @param mixed $message_id
     */
    public function setMessageId($message_id)
    {
        $this->message_id = $message_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }
}











?>