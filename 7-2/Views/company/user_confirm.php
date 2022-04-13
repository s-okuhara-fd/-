<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?php

  //ダイレクトアクセス禁止
  if (empty($_SERVER["HTTP_REFERER"])) {
  //リダイレクト
  header('Location: user_company.php');
  }

  // フォームのボタンが押されたら

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // フォームから送信されたデータ
      $companyid = $_POST["date"][0];
      $companyname = $_POST["date"][1];
      $companykana = $_POST["date"][2];
      $postcode = $_POST["date"][3];
      $location= $_POST["date"][4];
      $tell  = $_POST["date"][5];
      $fax  = $_POST["date"][6];
      $representative  = $_POST["date"][7];
      $capital  = $_POST["date"][8];
      $edate  = $_POST["date"][9];
      $employees  = $_POST["date"][10];
      $content  = $_POST["date"][11];
      $url  = $_POST["date"][12];
      $site  = $_POST["date"][13];
      $payee  = $_POST["date"][14];
      $branch  = $_POST["date"][15];
      $accountinformation  = $_POST["date"][16];
      $accountnumber  = $_POST["date"][17];
      $authorization  = $_POST["date"][18];
      $name  = $_POST["date"][19];
      $mail  = $_POST["date"][20];
  }

  // 送信ボタンが押されたら
  if (isset($_POST["submit"])) {
      header('Location:user_complete.php');
      exit;
    }
?>

<?php
$referer = $_SERVER["HTTP_REFERER"];
$phpurl = 'user_company.php';
if (!strstr($referer,$phpurl)) {
  header("location: user_company.php");
}
session_start();
header('Content-Type: text/html; charset=UTF-8');
include 'header.php';
// $date = $_SESSION['date'];
for ($i=0; $i < 20; $i++) {
  $_SESSION['flag'][$i] = 0;
}
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
}
?>

<div class="user-confirm">
  <div class="check">
    <h1>入力内容確認</h1>
  </div>
  <div class="confirm-contents">
    <p>下記の内容をご確認の上送信ボタンを押してください<br>内容を訂正する場合は戻るを押してください。</p>
  </div>
  <div>
    <form action="user_complete.php" method="POST">
      <input type="hidden" name="companyid" value="<?php echo $companyid; ?>">
      <input type="hidden" name="companyname" value="<?php echo $companyname; ?>">
      <input type="hidden" name="companykana" value="<?php echo $companykana; ?>">
      <input type="hidden" name="postcode" value="<?php echo $postcode; ?>">
      <input type="hidden" name="location" value="<?php echo $location; ?>">
      <input type="hidden" name="tell" value="<?php echo $tell; ?>">
      <input type="hidden" name="fax" value="<?php echo $fax; ?>">
      <input type="hidden" name="representative" value="<?php echo $representative; ?>">
      <input type="hidden" name="capital" value="<?php echo $capital; ?>">
      <input type="hidden" name="edate" value="<?php echo $edate; ?>">
      <input type="hidden" name="employees" value="<?php echo $employees; ?>">
      <input type="hidden" name="content" value="<?php echo $content; ?>">
      <input type="hidden" name="url" value="<?php echo $url; ?>">
      <input type="hidden" name="site" value="<?php echo $site; ?>">
      <input type="hidden" name="payee" value="<?php echo $payee; ?>">
      <input type="hidden" name="branch" value="<?php echo $branch; ?>">
      <input type="hidden" name="accountinformation" value="<?php echo $accountinformation; ?>">
      <input type="hidden" name="accountnumber" value="<?php echo $accountnumber; ?>">
      <input type="hidden" name="authorization" value="<?php echo $authorization; ?>">
      <input type="hidden" name="name" value="<?php echo $name; ?>">
      <input type="hidden" name="mail" value="<?php echo $mail; ?>">
  <div>
      <div class="answer">
        <div class="answer-top">
          <label>会社ID</label>
        </div>
          <p><?= htmlspecialchars($companyid, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>会社名</label>
        </div>
          <p><?= htmlspecialchars($companyname, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>社名（フリガナ）</label>
        </div>
          <p><?= htmlspecialchars($companykana, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>郵便番号</label>
        </div>
          <p><?= htmlspecialchars($postcode, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>経理所在地</label>
        </div>
          <p><?= htmlspecialchars($location, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>電話番号</label>
        </div>
          <p><?= htmlspecialchars($tell, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>FAX番号</label>
        </div>
          <p><?= htmlspecialchars($fax, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>会社代表者　役職/氏名</label>
        </div>
          <p><?= htmlspecialchars($representative, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>資本金</label>
        </div>
          <p><?= htmlspecialchars($capital, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>設立年月日</label>
        </div>
          <p><?= htmlspecialchars($edate, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>従業員数</label>
        </div>
          <p><?= htmlspecialchars($employees, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>事業内容</label>
        </div>
          <p><?= htmlspecialchars($content, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>URL</label>
        </div>
          <p><?= htmlspecialchars($url, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>取引条件（支払いサイト）</label>
        </div>
          <p><?= htmlspecialchars($site, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>振込先　金融機関名</label>
        </div>
          <p><?= htmlspecialchars($payee, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>支店名</label>
        </div>
          <p><?= htmlspecialchars($branch, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>口座情報　種別</label>
        </div>
          <p><?= htmlspecialchars($accountinformation, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>口座番号</label>
        </div>
          <p><?= htmlspecialchars($accountnumber, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>人材派遣許認可</label>
        </div>
          <p><?= htmlspecialchars($authorization, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>発注書送付先担当者（フルネーム）</label>
        </div>
          <p><?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
      <div class="answer">
        <div class="answer-top">
          <label>発注書送付先担当者（メールアドレス）</label>
        </div>
          <p><?= htmlspecialchars($mail, ENT_QUOTES, 'UTF-8') ?></p>
      </div>
  </div>

  <div class="confirm-btn">
    <form action = “user_complete.php” method = “GET”>
    <button type="submit" name="submit">送&emsp;信</button>
    </form>
    <button type="button" class="a" onclick=history.back()>戻&emsp;る</button>
  </div>

</div>
</div>
</body>
