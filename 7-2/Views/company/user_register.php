<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?php
//フォームからの値をそれぞれ変数に代入

$companyname = $_POST["companyname"];
$companyid = $_POST['companyid'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
include 'connect.php';


try {
    $dbh = $pdo;
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

//フォームに入力されたmailがすでに登録されていないかチェック
$sql = "SELECT * FROM users WHERE companyid = :companyid";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':companyid', $companyid);
$stmt->execute();
$member = $stmt->fetch();

if (isset($member['companyid'] ,$companyid)){
    $msg = '同じidが存在します';
    $link = '<a href="user_account.php">戻る</a>';
  } else {
    //登録されていなければinsert
    $sql = "INSERT INTO users(companyname, companyid, password) VALUES (:companyname, :companyid, :password)";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':companyname', $companyname);
    $stmt->bindValue(':companyid', $companyid);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    $msg = 'アカウントを作成しました';
    $link = '<a href="user_company.php">会社登録ページへ</a>';

}
?>

<!--メッセージの出力-->
<div class="register">
<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
</div>
