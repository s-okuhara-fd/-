<?php
require_once(ROOT_PATH .'/Models/Db.php');

class Users extends Db{
    private $table='users';
    public function __construct($dbh = null){
        parent::__construct($dbh);
    }

    public function getUsers($id=""):Array{
        $sql = 'SELECT * FROM '.$this->table;
        // $sql = 'SELECT companies,users SET companies.password = users.password  WHERE companies.companyid = users.companyid' ;
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}

class Managers extends Db{
    private $table='managers';
    public function __construct($dbh = null){
        parent::__construct($dbh);
    }

    public function getManagers($id=""):Array{
        $sql = 'SELECT * FROM '.$this->table;
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}


?>
