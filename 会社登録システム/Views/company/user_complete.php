<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<div class="complete">
<h1>登録が完了しました</h1>
<a href="index.php">ログインページへ</a>
</div>

<?php

//ダイレクトアクセス禁止
if (empty($_SERVER["HTTP_REFERER"])) {
//リダイレクト
header('Location: user_company.php');
}
?>

<?php

$referer = $_SERVER["HTTP_REFERER"];
$url = 'user_confirm.php';
if (!strstr($referer,$url)) {
  header("location: user_company.php");
}
include 'header.php';
session_start();
?>

<?php
$_SESSION['companyid']=$_POST['companyid'];
$_SESSION['companyname']=$_POST['companyname'];
$_SESSION['companykana']=$_POST['companykana'];
$_SESSION['postcode']=$_POST['postcode'];
$_SESSION['location']=$_POST['location'];
$_SESSION['tell']=$_POST['tell'];
$_SESSION['fax']=$_POST['fax'];
$_SESSION['representative']=$_POST['representative'];
$_SESSION['capital']=$_POST['capital'];
$_SESSION['edate']=$_POST['edate'];
$_SESSION['employees']=$_POST['employees'];
$_SESSION['content']=$_POST['content'];
$_SESSION['url']=$_POST['url'];
$_SESSION['site']=$_POST['site'];
$_SESSION['payee']=$_POST['payee'];
$_SESSION['branch']=$_POST['branch'];
$_SESSION['accountinformation']=$_POST['accountinformation'];
$_SESSION['accountnumber']=$_POST['accountnumber'];
$_SESSION['authorization']=$_POST['authorization'];
$_SESSION['name']=$_POST['name'];
$_SESSION['mail']=$_POST['mail'];

$companyid=$_SESSION['companyid'];
$companyname=$_SESSION['companyname'];
$companykana=$_SESSION['companykana'];
$postcode=$_SESSION['postcode'];
$location=$_SESSION['location'];
$tell=$_SESSION['tell'];
$fax=$_SESSION['fax'];
$representative=$_SESSION['representative'];
$capital=$_SESSION['capital'];
$edate=$_SESSION['edate'];
$employees=$_SESSION['employees'];
$content=$_SESSION['content'];
$url=$_SESSION['url'];
$site=$_SESSION['site'];
$payee=$_SESSION['payee'];
$branch=$_SESSION['branch'];
$accountinformation=$_SESSION['accountinformation'];
$accountnumber=$_SESSION['accountnumber'];
$authorization=$_SESSION['authorization'];
$name=$_SESSION['name'];
$mail=$_SESSION['mail'];


?>

<?php
function con_ini(){
try{
  include 'connect.php';
  $dbh = $pdo;[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_EMULATE_PREPARES => false];
  } catch (PDDException $e) {
    echo 'DB接続エラー'. $e->getMessage();
    exit();
  };
  return $dbh;
  };

$dbh = con_ini();
include 'connect.php';
  $sql= "INSERT INTO companies(companyid,companyname,companykana,postcode,location,tell,fax,representative,capital,edate,employees,content,url,site,payee,branch,accountinformation,accountnumber,authorization,name,mail)
    VALUES(:companyid,:companyname,:companykana,:postcode,:location,:tell,:fax,:representative,:capital,:edate,:employees,:content,:url,:site,:payee,:branch,:accountinformation,:accountnumber,:authorization,:name,:mail)";
    $dbh->beginTransaction();
    try{
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
    $stmt -> execute();
    $dbh->commit();
    $pdo = NULL;
   } catch(PDOException $e){
   $dbh->rollBack();
 };

//IDとpassword突合
 require_once(ROOT_PATH .'Controllers/CompanyController.php');
 $company = new CompanyController();
 $params_pass = $company->company_pass();
?>
