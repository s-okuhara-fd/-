<?php
session_start();
$companyid= $_GET["id"];
$companyname= $_POST["companyname"];
$companykana= $_POST["companykana"];
$postcode= $_POST["postcode"];
$location= $_POST["location"];
$tell= $_POST["tell"];
$fax= $_POST["fax"];
$representative= $_POST["representative"];
$capital= $_POST["capital"];
$edate= $_POST["edate"];
$employees= $_POST["employees"];
$content= $_POST["content"];
$url= $_POST["url"];
$site= $_POST["site"];
$payee= $_POST["payee"];
$branch= $_POST["branch"];
$accountinformation= $_POST["accountinformation"];
$accountnumber= $_POST["accountnumber"];
$authorization= $_POST["authorization"];
$name= $_POST["name"];
$mail= $_POST["mail"];

include 'connect.php';
$dbh = $pdo;
$sql= "UPDATE companies SET
  companyname = :companyname,
  companykana = :companykana,
  postcode = :postcode,
  location = :location,
  tell = :tell,
  fax = :fax,
  representative = :representative,
  capital = :capital,
  edate = :edate,
  employees = :employees,
  content = :content,
  url = :url,
  site = :site,
  payee = :payee,
  branch = :branch,
  accountinformation = :accountinformation,
  accountnumber = :accountnumber,
  authorization = :authorization,
  name = :name,
  mail = :mail
WHERE companyid = :companyid";
$stmt = $dbh->prepare($sql);
$stmt -> bindParam(':companyid',$companyid,PDO::PARAM_STR);
$stmt -> bindParam(':companyname',$companyname,PDO::PARAM_STR);
$stmt -> bindParam(':companykana',$companykana,PDO::PARAM_STR);
$stmt -> bindParam(':postcode',$postcode,PDO::PARAM_INT);
$stmt -> bindParam(':location',$location,PDO::PARAM_STR);
$stmt -> bindParam(':tell',$tell,PDO::PARAM_INT);
$stmt -> bindParam(':fax',$fax,PDO::PARAM_INT);
$stmt -> bindParam(':representative',$representative,PDO::PARAM_STR);
$stmt -> bindParam(':capital',$capital,PDO::PARAM_STR);
$stmt -> bindParam(':edate',$edate,PDO::PARAM_STR);
$stmt -> bindParam(':employees',$employees,PDO::PARAM_STR);
$stmt -> bindParam(':content',$content,PDO::PARAM_STR);
$stmt -> bindParam(':url',$url,PDO::PARAM_STR);
$stmt -> bindParam(':site',$site,PDO::PARAM_STR);
$stmt -> bindParam(':payee',$payee,PDO::PARAM_STR);
$stmt -> bindParam(':branch',$branch,PDO::PARAM_STR);
$stmt -> bindParam(':accountinformation',$accountinformation,PDO::PARAM_STR);
$stmt -> bindParam(':accountnumber',$accountnumber,PDO::PARAM_STR);
$stmt -> bindParam(':authorization',$authorization,PDO::PARAM_STR);
$stmt -> bindParam(':name',$name,PDO::PARAM_STR);
$stmt -> bindParam(':mail',$mail,PDO::PARAM_STR);
$stmt->execute();

// session_regenerate_id(true);
// if(isset($_SESSION['confirmation']) == false && $_SESSION['confirmation'] !== 2 || !isset($_POST['name']) || !isset($_POST['kana']) || !isset($_POST['tel']) || !isset($_POST['email']) || !isset($_POST['body'])) {
//   header('Location:user_top.php');
//   exit();
//  }
 // $_SESSION = array();
 // if(isset($_COOKIE[session_name()]) == true){
 //   setcookie(session_name(), '',time()-42000,'/');
 // }
 //
 // require_once(ROOT_PATH .'Controllers/CompanyController.php');
 // $company = new CompanyController();
 // $params_editcomplete = $company->edit_complete();

 // header("Location: ./index.php");
 // exit();
 // session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>編集</title>
  <link rel="stylesheet" type="text/css" href="/css/base.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
  <div class="edit">
    <h1>編集完了</h1>
    <div class"editform-text">
      <a href="index.php">ログイン画面へ</a>
    </div>
  </div>
</body>
</html>
