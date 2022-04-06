<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?php
session_start();
$_SESSION['confirmation'] = 2;

require_once(ROOT_PATH .'Controllers/CompanyController.php');
$company = new CompanyController();
$params_edit = $company->edit();
?>

<div class="edit-form">
  <h1>編集</h1>

  <?php $value = ($params_edit['companies']);?>
  <form action="edit_complete.php?id=<?php echo $value['companyid'];?>" method="post" name='id'>
  <!-- <input type="hidden" name="id" value="<?php// echo $value['companyid'];?>"> -->

  <?php
    // $edit_companyname = "";
    // $edit_companykana = "";
    // $edit_postcode = "";
    // $edit_location = "";
    // $edit_tell = "";
    // $edit_fax = "";
    // $edit_representative = "";
    // $edit_capital = "";
    // $edit_edate = "";
    // $edit_employees = "";
    // $edit_content = "";
    // $edit_url = "";
    // $edit_site = "";
    // $edit_payee = "";
    // $edit_branch = "";
    // $edit_accountinformation = "";
    // $edit_accountnumber = "";
    // $edit_authorization = "";
    // $edit_name = "";
    // $edit_mail = "";
  ?>

  <div>
    <label>会社名</label>
    <input type="text" name="companyname" value="<?php echo $value["companyname"]?>">
  </div>
  <div>
    <label>社名（フリガナ）</label>
    <input type="text" name="companykana" value="<?php echo $value["companykana"]?>">
  </div>
  <div>
    <label>郵便番号</label>
    <input type="text" name="postcode" value="<?php echo $value["postcode"]?>">
  </div>
  <div>
    <label>経理所在地</label>
    <input type="text" name="location" value="<?php echo $value["location"]?>">
  </div>
  <div>
    <label>電話番号</label>
    <input type="text" name="tell" value="<?php echo $value["tell"]?>">
  </div>
  <div>
    <label>FAX番号</label>
    <input type="text" name="fax" value="<?php echo $value["fax"]?>">
  </div>
  <div>
    <label>会社代表者　役職/氏名</label>
    <input type="text" name="representative" value="<?php echo $value["representative"]?>">
  </div>
  <div>
    <label>資本金</label>
    <input type="text" name="capital" value="<?php echo $value["capital"]?>">
  </div>
  <div>
    <label>設立年月日</label>
    <input type="text" name="edate" value="<?php echo $value["edate"]?>">
  </div>
  <div>
    <label>従業員数</label>
    <input type="text" name="employees" value="<?php echo $value["employees"]?>">
  </div>
  <div>
    <label>事業内容</label>
    <input type="text" name="content" value="<?php echo $value["content"]?>">
  </div>
  <div>
    <label>URL</label>
    <input type="text" name="url" value="<?php echo $value["url"]?>">
  </div>
  <div>
    <label>取引条件（支払いサイト）</label>
    <input type="text" name="site" value="<?php echo $value["site"]?>">
  </div>
  <div>
    <label>振込先　金融機関名</label>
    <input type="text" name="payee" value="<?php echo $value["payee"]?>">
  </div>
  <div>
    <label>支店名</label>
    <input type="text" name="branch" value="<?php echo $value["branch"]?>">
  </div>
  <div>
    <label>口座情報　種別</label>
    <input type="text" name="accountinformation" value="<?php echo $value["accountinformation"]?>">
  </div>
  <div>
    <label>口座番号</label>
    <input type="text" name="accountnumber" value="<?php echo $value["accountnumber"]?>">
  </div>
  <div>
    <label>人材派遣許認可</label>
    <input type="text" name="authorization" value="<?php echo $value["authorization"]?>">
  </div>
  <div>
    <label>発注書送付先担当者（フルネーム）</label>
    <input type="text" name="name" value="<?php echo $value["name"]?>">
  </div>
  <div>
    <label>発注書送付先担当者（メールアドレス）</label>
    <input type="text" name="mail" value="<?php echo $value["mail"]?>">
  </div>
</div>
  <form action="./CompanyController.php" method="get" onclick="return confirm('変更しますか？')">
  <input class="input" type="submit" name="id" value="送信">
  <input type="hidden" name='id' value= <?=$value['companyid'];?>>
  <!-- <button id="updatebtn" name="id" onclick="return confirm('変更しますか？')" class="deletebtn">送信</button> -->


  <div class="top">
    <a href="user_top.php">TOPページへ</a>
  </div>
</div>
</form>

<div class="errText" style="color: red;">
  <?php  if(!empty($_SESSION['error'])){
      foreach($_SESSION['error'] as $error){
          echo $error;
          echo '</br>';
      }
    }
    ?>
</div>
</body>
</html>
