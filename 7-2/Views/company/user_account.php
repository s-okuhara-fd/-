<?php include ( dirname(__FILE__) . '/header.php' ); ?>

<?php
session_start();
$errCompanyname = "";
$errCompanyid = "";
$errPassword = "";

if($_SERVER['REQUEST_METHOD']!=="POST"){
  $companyname = "";
  $companyid = "";
  $password = "";
  $errCompanyname = "";
  $errCompanyid = "";
  $errPassword = "";
}
else{
  $idPost = filter_input_array(INPUT_POST,$_POST);
  $companyname = $idPost['companyname'];
  $companyid = $idPost['companyid'];
  $password = $idPost['password'];

  if(!$companyname){
      $errCompanyname = "会社名は入力必須です";
  }
  if(!$companyid){
      $errCompanyid = "ユーザーIDは入力必須です";
  }
  if(!$password){
      $errPassword = "パスワードは入力必須です";
  }
}
?>

<div class="user-account">
  <h1>新規アカウント作成</h1>
  <form action="user_register.php" method="POST">

  <div class="newform">
    <label for="companyname"></label>
    <span><?php echo $errCompanyname?><span><br>
    <input type="text" class="companyname" name="companyname" id="companyname" placeholder="会社名" >

    <div>
    <label for="companyid"></label>
    <span><?php echo $errCompanyid?><span><br>
    <input type="text" class="companyid" name="companyid" id="companyid" placeholder="ログインID" >
    </div>

    <div>
    <label for="password"></label>
    <span><?php echo $errPassword?><span><br>
    <input type="password" class="password" name="password" id="password" placeholder="パスワード" >
    </div>

    <div class="btn">
      <button id="btn" class="btn" name="btn" type="submit">新規アカウント作成</button>
    </div>
  </div>
</div>
