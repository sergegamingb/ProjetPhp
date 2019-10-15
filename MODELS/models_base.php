<?php

class base
{


    public function loadDb()
    {
        return $db = new PDO('mysql:host=mysql-tpphp.alwaysdata.net;dbname=tpphp_bd', 'tpphp', 'ericzemour');
    }

    public function execRequete($query)
    {
        return $this->loadDb()->query($query);
    }
    public function compar($query) {

    }
    public function try_it ($query){
        $db = new PDO('mysql:host=mysql-tpphp.alwaysdata.net;dbname=tpphp_bd', 'tpphp', 'ericzemour');
        return $db->query($query);
    }
}