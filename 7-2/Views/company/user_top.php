<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?php
session_start();
include_once 'connect.php';
if(!isset($_SESSION['companyid'])) {
  header("Location: index.php");
}

$query = "SELECT * FROM companies WHERE companyid=".$_SESSION['companyid']."";
$params = $pdo->query($query);

if (!$params) {
  print('クエリーが失敗しました。' . $pdo->error);
  $mysqli->close();
  exit();
}

  while ($idPost = $params->fetch(PDO::FETCH_ASSOC)) {
  $companyid = $idPost['companyid'];
  $companyname = $idPost['companyname'];
  $companykana = $idPost['companykana'];
  $postcode=$idPost['postcode'];
  $location=$idPost['location'];
  $tell=$idPost['tell'];
  $fax=$idPost['fax'];
  $representative=$idPost['representative'];
  $capital=$idPost['capital'];
  $edate=$idPost['edate'];
  $employees=$idPost['employees'];
  $content=$idPost['content'];
  $url=$idPost['url'];
  $site=$idPost['site'];
  $payee=$idPost['payee'];
  $branch=$idPost['branch'];
  $accountinformation=$idPost['accountinformation'];
  $accountnumber=$idPost['accountnumber'];
  $authorization=$idPost['authorization'];
  $name=$idPost['name'];
  $mail=$idPost['mail'];
}
// }

require_once(ROOT_PATH .'Controllers/CompanyController.php');
$company = new CompanyController();
$params_company = $company->companysee();
// session_destroy();
// $params->close();
?>

<div class="dbc">
  <h1>登録情報</h1>
  <a class="log"  href="logout.php">ログアウト</a>
  <table border = "1">
    <?php $value = ($params_company['companies']);?>
  <tr>
    <th>会社ID</th>
    <td><?php echo $companyid;?></td>
  </tr>
  <tr>
    <th>会社名</th>
    <td><?php echo $companyname;?></td>
  </tr>
  <tr>
    <th>社名（フリガナ）</th>
    <td><?php echo $companykana;?></td>
  </tr>
  <tr>
    <th>郵便番号</th>
    <td><?php echo $postcode;?></td>
  </tr>
  <tr>
    <th>経理所在地</th>
    <td><?php echo $location;?></td>

  </tr>
  <tr>
    <th>電話番号</th>
    <td><?php echo $tell;?></td>
  </tr>
  <tr>
    <th>FAX番号</th>
    <td><?php echo $fax;?></td>
  </tr>
  <tr>
    <th>会社代表者　役職/氏名</th>
    <td><?php echo $representative;?></td>
  </tr>
  <tr>
    <th>資本金</th>
    <td><?php echo $capital;?></td>
  </tr>
  <tr>
    <th>設立年月日</th>
    <td><?php echo $edate;?></td>
  </tr>
  <tr>
    <th>従業員数</th>
    <td><?php echo $employees;?></td>
  </tr>
  <tr>
    <th>事業内容</th>
    <td><?php echo $content;?></td>
  </tr>
  <tr>
    <th>URL</th>
    <td><?php echo $url;?></td>
  </tr>
  <tr>
    <th>取引条件</br>（支払いサイト）</th>
    <td><?php echo $site;?></td>
  </tr>
  <tr>
    <th>振込先　金融機関名</th>
    <td><?php echo $payee;?></td>
  </tr>
  <tr>
    <th>支店名</th>
    <td><?php echo $branch;?></td>
  </tr>
  <tr>
    <th>口座情報　種別</th>
    <td><?php echo $accountinformation;?></td>
  </tr>
  <tr>
    <th>口座番号</th>
    <td><?php echo $accountnumber;?></td>
  </tr>
  <tr>
    <th>人材派遣許認可</th>
    <td><?php echo $authorization;?></td>
  </tr>
  <tr>
    <th>発注書送付先担当者</br>（フルネーム）</th>
    <td><?php echo $name;?></td>
  </tr>
  <tr>
    <th>発注書送付先担当者</br>（メールアドレス）</th>
    <td><?php echo $mail;?></td>
  </tr>
</table>

<div class="editbtn">
  <!-- <button onclick="location.href='./edit.php?id=<?php //echo $id;?>'" id="btn" class="btn" name="btn" type="submit">編集</button> -->
  <form action="./CompanyController.php" method="get">
    <input type="submit" formaction="./edit.php" value="編集">
    <input type="hidden" name='id' value= <?=$companyid?>>
  </form>
</div>
</div>
