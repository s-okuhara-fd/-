<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?PHP
$companyname = $_POST["date"][0];
$companyid = $_POST['date'][1];
$password = password_hash($_POST['date'][2], PASSWORD_DEFAULT);
include 'connect.php';
try {
    $dbh = $pdo;
} catch (PDOException $e) {
    $msg = $e->getMessage();
}

//フォームに入力された会社名がすでに登録されていないかチェック
$sql = "SELECT * FROM users WHERE companyname = :companyname";
$stmt = $dbh->prepare($sql);
$stmt->bindValue(':companyname', $companyname);
$stmt->execute();
$member = $stmt->fetch();

if (isset($member['companyname']) === isset($companyname)) {
  $sql = "UPDATE users SET companyid = :companyid , password = :password WHERE companyname = :companyname";
  $stmt = $dbh->prepare($sql);
  $stmt->bindValue(':companyname', $companyname);
  $stmt->bindValue(':companyid', $companyid);
  $stmt->bindValue(':password', $password);
  $stmt->execute();
  $msg =  '登録が完了しました';
  $link = '<a href="index.php">ログインページへ</a>';
} else {
    //登録されていなければinsert
  $msg =  '会社名が存在しません';
  $link = '<a href="user_reset.php">戻る</a>';
}
?>

<div class="reset">
<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
</div>
