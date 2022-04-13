<?php
require_once(ROOT_PATH.'/Models/Db.php');
  class Company extends Db {
    private $table = 'companies';
    public function __construct($dbh = null){
    parent::__construct($dbh);
    }

    public function findAll():Array {
      try {
        $sql = 'SELECT * FROM '.$this->table;
        $sql .= ' WHERE del_flg = 0';
        $sth = $this->dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        } catch (Exception $e) {
          echo 'ただいま障害によりエラーが発生しております。';
          exit();
        }
    }

    public function findById($id = 0) {
      try{
        $sql = 'SELECT * FROM '.$this->table;
        $sql .= ' WHERE id = :id';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
        } catch (EXception $e) {
        return 'ただいま障害によりエラーが発生しております。';
        exit();
      }
    }

    public function editById($companyid = 0) {
      try{
        $sql = 'SELECT * FROM '.$this->table;
        $sql .= ' WHERE companyid = :companyid';
        $sth = $this->dbh->prepare($sql);
        $sth->bindParam(':companyid', $companyid, PDO::PARAM_INT);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
        } catch (EXception $e) {
        return 'ただいま障害によりエラーが発生しております。';
        exit();
      }
    }

    public function countAll():Int {
      $sql = 'SELECT count(*) as count FROM companies WHERE del_flg = 0';
      $sth = $this->dbh->prepare($sql);
      $sth->execute();
      $company_count = $sth->fetchColumn();
      return $company_count;
    }

    // public function update($id= 0){
    // $sql= "UPDATE companies SET
    //   companyname = :companyname,
    //   companykana = :companykana,
    //   postcode = :postcode,
    //   location = :location,
    //   tell = :tell,
    //   fax = :fax,
    //   representative = :representative,
    //   capital = :capital,
    //   edate = :edate,
    //   employees = :employees,
    //   content = :content,
    //   url = :url,
    //   site = :site,
    //   payee = :payee,
    //   branch = :branch,
    //   accountinformation = :accountinformation,
    //   accountnumber = :accountnumber,
    //   authorization = :authorization,
    //   name = :name,
    //   mail = :mail
    // WHERE companyid = :companyid";
    // $stmt = $this->dbh->prepare($sql);
    // $stmt -> bindParam(':companyid',$companyid,PDO::PARAM_STR);
    // $stmt -> bindParam(':companyname',$companyname,PDO::PARAM_STR);
    // $stmt -> bindParam(':companykana',$companykana,PDO::PARAM_STR);
    // $stmt -> bindParam(':postcode',$postcode,PDO::PARAM_INT);
    // $stmt -> bindParam(':location',$location,PDO::PARAM_STR);
    // $stmt -> bindParam(':tell',$tell,PDO::PARAM_INT);
    // $stmt -> bindParam(':fax',$fax,PDO::PARAM_INT);
    // $stmt -> bindParam(':representative',$representative,PDO::PARAM_STR);
    // $stmt -> bindParam(':capital',$capital,PDO::PARAM_STR);
    // $stmt -> bindParam(':edate',$edate,PDO::PARAM_STR);
    // $stmt -> bindParam(':employees',$employees,PDO::PARAM_STR);
    // $stmt -> bindParam(':content',$content,PDO::PARAM_STR);
    // $stmt -> bindParam(':url',$url,PDO::PARAM_STR);
    // $stmt -> bindParam(':site',$site,PDO::PARAM_STR);
    // $stmt -> bindParam(':payee',$payee,PDO::PARAM_STR);
    // $stmt -> bindParam(':branch',$branch,PDO::PARAM_STR);
    // $stmt -> bindParam(':accountinformation',$accountinformation,PDO::PARAM_STR);
    // $stmt -> bindParam(':accountnumber',$accountnumber,PDO::PARAM_STR);
    // $stmt -> bindParam(':authorization',$authorization,PDO::PARAM_STR);
    // $stmt -> bindParam(':name',$name,PDO::PARAM_STR);
    // $stmt -> bindParam(':mail',$mail,PDO::PARAM_STR);
    // $stmt->execute();
    // }


  // 削除
  public function deleteById($id = 0){
    $sql = 'UPDATE companies SET del_flg = 1 WHERE id = :id';
    $sth = $this->dbh->prepare($sql);
    $sth->bindParam(':id', $id, PDO::PARAM_INT);
    $sth->execute();
  }

// IDとpassword突合
  public function updateId($id= 0){
    $insert =
    'UPDATE companies,users
    SET companies.password = users.password
    WHERE companies.companyid = users.companyid';
    $sth = $this->dbh->prepare($insert);
    $sth->execute();
    }

    public function NewfindAll($id = 0):Array {
      try {
      $sql = 'SELECT * FROM '.$this->table;
      $sql .= ' WHERE del_flg = 0';
      $sth = $this->dbh->prepare($sql);
      $sth->execute();
      $result = $sth->fetchAll(PDO::FETCH_ASSOC);
      return $result;
      } catch (Exception $e) {
        echo 'ただいま障害によりエラーが発生しております。';
        exit();
      }
    }

  }
?>
