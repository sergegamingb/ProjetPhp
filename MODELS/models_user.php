<?php


spl_autoload_register(function ($class_name) {
    include  '../MODELS/models_' . $class_name . '.php';

});

class user extends base

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
    private $password2;


    public function __construct()
    {
//       $query =('SELECT * FROM USER');
//       $this->execquery($query);
    }



    /**
     * @return mixed
     */
    public function getState($pseudo)
    {
        return $this->get('state',$pseudo);
    }

    /**
     * @return mixed
     */
    public function getUserId($pseudo)
    {
        return $this->get('user_id',$pseudo);
    }


    /**
     * @return mixed
     */
    public function getCountry($pseudo)
    {
        return $this->get('country',$pseudo);
    }

    /**
     * @return mixed
     */
    public function getGender($pseudo)
    {
        return $this->get('gender',$pseudo);
    }

    /**
     * @return mixed
     */
    public function getMail($pseudo)
    {
        return $this->get('mail',$pseudo);
    }

    /**
     * @return mixed
     */
    public function getPassword($pseudo)
    {
        return $this->get('password',$pseudo);

    }

    /**
     * @return mixed
     */
    public function getPhone($pseudo)
    {
       return $this->get('phone',$pseudo);
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
    public function getUserDate($pseudo)

    {
        return $this->get('user_date',$pseudo);
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $query = ('UPDATE USER SET USER.country :=\''.$country.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $query = ('UPDATE USER SET USER.gender :=\''.$gender.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $mail
     */
    public function setMail($mail)
    {
        $query = ('UPDATE USER SET USER.mail :=\''.$mail.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $query = ('UPDATE USER SET USER.password :=\''.$password.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $query = ('UPDATE USER SET USER.phone :=\''.$phone.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $pseudo
     */
    public function setPseudo($pseudo)
    {
        $query = ('UPDATE USER SET USER.pseudo :=\''.$pseudo.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $user_date
     */
    public function setUserDate($user_date)
    {
        $query = ('UPDATE USER SET USER.date :=\''.$user_date.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $query = ('UPDATE USER SET USER.user_id :=\''.$user_id.'\'');
        $this->execquery($query);
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $query = ('UPDATE USER SET USER.state :=\''.$state.'\'');
        $this->execquery($query);
    }


    public function isSafeForm() {
        $query = 'SELECT pseudo FROM USER WHERE pseudo = \''.$this->pseudo.'\'';
        $row = $this->execRequete($query);
        if($row -> rowCount()==1) return false;

        if(strlen($this->password) <5 || strlen($this->password) >20) return false;
        if(!filter_var($this->mail,FILTER_VALIDATE_EMAIL)) {return false;}
        if($this->password != $this->password2) return false;
        if(is_null($this->password)||is_null($this->password2)) return false;


     return true;
    }

    public function register()
    {


        $this->mail = $_POST['mail'];
        $this->password = $_POST['mdp'];
        $this->pseudo = $_POST['identifiant'];
        //if(preg_match("#^[a-zA-Z0-9]{4,6}$#",$_POST['identifiant'])) $this -> pseudo = $_POST['identifiant'];
        $this -> gender = $_POST['genre'];
        $this -> phone = $_POST['phone'];
        $this -> country = $_POST['pays'];
        $this -> state = 'member';
        $this-> password2 = $_POST['cmdp'];




        $hashedPass = hash('sha256',$this->password);


        $query = 'INSERT INTO USER (mail, pseudo, password, phone, country, user_date, gender, state)
        VALUES (
         \'' . $this->mail . '\' ,
         \'' . $this->pseudo . '\',
         \'' . $hashedPass . '\' ,
         \'' . $this->phone . '\' ,
         \'' . $this->country . '\',
         NOW(),
         \'' . $this->gender . '\' ,
         \'' . $this->state . '\'
         )';

        if(!preg_match('#^[a-zA-Z0-9_]*$#', $this->pseudo))
        {
            $_SESSION['error'] = 'badnickname';
            echo 'mail : ' . $this->mail;//test
            echo 'mauvais pseudo';
            echo ' <br/>  <a href=../index.php> Retourner a l\'accueil </a>   ';
            exit();
        }

        if ($this->isSafeForm()) {
            try {

                $this->execRequete($query);
                echo '<br/><strong>Votre inscription a bien été enregistrée.</strong><br/>';
                echo ' <br/>  <a href=../VIEWS/view_accueil.php> Retourner a l\'accueil </a>   ';
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
//


    }
    public function isSafeLogin() {
//        $query = 'SELECT password, pseudo FROM USER WHERE pseudo = \''.$login.'\' and password = \'' .$password.'\'';
//        $row = $this->execRequete($query);
//        if($row-> rowCount()==0) return false;

    }

    public function login()
    {

        $login = $_POST['login'];
        $password = $_POST['mdp'];
        $hashedPass = hash('sha256',$password);




        //plus rapide
        $sql = $this->loadDb()->prepare("SELECT * FROM USER WHERE  pseudo= ? AND password= ?");
        $sql->execute(array($login, $hashedPass));


        if(!preg_match('#^[a-zA-Z0-9_]*$#', $login))
        {
            $_SESSION['error'] = 'badnickname2';
            echo 'mauvais pseudo';
            echo ' <br/>  <a href=../index.php> Retourner a l\'accueil </a>   ';
            exit();
        }

        try
        {
        //$row = $this->try_it($query);

        //if($row -> rowCount() == 0)
            if($sql->rowCount()==0)
        {
            echo '<br/><strong>erreur d\'authentification</strong><br/>';
            echo ' <br/>  <a href=../index.php> Retourner a l\'accueil </a>   ';
        }
        else
        {


            $_SESSION['isLogin'] = 'ok';
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $hashedPass;
            $_SESSION['mail']=$this->getMail($login);
            $_SESSION['phone']=$this->getPhone($login);
            $_SESSION['country']=$this->getCountry($login);
            $_SESSION['date']=$this->getUserDate($login);
            header('Location: ../VIEWS/view_accueil.php');
        }


        }

    catch (PDOException $e)
    {
        echo $e->getMessage();
    }
    }
    public function changePassword()
    {
        if($_SESSION['isLogin']!='ok')
        {
            $_SESSION['error'] = 'notconnected';
        }


        $login = $_SESSION['login'];
        $pass = $_SESSION['password'];


        $oldMdp=$_POST['oldMdp'];
        $newMdp=$_POST['newMdp'];
        $confirmMdp=$_POST['confirmMdp'];

        if(strlen($newMdp) <5 || strlen($newMdp) >20 )
        {
            $_SESSION['error'] = 'tooshort';
            echo 'le mot de passe doit faire entre 5 et 20 caracteres';
            header('Location: ../VIEWS/view_error.php');
            echo ' <br/>  <a href=../VIEWS/view_changePass.php>  réessayer </a>   ';
            exit();
        }

        if ($newMdp != $confirmMdp)
        {
            $_SESSION['error'] = 'notsame';
            header('Location: ../VIEWS/view_error.php');

            echo ' <br/>  <a href=../VIEWS/view_accueil.php> Retourner a l\'accueil </a>   ';
            exit();
        }
        $hashedOldPass = hash('sha256',$oldMdp);
        $hashedNewPass = hash('sha256',$newMdp);

        if ($hashedOldPass == $pass)

        {
            try
            {
                $query = 'UPDATE USER SET password := \'' . $hashedNewPass . '\' WHERE pseudo = \'' . $login . '\' AND password = \'' . $pass . '\' ';
                $this->execRequete($query);
                echo '<br/><strong>Votre mot de passe a bien été modifié !</strong><br/>';
                $_SESSION['isLogin']='non';
                echo ' <br/>  <a href=../VIEWS/view_accueil.php> Retourner a l\'accueil </a>   ';
            }
            catch (PDOException $e)
            {
                echo $e->getMessage();
            }
        }
        else
        {
            $_SESSION['error'] = 'notcorresponding';
            echo"ancien et nouveau mots de passe différents";
            header('Location: ../VIEWS/view_error.php');
        }

    }
}




?>



