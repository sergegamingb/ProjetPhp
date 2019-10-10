<?php


include 'model_base.php';



class User
{
    private $pseudo;
    private $password;
    private $mail;
    private $user_id;
    private $state;
    private $phone;
    private $country;
    private $user_date;
    private $gender;


    public function __construct($mail, $password, $pseudo, $gender, $phone, $country, $state)
    {

        $this->mail = $mail;
        $this->password = $password;
        $this->pseudo = $pseudo;
        $this->gender = $gender;
        $this->phone = $phone;
        $this->country = $country;
        $this->state = $state;

    }


    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
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
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @return mixed
     */
    public function getUserDate()

    {
        return $this->user_date;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @param mixed $user_date
     */
    public function setUserDate($user_date)
    {
        $this->user_date = $user_date;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }


    public function register()
    {
        $db = new PDO('mysql:host=mysql-tpphp.alwaysdata.net;dbname=tpphp_bd', 'tpphp', 'ericzemour');
        $query = 'INSERT INTO USER (mail, pseudo, password, phone, country, user_date, gender, state)
        VALUES (
         \'' . $this->mail . '\' ,
         \'' . $this->pseudo . '\',
         \'' . $this->password . '\' ,
         \'' . $this->phone . '\' ,
         \'' . $this->country . '\' ,
         NOW(),
         \'' . $this->gender . '\' ,
         \'' . $this->state . '\'
         )';


        try {
            $db->query($query);
            echo '<br/><strong>bonsoir, votre inscription a bien été enregistrée.</strong><br/>';
            echo '<br/><strong>Mail envoyé !</strong><br/>';

            echo ' <br/>  <a href=../index.php> Retourner a l\'accueil </a>   ';

        } catch (PDOException $e) {
            echo $e->getMessage();
        }


    }


}